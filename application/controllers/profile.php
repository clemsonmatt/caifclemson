<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct(); /* necessary! */

        /* load model for calls to database */
        $this->load->model('caifmodel');
        $this->load->helper('url');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
        {
            $data['username'] = '';
            show_404();
        }
            
        // get list of profile info
        if($session_data['student'] == 1)
            $data['profile'] = $this->caifmodel->get_student_info($session_data['username']);
        else if($session_data['host'] == 1)
        {
            $data['profile'] = $this->caifmodel->get_host_info($session_data['username']);
            $data['students'] = $this->caifmodel->host_stu_info($session_data['username']);
        }
        else
            $data['profile'] = $this->caifmodel->get_member_info($session_data['username']);
            
        // get a list of all events
        $data['events'] = $this->caifmodel->get_events();
        
        //Setup months
        $data['months'] = array('FALSE' => 'Month',
                       '1'  => 'Jan',
                       '2'  => 'Feb',
                       '3'  => 'Mar',
                       '4'  => 'Apr',
                       '5'  => 'May',
                       '6'  => 'Jun',
                       '7'  => 'Jul',
                       '8'  => 'Aug',
                       '9'  => 'Sep',
                       '10' => 'Oct',
                       '11' => 'Nov',
                       '12' => 'Dec'
                      );
        //Setup days
        $data['days']['FALSE'] = 'Day';         
       
        for($i=1;$i<=31;$i++){
            $data['days'][$i] = $i;
        }
       
        //Setup years
        $start_year = date("Y",mktime(0,0,0,date("m"),date("d"),date("Y")-50)); //Adjust 100 to however many year back you want
        $data['years']['FALSE'] = 'Year';
       
        for ($i=$start_year;$i<=date("Y");++$i) {
            $data['years'][$i] = $i;
        }
                    
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['profile_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        //$this->load->view('include/tabs',$data);
        if($session_data['student'] == 1) {
            $this->load->view('stu_profile',$data);
        }
        else if($session_data['host'] == 1) {
            if (($data['profile'][0]['updated'] == 0) && ($data['profile'][0]['host_option'] == 1)) {
                $this->load->view('host_active');
            }
            else {
                $this->load->view('host_profile',$data);
            }
        }
        else {
            $this->load->view('profile',$data);
        }
        $this->load->view('include/footer');
    }
    
    // update user's profile
    public function update()
    {
        $file_name = null;
        
        // upload picture to 'photos' folder
        if ($_FILES["file"]["error"] > 0) {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        } else {
            /* add time to pic name then upload */
            $info     = pathinfo($_FILES["file"]["name"]);
            $newName  = $info["filename"]."-".time();
            $fileName = $newName.".".$info["extension"];

            move_uploaded_file(
                $_FILES["file"]["tmp_name"],
                "photos/" . $fileName
            );
        }
        
        // get post info
        
        $data['post'] = $this->input->post();
        
        // get the id for this username
        $userid = $this->caifmodel->my_userid($_POST['username']);
        
        // check to see if they are members/students/hosts
        $session_data = $this->session->userdata('logged_in');
        if ($session_data['student'] == 1) {
            $this->caifmodel->update_stu_profile($data['post'], $fileName, $userid);
        } elseif ($session_data['host'] == 1) {
            $this->caifmodel->update_host_profile($data['post'], $fileName, $userid);
        } else {
            $this->caifmodel->update_mem_profile($data['post']);
        }
            
        // redirect
        redirect(base_url().'profile', 'location');
        
    }
    
    // change user's password
    public function change_password()
    {
        // posted data
        $data['post'] = $this->input->post();
        // update db
        $this->caifmodel->change_password($data['post']);
        // redirect
        redirect(base_url().'profile','location');  
    }
    
    // view student's info
    public function view_stu($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            
            // make sure they can't see other students
            $stu = $this->caifmodel->host_stu_info($session_data['username']);
            /*if(!in_array($id,$stu['id']))
                show_404();*/
            $i=0;
            foreach($stu as $s)
            {
                if($id == $s['id'])
                {
                    $i++;
                }
            }
            if($i == 0)
                show_404();
        }
        else
        {
            $data['username'] = '';
            show_404();
        }
        
        // get all info on student
        $data['student_info'] = $this->caifmodel->student_info($id);
        // host info
        $data['profile'] = $this->caifmodel->get_host_info($session_data['username']);
        // possible other students
        $data['students'] = $this->caifmodel->host_stu_info($session_data['username']);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['profile_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('view_student',$data);
        $this->load->view('include/footer');
    }
    
    // view host info
    public function view_host($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            
            $profile = $this->caifmodel->get_student_info($session_data['username']);
            if($id != $profile[0]['host_id'])
                show_404();
        }
        else
        {
            $data['username'] = '';
            show_404();
        }
        
        // get all info on student
        $data['host_info'] = $this->caifmodel->host_info($id);
        // host info
        $data['profile'] = $this->caifmodel->get_student_info($session_data['username']);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['profile_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('view_host',$data);
        $this->load->view('include/footer');
    }
    
    // update host is still hosting or not
    public function hostActive() 
    {
        // posted data
        $data['post'] = $this->input->post();
        // update db
        $this->caifmodel->change_host_updated($data['post']);
        // redirect
        redirect(base_url().'profile','location');  
    }
    
    
}