<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Manage extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); /* necessary! */

        /* load model for calls to database */
        $this->load->model('caifmodel');
        $this->load->helper('url');
    }

    public function index()
    {
        // logged in as admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                redirect(base_url().'profile','location');
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // get students
        $data['students'] = $this->caifmodel->get_students();
        // get hosts
        $data['hosts'] = $this->caifmodel->get_hosts();
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage',$data);
        $this->load->view('include/footer');
    }
    
    // manage the newsletters
    public function newsletters()
    {
        // logged in as admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // show the titles of the current newsletters
        $data['news_info'] = $this->caifmodel->get_newsletters();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_news',$data);
        $this->load->view('include/footer');
    }
    
    // upload a new newsletter
    public function upload_news()
    {
        // upload to 'uploads' folder
        if ($_FILES["file"]["error"] > 0)
        {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    
            if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                //echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                "upload/" . $_FILES["file"]["name"]);
                //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        }
        
        $file_name = $_FILES["file"]["name"];
        //echo "!!! file name = " . $file_name;
        
        // set data variable
        $data['title'] = $_POST['title'];
        $data['file_name'] = $file_name;
        $data['description'] = $_POST['description'];
        
        // updata database
        $this->caifmodel->insert_newsletter($data);
        
        // go back to manage page
        redirect(base_url().'manage','location');
    }
    
    // remove a newsletter
    public function remove_news()
    {
        // get posted data
        $data['post'] = $this->input->post();
        // send to model to remove
        $this->caifmodel->remove_news($data['post']);
        redirect(base_url().'manage/newsletters','location');   
    }
    
    // view all info given by the student
    public function view_student($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all info on student
        $data['student_info'] = $this->caifmodel->student_info($id);
        $data['pass'] = $this->caifmodel->get_pass($data['student_info']);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('view_student',$data);
        $this->load->view('include/footer');    
    }
    
    // view all info given by the host
    public function view_host($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all info on student
        $data['host_info'] = $this->caifmodel->host_info($id);
        $data['pass'] = $this->caifmodel->get_pass($data['host_info']);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('view_host',$data);
        $this->load->view('include/footer');    
    }
    
    // manage the photos
    public function photos()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get current photos
        $data['photos'] = $this->caifmodel->get_photos();
        
        // get the albums
        $data['albums'] = $this->caifmodel->get_albums();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_photos',$data);
        $this->load->view('include/footer');
    }
    
    // add album
    public function add_album()
    {
        // get post data
        $data['post'] = $this->input->post();
        // insert into table
        $this->caifmodel->add_album($data['post']); 
        redirect(base_url().'manage/photos','location');
    }
    
    // add photo
    public function upload_photos()
    {
        // put photos into 'photos' file
        if ($_FILES["file"]["error"] > 0)
        {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    
            if (file_exists("photos/" . $_FILES["file"]["name"]))
            {
                //echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                "photos/" . $_FILES["file"]["name"]);
                //echo "Stored in: " . "photos/" . $_FILES["file"]["name"];
            }
        }       
        $file_name = $_FILES["file"]["name"];
        //echo "!!! file name = " . $file_name;
        
        // get post data
        $data['file_name'] = $file_name;
        $data['album'] = $_POST['album'];
        $data['description'] = $_POST['description'];
        // insert into table
        $this->caifmodel->add_photo($data);
        redirect(base_url().'manage','location');   
    }
    
    // remove photo
    public function remove_photo()
    {
        // get post data
        $data['post'] = $this->input->post();
        // remove from db
        $this->caifmodel->remove_photo($data['post']);
        // redirect
        redirect(base_url().'manage/photos','location');    
    }
    
    // manage events
    public function events()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get list of events
        $data['events'] = $this->caifmodel->get_events();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_events',$data);
        $this->load->view('include/footer');    
    }
    
    // add event
    public function add_event()
    {
        // get post data
        $data['post'] = $this->input->post();
        // put into db
        $this->caifmodel->add_event($data['post']); 
        //redirect
        redirect(base_url().'manage/events','location');
    }
    
    // remove an event
    public function remove_event()
    {
        // get posted data
        $data['post'] = $this->input->post();
        // send to model to remove
        $this->caifmodel->remove_event($data['post']);
        redirect(base_url().'manage/events','location');    
    }
    
    // pair the student with host family
    public function pair()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get list of hosts
        $data['hosts'] = $this->caifmodel->get_hosts_fam();
        
        // get list of students (seperate paired and unpaired)
        $data['students'] = $this->caifmodel->get_students();
        $data['unpaired_students'] = $this->caifmodel->get_unpaired_students();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('pair',$data);
        $this->load->view('include/footer');
    }
    
    // try to auto pair the students with hosts
    public function auto_pair()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get list of students
        $data['students'] = $this->caifmodel->get_students();
        // get list of hosts
        $data['hosts'] = $this->caifmodel->get_hosts_fam();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('auto_pair_results',$data);
        $this->load->view('include/footer');    
    }
    
    // edit student information
    public function edit_stu($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all info on student
        $data['student_info'] = $this->caifmodel->student_info($id);
        $data['pass'] = $this->caifmodel->get_pass($data['student_info']);
        
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
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('edit_student',$data);
        $this->load->view('include/footer');    
    }
    
    // update student
    public function update_stu($id)
    {
        // upload picture to 'photos' folder
        if ($_FILES["file"]["error"] > 0)
        {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    
            if (file_exists("photos/" . $_FILES["file"]["name"]))
            {
                //echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                "photos/" . $_FILES["file"]["name"]);
                //echo "Stored in: " . "photos/" . $_FILES["file"]["name"];
            }
        }
        
        $file_name = $_FILES["file"]["name"];
        
        // check for in-use username
        $usernames = $this->caifmodel->all_usernames_except($_POST['old_username']);
        foreach($usernames as $user){
            if($user['UserName'] == $_POST['username'])
                show_error("ERROR -- This username is already in use!");
        }
        
        // get the id for this username
        $userid = $this->caifmodel->my_userid($_POST['old_username']);
        
        // get posted data
        $data['post'] = $this->input->post();
        // update in db
        $this->caifmodel->update_stu_profile($data['post'],$file_name,$userid);
        // redirect
        redirect(base_url().'manage','location');
    }
    
    // remove student
    public function remove_stu($id)
    {
        // remove from db
        $this->caifmodel->remove_stu($id);
        // redirect
        redirect(base_url().'manage','location');   
    }
    
    // edit host information
    public function edit_host($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all info on student
        $data['host_info'] = $this->caifmodel->host_info($id);
        $data['pass'] = $this->caifmodel->get_pass($data['host_info']);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('edit_host',$data);
        $this->load->view('include/footer');    
    }
    
    // update host
    public function update_host($id)
    {
        // upload picture to 'photos' folder
        if ($_FILES["file"]["error"] > 0)
        {
            //echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            //echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //echo "Type: " . $_FILES["file"]["type"] . "<br>";
            //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
            //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    
            if (file_exists("photos/" . $_FILES["file"]["name"]))
            {
                //echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"],
                "photos/" . $_FILES["file"]["name"]);
                //echo "Stored in: " . "photos/" . $_FILES["file"]["name"];
            }
        }
        
        $file_name = $_FILES["file"]["name"];
        
        // check for in-use username
        $usernames = $this->caifmodel->all_usernames_except($_POST['old_username']);
        foreach($usernames as $user){
            if($user['UserName'] == $_POST['username'])
                show_error("ERROR -- This username is already in use!");
        }
        
        // get the id for this username
        $userid = $this->caifmodel->my_userid($_POST['old_username']);
        
        // get posted data
        $data['post'] = $this->input->post();
        // update in db
        $this->caifmodel->update_host_profile($data['post'],$file_name,$userid);
        // redirect
        redirect(base_url().'manage','location');
    }
    
    // remove host
    public function remove_host($id)
    {
        // remove from db
        $this->caifmodel->remove_host($id);
        // redirect
        redirect(base_url().'manage','location');   
    }
    
    // manage members
    public function members()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all info on members
        $data['members'] = $this->caifmodel->all_members();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_members',$data);
        $this->load->view('include/footer');
    }
    
    // manage rsvp events
    public function rsvp()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all rsvps
        $data['rsvps'] = $this->caifmodel->all_rsvps();
        // get all events
        $data['events'] = $this->caifmodel->get_events();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_rsvp',$data);
        $this->load->view('include/footer');
    }
    
    // show all including past date rsvp's
    public function show_rsvp_all()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get all rsvps
        $data['rsvps'] = $this->caifmodel->all_rsvps();
        // get all events
        $data['events'] = $this->caifmodel->get_events();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('manage_rsvp_all',$data);
        $this->load->view('include/footer');
    }
    
    // download stu information
    public function download_stu()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get stu information
        $stu_info = $this->caifmodel->get_students();
        $host_info = $this->caifmodel->get_hosts();
        
        $i=0;
        foreach($stu_info as $stu)
        {
            $data['username'] = $stu['username'];
            $data['name'] = $stu['first_name'].' '.$stu['last_name'];
            $data['american_name'] = str_replace(array(",","\t","\n")," ",$stu['american_name']);
            if($stu['gender']==0){ $gender='Male'; }else{ $gender='Female'; };
            $data['gender'] = $gender;
            $data['country'] = $stu['home_country'];
            $data['birthday'] = $stu['birthday'];
            $data['phone'] = $stu['phone'];
            $data['apt_complex'] = str_replace(array(",","\t","\n")," ",$stu['apartment_complex']);
            $data['apt_num'] = str_replace(array(",","\t","\n")," ",$stu['apartment_number']);
            $data['mail_addr'] = str_replace(array(",","\t","\n")," ",$stu['mailing_address']);
            $data['city'] = $stu['city'];
            $data['zip'] = $stu['zip'];
            $data['email'] = $stu['email'];
            $data['area_of_study'] = $stu['area_of_study'];
            // degree program
            if($stu['degree_program'] == 0)
                $data['deg_pro'] = 'Undergraduate';
            else if($stu['degree_program'] == 1)
                $data['deg_pro'] = 'Masters';
            else if($stu['degree_program'] == 2)
                $data['deg_pro'] = 'PH. D.';
            else if($stu['degree_program'] == 3)
                $data['deg_pro'] = 'Post Doc.';
            else 
                $data['deg_pro'] = 'Visiting Scholar';
            // get host family name
            $set = 0;
            foreach($host_info as $host){
                if($host['id'] == $stu['host_id']){
                    $data['host_fam_name'] = str_replace(array(",","\t","\n")," ",$host['name']);
                    $set = 1;
                }
            }
            if($set == 0){
                $data['host_fam_name'] = ' ';
            }
            $data['allergies'] = str_replace(array(",","\t","\n")," ",$stu['allergies']);
            $data['languages'] = str_replace(array(",","\t","\n")," ",$stu['languages']);
            $data['travel'] = str_replace(array(",","\t","\n")," ",$stu['travel']);
            $data['activities'] = str_replace(array(",","\t","\n")," ",$stu['activities']);
            // marital status
            if($stu['marital_status'] == 1){
                $data['marital_status'] = 'Married';
                // spouse here
                if($stu['spouse_here'] == 1)
                    $data['spouse_here'] = 'Yes';
                else
                    $data['spouse_here'] = 'No';
            }
            else{
                $data['marital_status'] = 'Single';
                $data['spouse_here'] = ' ';
            }
            // spouse name
            $data['spouse_name'] = $stu['spouse_name'];
            // kids
            if($stu['kids'] == 1){
                $data['kids'] = 'Yes';
                if($stu['kids_here'] == 1)
                    $data['kids_here'] = 'Yes';
                else
                    $data['kids_here'] = 'No';
            }
            else{
                $data['kids'] = 'No';
                $data['kids_here'] = ' ';
            }
            // smoke
            if($stu['smoke'] == 1)
                $data['smoke'] = 'Yes';
            else
                $data['smoke'] = 'No';
            // car
            if($stu['car'] == 1)
                $data['car'] = 'Yes';
            else
                $data['car'] = 'No';
            // DNE foods
            $data['DNE'] = str_replace(array(",","\t","\n")," ",$stu['DNE_foods']);
            
            if($i==0)
            {
                $data['no_header'] = 0;
                $i++;
            }
            else
                $data['no_header'] = 1;
            
            // load view
            $this->load->view('download_stu',$data);
        }
    }
    
    // download host information
    public function download_host()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get hosts
        $host_info = $this->caifmodel->get_hosts();
        // get students
        $stu_info = $this->caifmodel->get_students();
        
        $i=0;
        foreach($host_info as $host)
        {
            $data['username'] = $host['username'];
            $name = str_replace(","," ",$host['name']);
            $data['name'] = $name;
            $data['address'] = $host['address'];
            $data['city'] = $host['city'];
            $data['state'] = $host['state'];
            $data['zip'] = $host['zip'];
            $data['mPhone'] = $host['mobile_phone'];
            $data['hPhone'] = $host['home_phone'];
            $data['wPhone'] = $host['work_phone'];
            $data['email'] = $host['email'];
            // set children type
            if($host['sm_child'] == 1)
                $data['sm_child'] = 'Yes';
            else
                $data['sm_child'] = ' ';
            if($host['tn_child'] == 1)
                $data['tn_child'] = 'Yes';
            else
                $data['tn_child'] = ' ';
            if($host['cl_child'] == 1)
                $data['cl_child'] = 'Yes';
            else
                $data['cl_child'] = ' ';
            if($host['gr_child'] == 1)
                $data['gr_child'] = 'Yes';
            else
                $data['gr_child'] = ' ';
            if($host['no_child'] == 1)
                $data['no_child'] = 'Yes';
            else
                $data['no_child'] = ' ';
            // set pet status
            if($host['pet'] == 'no_pet')
                $data['pet'] = 'No Pets';
            else if($host['pet'] == 'in_pet')
                $data['pet'] = 'Inside Pets';
            else if($host['pet'] == 'out_pet')
                $data['pet'] = 'Outside Pets';
            else 
                $data['pet'] = 'Both inside and outside Pets';
            // pet types
            $type_pet = str_replace(array(",","\t","\n")," ",$host['pet_type']);
            $data['pet_type'] = $type_pet;
            // hobbies
            $hobbies = str_replace(array(",","\t","\n")," ",$host['hobbies']);
            $data['hobbies'] = $hobbies;
            // travel
            $travel = str_replace(array(",","\t","\n")," ",$host['travel']);
            $data['travel'] = $travel;
            // languages
            $languages = str_replace(array(",","\t","\n")," ",$host['languages']);
            $data['languages'] = $languages;
            // host option
            if($host['host_option'] == 1)
                $data['host_option'] = 'Yes';
            else 
                $data['host_option'] = 'No';
            // set to default if not hosting
            if($host['host_option'] == 1)
            {
                // Gender preference
                if($host['type_stu'] == 0)
                    $data['type_stu'] = 'No Preference';
                else if($host['type_stu'] == 1)
                    $data['type_stu'] = 'Females Only';
                else if($host['type_stu'] == 2)
                    $data['type_stu'] = 'Males Only';
                else if($host['type_stu'] == 3)
                    $data['type_stu'] = 'Married Couples Only';
                else 
                    $data['type_stu'] = 'No Preference';
                $data['country'] = $host['country'];
                $data['students'] = $host['students'];
                // ILEP option
                $data['ILEP'] = $host['ILEP'];
                // Name of students
                $hosts_stus = array();
                foreach($stu_info as $stu){
                    if($stu['host_id']==$host['id']){
                        array_push($hosts_stus, $stu['first_name'].' '.$stu['last_name']);
                    }
                }
                if($hosts_stus == NULL){
                    $data['stu_name'] = 'none';
                }
                else {
                    $comma_seperated = implode(",",$hosts_stus);
                    $data['stu_name'] = str_replace(","," / ",$comma_seperated);
                }
            }
            else
            {
                $data['type_stu'] = ' ';
                $data['country'] = ' ';
                $data['students'] = ' ';
                $data['ILEP'] = ' ';
                $data['stu_name'] = ' ';
            }
            // financial contribution
            if($host['financial']==1){ 
                $donation = $host['contribution'];
                if($donation == 100){
                    $data['con_shirt_size1'] = $host['contribution_shirt1_size'];
                    $data['con_shirt_size2'] = $host['contribution_shirt2_size'];
                }
                else{
                    $data['con_shirt_size1'] = ' ';
                    $data['con_shirt_size2'] = ' '; 
                }
            }
            else{ 
                $donation = 0;
                $data['con_shirt_size1'] = ' ';
                $data['con_shirt_size2'] = ' '; 
            }
            $data['donation'] = $donation;
            // ladies option
            if($host['ladies'] == 1)
                $data['ladies'] = 'Yes';
            else
                $data['ladies'] = 'No';
            // events help
            if($host['event_help'] == 1)
                $data['event_help'] = 'Yes';
            else
                $data['event_help'] = 'No';
            // festival help
            if($host['festival'] == 1)
                $data['festival'] = 'Yes';
            else
                $data['festival'] = 'No';
            // bake desserts
            if($host['bake_dessert'] == 1)
                $data['bake_dessert'] = 'Yes';
            else
                $data['bake_dessert'] = 'No';
            // manning the booth
            if($host['man_booth'] == 1)
                $data['man_booth'] = 'Yes';
            else
                $data['man_booth'] = 'No';
            // english classes
            if($host['english_class'] == 1){
                $data['english_class'] = 'Yes';
                // fall classes
                if($host['fall_english_class'] == 1)
                    $data['fall_eng_class'] = 'Yes';
                else
                    $data['fall_eng_class'] = 'No';
                // spring classes
                if($host['spring_english_class'] == 1)
                    $data['spring_eng_class'] = 'Yes';
                else
                    $data['spring_eng_class'] = 'No';
                // summer classes
                if($host['summer_english_class'] == 1)
                    $data['summer_eng_class'] = 'Yes';
                else
                    $data['summer_eng_class'] = 'No';
            }
            else{
                $data['english_class'] = 'No';
                $data['fall_eng_class'] = ' ';
                $data['spring_eng_class'] = ' ';
                $data['summer_eng_class'] = ' ';
            }
            // apartment events
            if($host['apartment_events'] == 1)
                $data['apt_events'] = 'Yes';
            else
                $data['apt_events'] = 'No';
            // shopping trips
            if($host['shopping_trips'] == 1)
                $data['shopping_trips'] = 'Yes';
            else
                $data['shopping_trips'] = 'No';
            // group outings
            if($host['group_outing'] == 1)
                $data['group_outing'] = 'Yes';
            else
                $data['group_outing'] = 'No';
            // provide meals
            if($host['provide_meal'] == 1)
                $data['provide_meal'] = 'Yes';
            else
                $data['provide_meal'] = 'No';
            // recruitment
            if($host['recruitment'] == 1)
                $data['recruitment'] = 'Yes';
            else
                $data['recruitment'] = 'No';
            if($host['purchase_shirt']==1){ $shirt1 = $host['purchase_shirt1_size']; $shirt2 = $host['purchase_shirt2_size']; }else{ $shirt1 = 0; $shirt2 = 0; }
            $data['t_shirt'] = $shirt1.', '.$shirt2;
            
            if($i==0)
            {
                $data['no_header'] = 0;
                $i++;
            }
            else
                $data['no_header'] = 1;
            
            // load view
            $this->load->view('download_host',$data);
        }

    }
    
    // download rsvp list
    public function download_rsvp($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get list of people from the event
        $list_info = $this->caifmodel->get_list_rsvp($id);
        
        $i=0;
        foreach($list_info as $list)
        {
            $data['name'] = $list['name'];
            $data['coming'] = $list['coming'];
            $data['email'] = $list['email'];
            
            if($i==0)
            {
                $data['no_header'] = 0;
                $i++;
            }
            else
                $data['no_header'] = 1;
            
            // load view
            $this->load->view('download_rsvp',$data);
        }
    }
    
    // host choice of student(s)
    public function host_choice($host_id)
    {
        $data['post'] = $this->input->post();
        if($_POST['submit']=="Save Pairing")
            $this->caifmodel->host_choice($data['post'],$host_id);
        elseif($_POST['submit']=="Update Pairing")
            $this->caifmodel->host_choice_update($data['post'],$host_id);
        redirect(base_url().'manage/pair','location');
    }
    
    // student choice of host
    public function stu_choice($stu_id)
    {
        $data['post'] = $this->input->post();
        $this->caifmodel->stu_choice($data['post'],$stu_id);
        redirect(base_url().'manage/pair','location');
    }
    
    // save list from auto-pair
    public function save_auto_pair()
    {
        $data['post'] = $this->input->post();
        $this->caifmodel->save_auto_pair($data['post']);
        redirect(base_url().'manage/pair','location');
    }
    
    // make a new email
    public function email()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('email',$data);
        $this->load->view('include/footer');
    }
    
    // send email
    public function send_email()
    {
        $data['post'] = $this->input->post();
        $this->caifmodel->send_email($data['post']);
        redirect(base_url().'manage','location');
    }
    
    // show sent emails
    public function sent_emails()
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get emails
        $data['emails'] = $this->caifmodel->get_emails();
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('email_sent',$data);
        $this->load->view('include/footer');
    }
    
    // email the list of people associated with the an RSVP event
    public function email_rsvp_list($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        // get list of people who have responded to the event
        $data['responses'] = $this->caifmodel->get_list_rsvp($id);
        
        // set active tab
        $data['welcome_active'] = "";
        $data['host_active'] = "";
        $data['event_active'] = "";
        $data['manage_active'] = "active";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('email_rsvp',$data);
        $this->load->view('include/footer');
    }
    
    // send email to RSVP list
    public function send_email_rsvp()
    {
        $data['post'] = $this->input->post();
        $this->caifmodel->send_email_rsvp($data['post']);
        redirect(base_url().'manage','location');
    }
    
    // archive student
    public function archive($id)
    {
        // check for admin
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['admin'] = $session_data['admin'];
            if($data['admin'] == 0)     // non-admin
                show_404();
        }
        // not admin
        else
        {
            // set username to null 
            $data['username'] = '';
            // don't let anyone but admin have access
            show_404();
        }
        
        $this->caifmodel->archive_student($id);
        
        redirect(base_url().'manage','location');
    }
    
}