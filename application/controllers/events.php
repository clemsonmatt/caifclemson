<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); /* necessary! */

		/* load model for calls to database */
		$this->load->model('caifmodel');
		$this->load->helper('url');
	}

	public function index($year=NULL, $month=NULL)
	{
		// check for admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		else
			$data['username'] = '';
			
		/* set calendar preferences */
		$prefs = array (
				   'show_next_prev'  => TRUE,
				   'next_prev_url'   => base_url().'events/index'
				 );
	
		
		$prefs['template'] = '
	
		 {table_open}<table border="0" cellpadding="10" cellspacing="10">{/table_open}

		 {heading_row_start}<tr>{/heading_row_start}
	  
		 {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		 {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		 {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
	  
		 {heading_row_end}</tr>{/heading_row_end}
	  
		 {week_row_start}<tr>{/week_row_start}
		 {week_day_cell}<td>{week_day}</td>{/week_day_cell}
		 {week_row_end}</tr>{/week_row_end}
	  
		 {cal_row_start}<tr>{/cal_row_start}
		 {cal_cell_start}<td>{/cal_cell_start}
	  
		 {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
		 {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}
	  
		 {cal_cell_no_content}{day}{/cal_cell_no_content}
		 {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}
	  
		 {cal_cell_blank}&nbsp;{/cal_cell_blank}
	  
		 {cal_cell_end}</td>{/cal_cell_end}
		 {cal_row_end}</tr>{/cal_row_end}
	  
		 {table_close}</table>{/table_close}';
	  
		$this->load->library('calendar', $prefs);
		
		// get all events
		$data['events'] = $this->caifmodel->get_events();
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('events');
		$this->load->view('include/footer');
	}
	
	// show newsletters
	public function newsletters()
	{
		//check for admin
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
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// get newsletters
		$data['newsletters'] = $this->caifmodel->get_newsletters();
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('newsletters',$data);
		$this->load->view('include/footer');
	}
	
	// show photos
	public function photos()
	{
		//check for admin
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
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// get list of photos
		$data['photos'] = $this->caifmodel->get_photos();
		$data['albums'] = $this->caifmodel->get_albums();
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('photos',$data);
		$this->load->view('include/footer');
	}
	
	// show photos by album
	public function album($id)
	{
		//check for admin
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
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// get list of photos
		$data['photos'] = $this->caifmodel->get_photos_by_album($id);
		$data['albums'] = $this->caifmodel->get_albums();
		$data['album_id'] = $id;
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('album',$data);
		$this->load->view('include/footer');
	}
	
	// show all photos
	public function all_photos()
	{
		//check for admin
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
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// get list of photos
		$data['photos'] = $this->caifmodel->get_photos();
		$data['albums'] = $this->caifmodel->get_albums();
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('all_photos',$data);
		$this->load->view('include/footer');
	}
	
	// show details of an event
	public function show_event($id)
	{
		//check for admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
			// get info if user is logged in
			$data['user_info'] = $this->caifmodel->get_user_info($session_data['username']);
			// see if they have already rsvp'ed to the event
			$data['already_rsvp'] = $this->caifmodel->get_rsvp($session_data['username'],$id);
		}
		else
			$data['username'] = '';
			
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// get the data for the event
		$data['event_info'] = $this->caifmodel->get_event_info($id);
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('show_events',$data);
		$this->load->view('include/footer');	
	}
	
	// edit an event
	public function edit_event($id)
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
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
		$data['event_active'] = "active";
		
		// get the data for the event
		$data['event_info'] = $this->caifmodel->get_event_info($id);
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('edit_event',$data);
		$this->load->view('include/footer');	
	}
	
	// update the edited event in the db
	public function change_event()
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->edit_event($data['post']);	
		// redirect
		redirect(base_url().'events','location');
	}
	
	// rsvp to an event
	public function rsvp($event_id)
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->rsvp($data['post'],$event_id);
		// redirect
		redirect(base_url().'events/show_event/'.$event_id,'location');
	}
	
	// show all events
	public function show_all_events()
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
		}
		
		// get all events in decending order
		$data['events'] = $this->caifmodel->get_events_dec();
		/*$temp_events = $this->caifmodel->get_events_dec();
		
		$hold_sorted_events = array();
		foreach ($temp_events as $temp) {
			$hold_sorted_events = $this->sort_by_date($hold_sorted_events, $temp);
		}
		
		$data['events'] = $hold_sorted_events;
		*/
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('show_all_events',$data);
		$this->load->view('include/footer');
	}
	
	public function sort_by_date ($hold_sorted_events, $new_date) {
		
		$temp_sort_array = array();
		$new_sorted_array = array();
		
		if ( empty( $hold_sorted_events ) ) {
			array_push( $hold_sorted_events, $new_date );	
		}
		else {
			$i = 0;
			foreach ($hold_sorted_events as $e) {
				if ( date('m/d/Y', strtotime($e['date'])) < date('m/d/Y', strtotime($new_date['date'])) ) {
					
					$j = 0;
					foreach ($hold_sorted_events as $temp_e) {
						if ($j > $i) {
							array_push( $temp_sort_array, $temp_e );
						}
						$j++;
					}
					
					$new_sorted_array[$i] = $new_date;
					
					$k = $i + 1;
					foreach ($temp_sort_array as $new_sort) {
						$new_sorted_array[$k] = $new_sort;
						$k++;
					}
					
					break;
				}
				$i++;
			}
		}
		return $new_sorted_array;
	}
	
	// international club
	public function club()
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
		}
		
		// get info of all classes
		$data['clubs'] = $this->caifmodel->get_clubs();
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('club',$data);
		$this->load->view('include/footer');
	}
	
	// edit conversational club info
	public function sub_club()
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->club($data['post']);
		// redirect
		redirect(base_url().'events/club','location');
	}
	
	// add new english class
	public function new_club()
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
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
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('new_club',$data);
		$this->load->view('include/footer');	
	}
	
	// show an english class
	public function show_club($id)
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
		}
		
		// get info from the class id
		$data['class_info'] = $this->caifmodel->club_info($id);
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('show_club',$data);
		$this->load->view('include/footer');
	}
	
	// edit an english class
	public function edit_club($id)
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
			// don't let anyone but admin have access
			show_404();
		}
		
		// get info from the class id
		$data['class_info'] = $this->caifmodel->club_info($id);
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('edit_club',$data);
		$this->load->view('include/footer');
	}
	
	// edit english class info
	public function sub_edit_club($id)
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->edit_club($data['post'],$id);
		// redirect
		redirect(base_url().'events/show_club/'.$id,'location');
	}
	
	// delete english class
	public function delete_club($id)
	{
		$this->caifmodel->delete_club($id);
		redirect(base_url().'events/club','location');
	}
	
	
	
	// conversational english class
	public function eng_class()
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
		}
		
		// get info of all classes
		$data['classes'] = $this->caifmodel->get_eng_classes();
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('eng_class',$data);
		$this->load->view('include/footer');
	}
	
	// edit conversational english class info
	public function sub_eng_class()
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->eng_class($data['post']);
		// redirect
		redirect(base_url().'events/eng_class','location');
	}
	
	// add new english class
	public function new_eng_class()
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
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
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('new_eng_class',$data);
		$this->load->view('include/footer');	
	}
	
	// show an english class
	public function show_eng_class($id)
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
		}
		
		// get info from the class id
		$data['class_info'] = $this->caifmodel->eng_class_info($id);
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('show_eng_class',$data);
		$this->load->view('include/footer');
	}
	
	// edit an english class
	public function edit_eng_class($id)
	{
		// logged in as admin
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['admin'] = $session_data['admin'];
		}
		// not admin
		else
		{
			// set username to null 
			$data['username'] = '';
			// don't let anyone but admin have access
			show_404();
		}
		
		// get info from the class id
		$data['class_info'] = $this->caifmodel->eng_class_info($id);
		
		// set active tab
		$data['welcome_active'] = "";
		$data['host_active'] = "";
		$data['event_active'] = "active";
		
		// load views
		$this->load->view('include/header',$data);
		$this->load->view('include/tabs',$data);
		$this->load->view('edit_eng_class',$data);
		$this->load->view('include/footer');
	}
	
	// edit english class info
	public function sub_edit_eng_class($id)
	{
		// get post data
		$data['post'] = $this->input->post();
		// update db
		$this->caifmodel->edit_eng_class($data['post'],$id);
		// redirect
		redirect(base_url().'events/show_eng_class/'.$id,'location');
	}
	
	// delete english class
	public function delete_eng_class($id)
	{
		$this->caifmodel->delete_eng_class($id);
		redirect(base_url().'events/eng_class','location');
	}
	
}