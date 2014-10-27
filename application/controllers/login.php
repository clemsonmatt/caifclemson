<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
	class Login extends CI_Controller {
	 
	function __construct()
	{
		parent::__construct();
	    $this->load->model('caifmodel');
	    $this->load->helper('url');
	}
	 
	function index()
	{
		 //This method will have the credentials validation
		 $this->load->library('form_validation');
	   
		 $this->form_validation->set_rules('myusername', 'Username', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('mypassword', 'Password', 'trim|required|xss_clean|callback_check_database');
	   
		 if($this->form_validation->run() == FALSE)
		 {
		   //Field validation failed.  User redirected to login page
		   redirect(base_url(),'location');
		 }
		 else
		 {
		   //Go to private area
		   redirect(base_url().'manage','location');
		 }
	 
	}
	 
	 function check_database($password)
	 {
		 //Field validation succeeded.  Validate against database
		 $username = $this->input->post('myusername');
	   
		 //query the database
		 $result = $this->caifmodel->login($username, $password);
	   
		 if($result)
		 {
		   $sess_array = array();
		   foreach($result as $row)
		   {
			 $sess_array = array(
			   'id' => $row->id,
			   'username' => $row->UserName,
			   'admin' => $row->admin,
			   'student' => $row->student,
			   'host' => $row->host
			 );
			 $this->session->set_userdata('logged_in', $sess_array);
		   }
		   return TRUE;
		 }
		 else
		 {
		   $this->form_validation->set_message('check_database', 'Invalid username or password');
		   return false;
		 }
	 }
	
	function reset_pw()
	{
		// get posted data
		$data['post'] = $this->input->post();
		// send to db
		$this->caifmodel->reset_pw($data['post']);
		// redirect
		redirect(base_url(),'location');	
	}
}
?>