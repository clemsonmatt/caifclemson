<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {

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
        
        // set active tab
        $data['welcome_active'] = "active";
        $data['host_active'] = "";
        $data['event_active'] = "";
        
        // load views
        $this->load->view('include/header',$data);
        $this->load->view('include/tabs',$data);
        $this->load->view('welcome_message');
        $this->load->view('include/footer');
    }
    
    // check to see if admin
    public function login()
    {
        // get POST data with XSS Filtering from events form
        $data['post'] = $this->input->post(NULL, TRUE);
        
        $query = $this->caifmodel->is_admin($data['post']);
        if($query)
        {
            $sess_array = array();
            foreach($query as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->UserName);  
            }
            $this->session->set_userdata('logged_in', $sess_array);
        }
        $this->index();
    }
    
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url(),'location');
    }
    
    // officers page
    public function officers()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
        $this->load->view('officers');
        $this->load->view('include/footer');
    }
    
    // members page
    public function member()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
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
        $this->caifmodel->add_member($data['post']);
        // redirect
        redirect(base_url(),'location');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
