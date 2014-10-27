<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Host extends CI_Controller
{
    
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
            $data['username'] = '';
            
        // get list of all events
        $data['events'] = $this->caifmodel->get_events();
                    
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('host');
        $this->load->view('include/footer');
    }
    
    public function checkUsername()
    {
        $action = $_POST['action'];
        
        if($action == 'check_username')
        {
            $u = $_POST['username'];
            _check_username($u);
        }
    }
    
    public function _check_username($u)
    {
        $usernames = $this->caifmodel->all_usernames();
        
        if(in_array($u, $usernames))
        {
            echo '<span class="no">{$u} is not avaliable</span>';
        }
        else
        {
            echo '<span class="yes">{$u} is available</span>';
        }
    }
    
    public function check()
    {
        $this->load->view('check');
    }
    
    public function host_form()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // get a list of all usernames
        $data['usernames'] = $this->caifmodel->all_usernames();
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header', $data);
        $this->load->view('include/tabs', $data);
        $this->load->view('host_form');
        $this->load->view('include/footer');
    }
    
    public function invalid_host_form()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header', $data);
        $this->load->view('include/tabs', $data);
        $this->load->view('host_form2');
        $this->load->view('include/footer');
    }
    
    public function submit_host()
    {
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
        
        // get post data
        $data['post'] = $this->input->post();
        // insert into db
        $query = $this->caifmodel->new_host($data['post'], $fileName);
        if ($query != null) {
            redirect(base_url().'host/invalid_host_form', 'location');
        } else {
            // redirect
            redirect(base_url().'host/host_guide', 'location');
        }
    }
    
    public function stu_form()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
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
       
        for ($i=1; $i<=31; $i++) {
            $data['days'][$i] = $i;
        }
       
        //Setup years
        $start_year = date("Y", mktime(0, 0, 0, date("m"), date("d"), date("Y") - 50)); //Adjust 100 to however many year back you want
        $data['years']['FALSE'] = 'Year';
       
        for ($i=$start_year; $i<=date("Y"); ++$i) {
            $data['years'][$i] = $i;
        }
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('stu_form');
        $this->load->view('include/footer');
    }
    
    public function invalid_stu_form()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        } else {
            $data['username'] = '';
        }
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
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
       
        for ($i=1; $i<=31; $i++) {
            $data['days'][$i] = $i;
        }
       
        //Setup years
        $start_year = date("Y",mktime(0,0,0,date("m"),date("d"),date("Y")-50)); //Adjust 100 to however many year back you want
        $data['years']['FALSE'] = 'Year';
       
        for ($i=$start_year;$i<=date("Y");++$i) {
            $data['years'][$i] = $i;
        }
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('stu_form2');
        $this->load->view('include/footer');
    }
    
    public function submit_stu()
    {
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
        
        $file_name = $_FILES["file"]["name"];
        
        // get post data
        $data['post'] = $this->input->post();
        // insert into db
        $query = $this->caifmodel->new_student($data['post'], $fileName);
        if ($query != null) {
            redirect(base_url().'host/invalid_stu_form', 'location');
        } else {
            // redirect
            redirect(base_url().'host/stu_guide', 'location');
        };
    }
    
    // show host guidelines
    public function host_guide()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('host_guide');
        $this->load->view('include/footer');
    }
    
    // show host activity ideas
    public function activity_ideas()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('host_activity_ideas');
        $this->load->view('include/footer');
    }
    
    // show host conversation starters
    public function conversation_starters()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('conversation_starters');
        $this->load->view('include/footer');
    }
    
    // show host what to serve
    public function what_to_serve()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // get recipe list
        $data['recipes'] = $this->caifmodel->get_recipes();
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('what_to_serve');
        $this->load->view('include/footer');
    }
    
    // show student guidelines
    public function stu_guide()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('stu_guide');
        $this->load->view('include/footer');
    }
    
    // add recipe
    public function add_recipe()
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
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('add_recipe');
        $this->load->view('include/footer');
    }
    
    // add new recipe
    public function submit_recipe()
    {
        // get post data
        $data['post'] = $this->input->post();
        // send to db
        $this->caifmodel->add_recipe($data['post']);
        // redirect
        redirect(base_url().'host/what_to_serve','location');
    }
    
    // edit recipe
    public function edit_recipe($id)
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
        
        // get info about recipe
        $data['recipe'] = $this->caifmodel->get_recipe_info($id);
            
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "active";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('edit_recipe');
        $this->load->view('include/footer');
    }
    
    // edit current recipe
    public function submit_edit_recipe($id)
    {
        // get post data
        $data['post'] = $this->input->post();
        // send to db
        $this->caifmodel->edit_recipe($data['post'],$id);
        // redirect
        redirect(base_url().'host/what_to_serve','location');
    }
    
    /********* This goes in Welcome controller *************/
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        //session_destroy();
        redirect(base_url(),'location');
    }
    
    // officers page
    public function officers()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
            
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('officers',$data);
        $this->load->view('include/footer');
    }
    
    // members page
    public function member()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
        
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('membership');
        $this->load->view('include/footer');
    }
    
    // add a member
    public function add_member()
    {
        // get post data
        $data['post'] = $this->input->post();
        // add member
        $query = $this->caifmodel->add_member($data['post']);
        if($query != TRUE)
            echo $query;
        else
        {
            // redirect
            redirect(base_url(),'location');
        }
    }
    
    // contact us
    public function contact_us()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
        
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('contact_us');
        $this->load->view('include/footer');
    }
    
    // testimonials
    public function testimonials()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        }
        else
            $data['username'] = '';
        
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('testimonials');
        $this->load->view('include/footer');
    }

    // new look
    public function newLook()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
        } else {
            $data['username'] = '';
        }
        
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/newTabs', $data);
        $this->load->view('include/newHeader', $data);
        $this->load->view('newWelcome');
        $this->load->view('include/newFooter');
    }
    
}