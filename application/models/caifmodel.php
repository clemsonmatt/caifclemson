<?php if (!defined('BASEPATH')) die();
class CAIFModel extends CI_Model 
{
    // inherits its parent's classes and methods
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    // check for login
    public function login($username, $password)
    {   
        $this->db->select('id, UserName, password, admin, student, host');
        $this->db->from('login');
        $this->db->where('UserName',$username);
        $this->db->where('password',$password);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if($query->num_rows() == 1)
            return $query->result();
        else
            return false;
    }
    
    // reset password and email user
    public function reset_pw($form_data)
    {
        $user_email = $this->db->query('SELECT * FROM login WHERE UserName="'.$form_data['username'].'"');
        if($user_email->num_rows() != NULL)
        {
            // reset password
            $this->db->query('UPDATE login SET password="mypassword1" WHERE UserName="'.$form_data['username'].'"');
            // send email
            foreach($user_email->result() as $email)
            {
                $to = $email->email;
            }
            $subject = "CAIF Password Reset";
            $message = "<p>Your email has been reset to: mypassword1</p>
                        <br />
                        <p>Please login to <a href='caifclemson.org'>caifclemson.org</a> and change your password.</p>
                        <br />
                        Thank You!
                        - CAIF";
            $from = 'Clemson Area International Friendship';
            $headers = "From: $from\nContent-Type: text/html; charset=iso-8859-1";
            mail($to,$subject,$message,$headers);
        }
    }
    
    // check username avaliability
    public function all_usernames()
    {
        return $this->db->query('SELECT * FROM login')->result_array();
    }
    
    // check username avaliability
    public function all_usernames_except($username)
    {
        return $this->db->query('SELECT * FROM login WHERE UserName!="'.$username.'"')->result_array();
    }
    
    // check username avaliability
    public function my_userid($username)
    {
        return $this->db->query('SELECT * FROM login WHERE UserName="'.$username.'"')->result_array();
    }
    
    // get id with username
    public function my_stu_userid($username)
    {
        return $this->db->query('SELECT * FROM students WHERE username="'.$username.'"')->result_array();
    }
    
    // get id with username
    public function my_host_userid($username)
    {
        return $this->db->query('SELECT * FROM hosts WHERE username="'.$username.'"')->result_array();
    }
    
    // get password for user
    public function get_pass($username)
    {
        return $this->db->query('SELECT * FROM login WHERE UserName="'.$username[0]['username'].'"')->result_array();
    }
    
    public function get_pw($username)
    {
        return $this->db->query('SELECT * FROM login WHERE UserName="'.$username.'"')->result_array();
    }
    
    // new student information
    public function new_student($form_data, $file_name)
    {
        // check for the same person
        
        // check to see if username is valid
        $query = $this->db->query('SELECT * FROM login WHERE UserName="'.$form_data['username'].'"');
        if($query->num_rows() != NULL)
            return $query->result_array();
        else
        {
            // insert into login table
            $data = array('UserName' => $form_data['username'],
                          'password' => $form_data['password'],
                          'FirstName' => $form_data['first_name'],
                          'LastName' => $form_data['last_name'],
                          'email' => $form_data['email'],
                          'admin' => 0,
                          'student' => 1);
            $this->db->set($data);
            $this->db->insert('login');
            
            $birthday = $form_data['month'].'/'.$form_data['day'].'/'.$form_data['year'];
            
            // insert into student table
            $data =  array('username' => $form_data['username'],
                           'first_name' => $form_data['first_name'],
                           'last_name' => $form_data['last_name'],
                           'american_name' => $form_data['american_name'],
                           'gender' => $form_data['gender'],
                           'birthday' => $birthday,
                           'phone' => $form_data['phone'],
                           'email' => $form_data['email'],
                           'apartment_complex' => $form_data['apt_name'],
                           'apartment_number' => $form_data['apt_num'],
                           'mailing_address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'zip' => $form_data['zip'],
                           'area_of_study' => $form_data['area_of_study'],
                           'home_country' => $form_data['home_country'],
                           'host_id' => 0,
                           'allergies' => $form_data['allergies'],
                           'degree_program' => $form_data['degree_program'],
                           'languages' => $form_data['languages'],
                           'travel' => $form_data['travel'],
                           'marital_status' => $form_data['marital_status'],
                           'spouse_here' => $form_data['spouse_here'],
                           'spouse_name' => $form_data['spouse_name'],
                           'kids' => $form_data['kids'],
                           'kids_here' => $form_data['kids_here'],
                           'activities' => $form_data['activities'],
                           'smoke' => $form_data['smoke'],
                           'car' => $form_data['car'],
                           'DNE_foods' => $form_data['DNE_foods'],
                           'pic' => $file_name);
            $this->db->set($data);
            // insert into table
            $this->db->insert('students');
            
            // send email
            $to = $form_data['email'];
            $subject = "New CAIF Student Membership";
            $message = "<h1>Welcome ".$form_data['first_name']."!</h1>
                        <br />
                        <p>We would like to welcome you to the Clemson Area International Friendship organization!</p>
                        <br />
                        <p>
                            You may edit any of your information by logging in at <a href='caifclemson.org'>caifclemson.org</a>.
                            <br />
                            Your username is '".$form_data['username']."'.
                        </p>
                        <br />
                        <p>If you have any questions, please contact Kathy Mabry by phone: 864-882-8141 or 864-710-2756, or by email: sccaif@gmail.com</p>
                        <br /><br />
                        Thank You!
                        <br />
                        - CAIF";
            $from = "Clemson Area International Friendship";
            $headers = "From: $from\nContent-Type: text/html; charset=iso-8859-1";
            mail($to,$subject,$message,$headers);
            
            return NULL;
        }
    }
    
    // new host info
    public function new_host($form_data,$file_name)
    {
        // check for the same person
        
        // check to see if username is valid
        $query = $this->db->query('SELECT * FROM login WHERE UserName="'.$form_data['username'].'"');
        if($query->num_rows() != NULL)
            return $query->result_array();
        else
        {
            // make sure passwords are the same
            if($form_data['password']!=$form_data['password_again'])
                return 'No';
            
            // insert into login table
            $data = array('UserName' => $form_data['username'],
                          'password' => $form_data['password'],
                          'FirstName' => $form_data['name'],
                          'email' => $form_data['email'],
                          'admin' => 0,
                          'host' => 1);
            $this->db->set($data);
            $this->db->insert('login');
            
            // insert into the db
            $data =  array('username' => $form_data['username'],
                           'name' => $form_data['name'],
                           'address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'state' => $form_data['state'],
                           'zip' => $form_data['zip'],
                           'country' => $form_data['country'],
                           'mobile_phone' => $form_data['mobile_phone'],
                           'home_phone' => $form_data['home_phone'],
                           'work_phone' => $form_data['work_phone'],
                           'email' => $form_data['email'],
                           'sm_child' => $form_data['sm_child'],
                           'tn_child' => $form_data['tn_child'],
                           'cl_child' => $form_data['cl_child'],
                           'gr_child' => $form_data['gr_child'],
                           'no_child' => $form_data['no_child'],
                           'pet' => $form_data['pet'],
                           'pet_type' => $form_data['pet_type'],
                           'hobbies' => $form_data['hobbies'],
                           'travel' => $form_data['travel'],
                           'languages' => $form_data['languages'],
                           'type_stu' => $form_data['type_stu'],
                           'students' => $form_data['students'],
                           'pic' => $file_name,
                           'host_option' => $form_data['host_option'],
                           'ILEP' => $form_data['ILEP'],
                           'financial' => $form_data['financial'],
                           'contribution' => $form_data['contribution'],
                           'contribution_shirt1_size' => $form_data['contribution_shirt1_size'],
                           'contribution_shirt2_size' => $form_data['contribution_shirt2_size'],
                           'ladies' => $form_data['ladies'],
                           'event_help' => $form_data['event_help'],
                           'festival' => $form_data['festival'],
                           'bake_dessert' => $form_data['bake_dessert'],
                           'man_booth' => $form_data['man_booth'],
                           'english_class' => $form_data['english_class'],
                           'fall_english_class' => $form_data['fall_english_class'],
                           'spring_english_class' => $form_data['spring_english_class'],
                           'summer_english_class' => $form_data['summer_english_class'],
                           'apartment_events' => $form_data['apartment_events'],
                           'shopping_trips' => $form_data['shopping_trips'],
                           'group_outing' => $form_data['group_outing'],
                           'provide_meal' => $form_data['provide_meal'],
                           'recruitment' => $form_data['recruitment'],
                           'purchase_shirt' => $form_data['purchase_shirt'],
                           'purchase_shirt1_size' => $form_data['purchase_shirt1_size'],
                           'purchase_shirt2_size' => $form_data['purchase_shirt2_size']);
            $this->db->set($data);
            // insert into table
            $this->db->insert('hosts');
            
            // send email
            $to = $form_data['email'];
            $subject = "New CAIF Host Membership";
            $message = "<h1>Welcome ".$form_data['name']."!</h1>
                        <br />
                        <p>We would like to welcome you to the Clemson Area International Friendship organization!</p>
                        <br />
                        <p>
                            You may edit any of your information by logging in at <a href='caifclemson.org'>caifclemson.org</a>.
                            <br />
                            Your username is '".$form_data['username']."'.
                        </p>
                        <br />
                        <p>If you have any questions, please contact Kathy Mabry by phone: 864-882-8141 or 864-710-2756, or by email: sccaif@gmail.com</p>
                        <br /><br />
                        Thank You!
                        <br />
                        - CAIF";
            $from = "Clemson Area International Friendship";
            $headers = "From: $from\nContent-Type: text/html; charset=iso-8859-1";
            mail($to,$subject,$message,$headers);
            
            return NULL;
        }
    }
    
    // change host updated 
    public function change_host_updated($form_data)
    {
        $this->db->query('UPDATE hosts SET updated = 1 WHERE username = "'.$form_data['username'].'"');
        
        if ($form_data['submit'] == "no") 
        {
            // set host option to 0
            $this->db->query('UPDATE hosts SET host_option = 0 WHERE username = "'.$form_data['username'].'"');
            
            // remove host from student
            $host_id = $this->db->query('SELECT id FROM hosts WHERE username = "'.$form_data['username'].'"')->result_array();
            $students = $this->db->query('SELECT * FROM students WHERE host_id = "'.$host_id[0]['id'].'"')->result_array();
            foreach ($students as $stu) {
                $this->db->query('UPDATE students SET host_id = 0 WHERE id = "'.intval($stu['id']).'"');
            }
        }
        return NULL;
    }
    
    // get a list of all the students
    public function get_students()
    {
        $query = $this->db->query('SELECT * FROM students WHERE active = 1 ORDER BY last_name ASC');
        return $query->result_array();  
    }
    
    // get a list of un-paired students
    public function get_unpaired_students()
    {
        $query = $this->db->query('SELECT * FROM students WHERE active = 1 AND host_id = 0 ORDER BY submit_time ASC');
        return $query->result_array();  
    }
    
    // get a list of all the host families
    public function get_hosts()
    {
        $query = $this->db->query('SELECT * FROM hosts WHERE active = 1 ORDER BY SUBSTRING_INDEX(name," ",-1) ASC');
        return $query->result_array();  
    }
    
    // get a list of hosts that are hosting a student
    public function get_hosts_fam()
    {
        $query = $this->db->query('SELECT * FROM hosts WHERE active = 1 AND host_option=1 ORDER BY SUBSTRING_INDEX(name," ",-1) ASC');
        return $query->result_array();
    }
    
    // get a list of all the newsletters
    public function get_newsletters()
    {
        $query = $this->db->query('SELECT * FROM newsletters');
        return $query->result_array();
    }
    
    // upload a new newsletter
    public function insert_newsletter($form_data)
    {
        $data = array('title' => $form_data['title'],
                      'content' => 'upload/'.$form_data['file_name'],
                      'description' => $form_data['description']);
        $this->db->set($data);
        $this->db->insert('newsletters');
    }
    
    // remove a newsletter
    public function remove_news($form_data)
    {
        $title = $form_data['remove_news'];
        $this->db->query('DELETE FROM newsletters WHERE title="'.$title.'"');   
    }
    
    // get student info
    public function student_info($id)
    {
        $query = $this->db->query('SELECT * FROM students WHERE id="'.$id.'"');
        return $query->result_array();
    }
    
    // get student info from username
    public function get_student_info($username)
    {
        return $this->db->query('SELECT * FROM students WHERE username="'.$username.'"')->result_array();
    }
    
    // archive a student
    public function archive_student($id)
    {
        $this->db->query('UPDATE students SET active = 0 WHERE id = "'.$id.'"');
    }
    
    // get host info
    public function host_info($id)
    {
        $query = $this->db->query('SELECT * FROM hosts WHERE id="'.$id.'"');
        return $query->result_array();
    }
    
    // get host info from username
    public function get_host_info($username)
    {
        return $this->db->query('SELECT * FROM hosts WHERE username="'.$username.'"')->result_array();
    }
    
    // get student info for when paired with a host
    public function host_stu_info($username)
    {
        $id = $this->db->query('SELECT id FROM hosts WHERE username="'.$username.'"')->result_array();
        //echo 'id = '.$id[0]['id'];
        return $this->db->query('SELECT * FROM students WHERE host_id="'.$id[0]['id'].'" AND active=1')->result_array();
    }
    
    // add an album
    public function add_album($form_data)
    {
        $data = array('name' => $form_data['add_album'],
                      'description' => $form_data['album_description']);
        $this->db->set($data);
        $this->db->insert('albums');    
    }
    
    // get list of albums
    public function get_albums()
    {
        $query = $this->db->query('SELECT * FROM albums');
        return $query->result_array();  
    }
    
    // add photos
    public function add_photo($form_data)
    {
        $data = array('content' => $form_data['file_name'],
                      'album' => $form_data['album'],
                      'description' => $form_data['description']);
        $this->db->set($data);
        $this->db->insert('photos');    
    }
    
    // get list of all photos
    public function get_photos()
    {
        $query = $this->db->query('SELECT * FROM photos');
        return $query->result_array();  
    }
    
    // get photos by album
    public function get_photos_by_album($id)
    {
        $query = $this->db->query('SELECT * FROM photos WHERE album="'.$id.'"');
        return $query->result_array();
    }
    
    // remove a photo
    public function remove_photo($form_data)
    {
        $this->db->query('DELETE FROM photos WHERE content="'.$form_data['remove_photo'].'"');
    }
    
    // add event
    public function add_event($form_data)
    {
        $title = $form_data['title'];
        if($form_data['url'] == NULL)
            $url = NULL;
        else
            $url = $form_data['url'];
        if($form_data['description'] == NULL)
            $description = NULL;
        else
            $description = $form_data['description'];
        if($form_data['location'] == NULL)
            $location = NULL;
        else
            $location = $form_data['location'];
        if($form_data['date'] == NULL)
            $date = NULL;
        else 
            $date = $form_data['date'];
        if($form_data['end_date'] == NULL)
            $end_date = NULL;
        else
            $end_date = $form_data['end_date'];
        $start_time = $form_data['start_time'];
        $end_time = $form_data['end_time'];
        $rsvp = $form_data['rsvp'];
        
        $data = array('title' => $title,
                      'url' => $url,
                      'description' => $description,
                      'location' => $location,
                      'date' => $date,
                      'end_date' => $end_date,
                      'start_time' => $start_time,
                      'end_time' => $end_time,
                      'rsvp' => $rsvp);
        $this->db->set($data);
        $this->db->insert('events');    
    }
    
    // get list of all events
    public function get_events()
    {
        // ORDER BY date ASC
        $query = $this->db->query('SELECT * FROM events ORDER BY STR_TO_DATE(date, "%m/%d/%Y") ASC');
        return $query->result_array();  
    }
    
    // get list of events in DEC order
    public function get_events_dec()
    {
        return $this->db->query('SELECT * FROM events ORDER BY date DESC')->result_array();
    }
    
    // get info for an event
    public function get_event_info($id)
    {
        $query = $this->db->query('SELECT * FROM events WHERE id="'.$id.'"');
        return $query->result_array();  
    }
    
    // edit an event
    public function edit_event($form_data)
    {
        $title = $form_data['title'];
        if($form_data['url'] == NULL)
            $url = NULL;
        else
            $url = $form_data['url'];
        if($form_data['description'] == NULL)
            $description = NULL;
        else
            $description = $form_data['description'];
        if($form_data['location'] == NULL)
            $location = NULL;
        else
            $location = $form_data['location'];
        if($form_data['date'] == NULL)
            $date = NULL;
        else 
            $date = $form_data['date'];
        if($form_data['end_date'] == NULL)
            $end_date = NULL;
        else
            $end_date = $form_data['end_date'];
        $start_time = $form_data['start_time'];
        $end_time = $form_data['end_time'];
        $rsvp = $form_data['rsvp'];
        
        $data = array('title' => $title,
                      'url' => $url,
                      'description' => $description,
                      'location' => $location,
                      'date' => $date,
                      'end_date' => $end_date,
                      'start_time' => $start_time,
                      'end_time' => $end_time,
                      'rsvp' => $rsvp);
        $this->db->set($data);
        $this->db->where('id',$form_data['id']);
        $this->db->update('events');
    }
    
    // remove an event
    public function remove_event($form_data)
    {
        $this->db->query('DELETE FROM events WHERE title="'.$form_data['event_title'].'"');
    }
    
    // add a member
    public function add_member($form_data)
    {
        // check to see if username is valid
        $query = $this->db->query('SELECT * FROM login WHERE UserName="'.$form_data['username'].'"');
        if($query->num_rows() != NULL)
            return $query->result_array();
        else
        {
            // insert into login table
            $data = array('UserName' => $form_data['username'],
                          'password' => $form_data['password'],
                          'FirstName' => $form_data['name'],
                          'email' => $form_data['email'],
                          'admin' => 0);
            $this->db->set($data);
            $this->db->insert('login');
            
            // set and insert new member
            $data = array('username' => $form_data['username'],
                          'name' => $form_data['name'],
                          'state' => $form_data['state'],
                          'address' => $form_data['address'],
                          'zip' => $form_data['zip'],
                          'home_phone' => $form_data['home_phone'],
                          'cell_phone' => $form_data['cell_phone'],
                          'email' => $form_data['email']);
            $this->db->set($data);
            $this->db->insert('members');   
            return TRUE;
        }
    }
    
    // get all members
    public function all_members()
    {
        return $this->db->query('SELECT * FROM members')->result_array();
    }
    
    // get a members's info
    public function get_member_info($username)
    {
        return $this->db->query('SELECT * FROM members WHERE username="'.$username.'"')->result_array();
    }
    
    // remove student
    public function remove_stu($id)
    {
        $uname = $this->db->query('SELECT * FROM students WHERE id="'.$id.'"')->result_array();
        $this->db->query('DELETE FROM students WHERE id="'.$id.'"');
        $this->db->query('DELETE FROM login WHERE UserName="'.$uname[0]['username'].'"');
    }
    
    // update student info
    public function update_stu_profile($form_data,$file_name,$user_id)
    {
        // update info in login table
        if(isset($form_data['password']))
        {
            $data = array('FirstName' => $form_data['first_name'],
                          'LastName' => $form_data['last_name'],
                          'email' => $form_data['email'],
                          'UserName' => $form_data['username'],
                          'password' => $form_data['password']);
            $this->db->set($data);
            $this->db->where('id',$user_id[0]['id']);
            $this->db->update('login');
        }
        else
        {
            $data = array('FirstName' => $form_data['first_name'],
                          'LastName' => $form_data['last_name'],
                          'email' => $form_data['email'],
                          'UserName' => $form_data['username']);
            $this->db->set($data);
            $this->db->where('id',$user_id[0]['id']);
            $this->db->update('login');
        }
        
        $birthday = $form_data['month'].'/'.$form_data['day'].'/'.$form_data['year'];
        
        if(isset($form_data['old_username']))
        {
            $stu_userid = $this->my_stu_userid($form_data['old_username']);
        }
        else
        {
            $stu_userid = $this->my_stu_userid($form_data['username']);
        }
        
        // don't override an old pic if new one is NULL
        if($file_name==NULL)
        {
            // set data
            $data =  array('first_name' => $form_data['first_name'],
                           'last_name' => $form_data['last_name'],
                           'american_name' => $form_data['american_name'],
                           'gender' => $form_data['gender'],
                           'birthday' => $birthday,
                           'phone' => $form_data['phone'],
                           'email' => $form_data['email'],
                           'apartment_complex' => $form_data['apt_name'],
                           'apartment_number' => $form_data['apt_num'],
                           'mailing_address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'zip' => $form_data['zip'],
                           'area_of_study' => $form_data['area_of_study'],
                           'home_country' => $form_data['home_country'],
                           'host_id' => $form_data['host_id'],
                           'allergies' => $form_data['allergies'],
                           'degree_program' => $form_data['degree_program'],
                           'languages' => $form_data['languages'],
                           'travel' => $form_data['travel'],
                           'marital_status' => $form_data['marital_status'],
                           'spouse_here' => $form_data['spouse_here'],
                           'spouse_name' => $form_data['spouse_name'],
                           'kids' => $form_data['kids'],
                           'kids_here' => $form_data['kids_here'],
                           'activities' => $form_data['activities'],
                           'smoke' => $form_data['smoke'],
                           'car' => $form_data['car'],
                           'DNE_foods' => $form_data['DNE_foods'],
                           'username' => $form_data['username']);
        }
        else
        {
            // set data
            $data =  array('first_name' => $form_data['first_name'],
                           'last_name' => $form_data['last_name'],
                           'american_name' => $form_data['american_name'],
                           'gender' => $form_data['gender'],
                           'birthday' => $birthday,
                           'phone' => $form_data['phone'],
                           'email' => $form_data['email'],
                           'apartment_complex' => $form_data['apt_name'],
                           'apartment_number' => $form_data['apt_num'],
                           'mailing_address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'zip' => $form_data['zip'],
                           'area_of_study' => $form_data['area_of_study'],
                           'home_country' => $form_data['home_country'],
                           'host_id' => $form_data['host_id'],
                           'allergies' => $form_data['allergies'],
                           'degree_program' => $form_data['degree_program'],
                           'languages' => $form_data['languages'],
                           'travel' => $form_data['travel'],
                           'marital_status' => $form_data['marital_status'],
                           'spouse_here' => $form_data['spouse_here'],
                           'spouse_name' => $form_data['spouse_name'],
                           'kids' => $form_data['kids'],
                           'kids_here' => $form_data['kids_here'],
                           'activities' => $form_data['activities'],
                           'smoke' => $form_data['smoke'],
                           'car' => $form_data['car'],
                           'DNE_foods' => $form_data['DNE_foods'],
                           'pic' => $file_name,
                           'username' => $form_data['username']);
        }
        $this->db->set($data);
        $this->db->where('id',$stu_userid[0]['id']);
        $this->db->update('students');
    }
    
    // remove host
    public function remove_host($id)
    {
        $uname = $this->db->query('SELECT * FROM hosts WHERE id="'.$id.'"')->result_array();
        $this->db->query('DELETE FROM hosts WHERE id="'.$id.'"');
        $this->db->query('DELETE FROM login WHERE UserName="'.$uname[0]['username'].'"');
    }
    
    // update host info
    public function update_host_profile($form_data,$file_name,$userid)
    {
        // update info in login table
        if(isset($form_data['password']))
        {
            $data = array('FirstName' => $form_data['name'],
                          'email' => $form_data['email'],
                          'UserName' => $form_data['username'],
                          'password' => $form_data['password']);
            $this->db->set($data);
            $this->db->where('id',$userid[0]['id']);
            $this->db->update('login');
        }
        else
        {
            $data = array('FirstName' => $form_data['name'],
                          'email' => $form_data['email'],
                          'UserName' => $form_data['username']);
            $this->db->set($data);
            $this->db->where('id',$userid[0]['id']);
            $this->db->update('login');
        }
        
        if(isset($form_data['old_username']))
        {
            $host_userid = $this->my_host_userid($form_data['old_username']);
        }
        else
        {
            $host_userid = $this->my_host_userid($form_data['username']);
        }
        
        // drop students if they choose not to host again
        if($form_data['host_option'] == 0)
        {
            $result = $this->db->query("SELECT username FROM students WHERE host_id = '".$host_userid[0]['id']."'")->result_array();
            foreach ($result as $r) {
                $this->db->query("UPDATE students SET host_id = 0 WHERE username = '".$r['username']."'");
            }
        }
        
        // don't override an old pic if new one is NULL
        if($file_name==NULL)
        {
            // set data
            $data =  array('username' => $form_data['username'],
                           'name' => $form_data['name'],
                           'address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'state' => $form_data['state'],
                           'zip' => $form_data['zip'],
                           'country' => $form_data['country'],
                           'mobile_phone' => $form_data['mobile_phone'],
                           'home_phone' => $form_data['home_phone'],
                           'work_phone' => $form_data['work_phone'],
                           'email' => $form_data['email'],
                           'sm_child' => $form_data['sm_child'],
                           'tn_child' => $form_data['tn_child'],
                           'cl_child' => $form_data['cl_child'],
                           'gr_child' => $form_data['gr_child'],
                           'no_child' => $form_data['no_child'],
                           'pet' => $form_data['pet'],
                           'pet_type' => $form_data['pet_type'],
                           'hobbies' => $form_data['hobbies'],
                           'travel' => $form_data['travel'],
                           'languages' => $form_data['languages'],
                           'type_stu' => $form_data['type_stu'],
                           'students' => $form_data['students'],
                           'host_option' => $form_data['host_option'],
                           'ILEP' => $form_data['ILEP'],
                           'financial' => $form_data['financial'],
                           'contribution' => $form_data['contribution'],
                           'contribution_shirt1_size' => $form_data['contribution_shirt1_size'],
                           'contribution_shirt2_size' => $form_data['contribution_shirt2_size'],
                           'ladies' => $form_data['ladies'],
                           'event_help' => $form_data['event_help'],
                           'festival' => $form_data['festival'],
                           'bake_dessert' => $form_data['bake_dessert'],
                           'man_booth' => $form_data['man_booth'],
                           'english_class' => $form_data['english_class'],
                           'fall_english_class' => $form_data['fall_english_class'],
                           'spring_english_class' => $form_data['spring_english_class'],
                           'summer_english_class' => $form_data['summer_english_class'],
                           'apartment_events' => $form_data['apartment_events'],
                           'shopping_trips' => $form_data['shopping_trips'],
                           'group_outing' => $form_data['group_outing'],
                           'provide_meal' => $form_data['provide_meal'],
                           'recruitment' => $form_data['recruitment'],
                           'purchase_shirt1_size' => $form_data['purchase_shirt1_size'],
                           'purchase_shirt2_size' => $form_data['purchase_shirt2_size']);
        }
        else
        {
            // set data
            $data =  array('username' => $form_data['username'],
                           'name' => $form_data['name'],
                           'address' => $form_data['address'],
                           'city' => $form_data['city'],
                           'state' => $form_data['state'],
                           'zip' => $form_data['zip'],
                           'country' => $form_data['country'],
                           'mobile_phone' => $form_data['mobile_phone'],
                           'home_phone' => $form_data['home_phone'],
                           'work_phone' => $form_data['work_phone'],
                           'email' => $form_data['email'],
                           'sm_child' => $form_data['sm_child'],
                           'tn_child' => $form_data['tn_child'],
                           'cl_child' => $form_data['cl_child'],
                           'gr_child' => $form_data['gr_child'],
                           'no_child' => $form_data['no_child'],
                           'pet' => $form_data['pet'],
                           'pet_type' => $form_data['pet_type'],
                           'hobbies' => $form_data['hobbies'],
                           'travel' => $form_data['travel'],
                           'languages' => $form_data['languages'],
                           'type_stu' => $form_data['type_stu'],
                           'students' => $form_data['students'],
                           'pic' => $file_name,
                           'host_option' => $form_data['host_option'],
                           'ILEP' => $form_data['ILEP'],
                           'financial' => $form_data['financial'],
                           'contribution' => $form_data['contribution'],
                           'contribution_shirt1_size' => $form_data['contribution_shirt1_size'],
                           'contribution_shirt2_size' => $form_data['contribution_shirt2_size'],
                           'ladies' => $form_data['ladies'],
                           'event_help' => $form_data['event_help'],
                           'festival' => $form_data['festival'],
                           'bake_dessert' => $form_data['bake_dessert'],
                           'man_booth' => $form_data['man_booth'],
                           'english_class' => $form_data['english_class'],
                           'fall_english_class' => $form_data['fall_english_class'],
                           'spring_english_class' => $form_data['spring_english_class'],
                           'summer_english_class' => $form_data['summer_english_class'],
                           'apartment_events' => $form_data['apartment_events'],
                           'shopping_trips' => $form_data['shopping_trips'],
                           'group_outing' => $form_data['group_outing'],
                           'provide_meal' => $form_data['provide_meal'],
                           'recruitment' => $form_data['recruitment'],
                           'purchase_shirt1_size' => $form_data['purchase_shirt1_size'],
                           'purchase_shirt2_size' => $form_data['purchase_shirt2_size']);
        }
        $this->db->set($data);
        $this->db->where('id',$host_userid[0]['id']);
        $this->db->update('hosts');
    }
    
    // update user's password
    public function change_password($form_data)
    {
        $this->db->query('UPDATE login SET password="'.$form_data['new_pass'].'" WHERE UserName="'.$form_data['username'].'"');
    }
    
    // update member info
    public function update_mem_profile($form_data)
    {
        // update info in login table
        $data = array('FirstName' => $form_data['name'],
                      'email' => $form_data['email']);
        $this->db->set($data);
        $this->db->where('UserName',$form_data['username']);
        $this->db->update('login');
        
        // set data
        $data = array('name' => $form_data['name'],
                      'state' => $form_data['state'],
                      'address' => $form_data['address'],
                      'zip' => $form_data['zip'],
                      'home_phone' => $form_data['home_phone'],
                      'cell_phone' => $form_data['cell_phone'],
                      'email' => $form_data['email']);
        $this->db->set($data);
        $this->db->where('username',$form_data['username']);
        $this->db->update('members');
    }
    
    // get user's info
    public function get_user_info($username)
    {
        return $this->db->query('SELECT * FROM login WHERE UserName="'.$username.'"')->result_array();
    }
    
    // rsvp to an event
    public function rsvp($form_data,$event_id)
    {
        // set data
        $data = array('coming' => $form_data['coming'],
                      'username' => $form_data['username'],
                      'name' => $form_data['name'],
                      'email' => $form_data['email'],
                      'event_id' => $event_id);
        $this->db->set($data);
        $this->db->insert('rsvp');
    }
    
    // see if the user has made an rsvp for an event
    public function get_rsvp($username,$event_id)
    {
        return $this->db->query('SELECT * FROM rsvp WHERE username="'.$username.'" AND event_id="'.$event_id.'"')->result_array();
    }
    
    public function get_list_rsvp($id)
    {
        return $this->db->query('SELECT * FROM rsvp WHERE event_id="'.$id.'"')->result_array();
    }
    
    // get all rsvps
    public function all_rsvps()
    {
        return $this->db->query('SELECT * FROM rsvp')->result_array();
    }
    
    // host choice of students
    public function host_choice($form_data,$host_id)
    {
        $num = $form_data['num'];
        for($i=0;$i<$num;$i++)
        {
            $this->db->query('UPDATE students SET host_id="'.$host_id.'" WHERE id="'.$form_data['host-stu'][$i].'"');
        }
    }
    
    // updating the host choice of students
    public function host_choice_update($form_data,$host_id)
    {
        $num = $form_data['num'];
        // delete old pairing
        $this->db->query('UPDATE students SET host_id=0 WHERE host_id="'.$host_id.'"');
        // insert new pairing
        for($i=0;$i<$num;$i++)
        {
            $this->db->query('UPDATE students SET host_id="'.$host_id.'" WHERE id="'.$form_data['host-stu'][$i].'"');
        }
    }
    
    // student choice of host
    public function stu_choice($form_data,$stu_id)
    {
        $this->db->query('UPDATE students SET host_id="'.$form_data['stu-host'].'" WHERE id="'.$stu_id.'"');
    }
    
    // save auto pairing results
    public function save_auto_pair($form_data)
    {
        $host_ids = array();
        foreach($form_data['approve'] as $app => $id){
            array_push($host_ids,$app);
        }
        $i=0;
        foreach($form_data['approve'] as $app){
            foreach($app as $a){
                $this->db->query('UPDATE students SET host_id="'.$host_ids[$i].'" WHERE id="'.$a.'"');
            }
            $i++;   
        }
        
    }
    
    // new club info
    public function club($form_data)
    {
        $data = array('title' => $form_data['title'],
                      'info' => $form_data['description'],
                      'when' => $form_data['when'],
                      'where' => $form_data['where'],
                      'time' => $form_data['time'],
                      'food' => $form_data['food'],
                      'childcare' => $form_data['childcare'],
                      'comments' => $form_data['comments'],
                      'contact_name' => $form_data['contact_name'],
                      'contact_phone' => $form_data['contact_phone'],
                      'contact_email' => $form_data['contact_email']);
        $this->db->set($data);
        $this->db->insert('club');
    }
    
    // get all info for all international clubs
    public function get_clubs()
    {
        return $this->db->query('SELECT * FROM club')->result_array();
    }
    
    // get info about one club
    public function club_info($id)
    {
        return $this->db->query('SELECT * FROM club WHERE id="'.$id.'"')->result_array();
    }
    
    // edit club
    public function edit_club($form_data,$id)
    {
        $data = array('title'         => $form_data['title'],
                      'info'          => $form_data['description'],
                      'when'          => $form_data['when'],
                      'where'         => $form_data['where'],
                      'time'          => $form_data['time'],
                      'food'          => $form_data['food'],
                      'childcare'     => $form_data['childcare'],
                      'comments'      => $form_data['comments'],
                      'contact_name'  => $form_data['contact_name'],
                      'contact_phone' => $form_data['contact_phone'],
                      'contact_email' => $form_data['contact_email']);
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('club');  
    }
    
    // delete club
    public function delete_club($id)
    {
        $this->db->query('DELETE FROM club WHERE id="'.$id.'"');    
    }
    
    
    // new english class info
    public function eng_class($form_data)
    {
        $data = array('title' => $form_data['title'],
                      'info' => $form_data['description'],
                      'when' => $form_data['when'],
                      'where' => $form_data['where'],
                      'time' => $form_data['time'],
                      'food' => $form_data['food'],
                      'childcare' => $form_data['childcare'],
                      'comments' => $form_data['comments'],
                      'contact_name' => $form_data['contact_name'],
                      'contact_phone' => $form_data['contact_phone'],
                      'contact_email' => $form_data['contact_email']);
        $this->db->set($data);
        $this->db->insert('eng_class');
    }
    
    // get all info for all english classes
    public function get_eng_classes()
    {
        return $this->db->query('SELECT * FROM eng_class')->result_array();
    }
    
    // get info about one english class
    public function eng_class_info($id)
    {
        return $this->db->query('SELECT * FROM eng_class WHERE id="'.$id.'"')->result_array();
    }
    
    // edit english class
    public function edit_eng_class($form_data,$id)
    {
        $data = array('title' => $form_data['title'],
                      'info' => $form_data['description'],
                      'when' => $form_data['when'],
                      'where' => $form_data['where'],
                      'time' => $form_data['time'],
                      'food' => $form_data['food'],
                      'childcare' => $form_data['childcare'],
                      'comments' => $form_data['comments'],
                      'contact_name' => $form_data['contact_name'],
                      'contact_phone' => $form_data['contact_phone'],
                      'contact_email' => $form_data['contact_email']);
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('eng_class'); 
    }
    
    // delete english class
    public function delete_eng_class($id)
    {
        $this->db->query('DELETE FROM eng_class WHERE id="'.$id.'"');   
    }
    
    // add a recipe
    public function add_recipe($form_data)
    {
        $data = array('title' => $form_data['title'],
                      'description' => $form_data['description'],
                      'url' => $form_data['url'],
                      'ingredients' => $form_data['ingredients'],
                      'instructions' => $form_data['instructions']);
        $this->db->set($data);
        $this->db->insert('recipes');
    }
    
    // edit a recipe
    public function edit_recipe($form_data,$id)
    {
        $data = array('title' => $form_data['title'],
                      'description' => $form_data['description'],
                      'url' => $form_data['url'],
                      'ingredients' => $form_data['ingredients'],
                      'instructions' => $form_data['instructions']);
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('recipes');
    }
    
    // get list of recipes
    public function get_recipes()
    {
        return $this->db->query('SELECT * FROM recipes')->result_array();
    }
    
    // get info about a recipe
    public function get_recipe_info($id)
    {
        return $this->db->query('SELECT * FROM recipes WHERE id="'.$id.'"')->result_array();
    }
    
    // send out an email
    public function send_email($form_data)
    {
        // get list of people to send to
        if($form_data['to'] == 'all')
        {
            // query both tables
            $send_to_stu = $this->db->query('SELECT email FROM students WHERE active = 1')->result_array();
            $send_to_member = $this->db->query('SELECT email FROM hosts WHERE active = 1')->result_array();
            // merge arrays into mulitdimentional array
            $send_to = array_merge($send_to_member, $send_to_stu);
            // recursion to flatten the array
            $return = array();
            //array_walk_recursive($send_to_member, function($a) use (&$return) { $return[] = $a; });
            $i=0;
            foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($send_to)) as $k=>$v){
                $return[$i] = $v;
                $i++;
            }
            /*for($i=0; $i<250; $i++){
                $return[$i] = 'mellis864@gmail.com';
            }*/
            //$to = $return;
            $to = array();
            $to = array_chunk($return, 10, true);
            // implode commas inbetween the email addresses
            $i = 0;
            foreach($to as $t){
                $to[$i] = implode(", ",$t);
                $i++;
            }
            //print_r($to);
            //echo $to;
        }
        elseif($form_data['to'] == 'host')
        {
            // query table
            $send_to_member = $this->db->query('SELECT email FROM hosts WHERE host_option="1" AND active = 1')->result_array();
            // recursion to flatten the array
            $return = array();
            //array_walk_recursive($send_to_member, function($a) use (&$return) { $return[] = $a; });
            $i=0;
            foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($send_to_member)) as $k=>$v){
                $return[$i] = $v;
                $i++;
            }
            // implode commas inbetween the email addresses
            //$to = $return;
            $to = array();
            $to = array_chunk($return, 10, true);
            // implode commas inbetween the email addresses
            $i = 0;
            foreach($to as $t){
                $to[$i] = implode(", ",$t);
                $i++;
            }
            //echo $to;
        }
        elseif($form_data['to'] == 'stu')
        {
            // query table
            $send_to_stu = $this->db->query('SELECT email FROM students WHERE active = 1')->result_array();;
            // recursion to flatten the array
            $return = array();
            //array_walk_recursive($send_to_member, function($a) use (&$return) { $return[] = $a; });
            $i=0;
            foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($send_to_stu)) as $k=>$v){
                $return[$i] = $v;
                $i++;
            }
            // implode commas inbetween the email addresses
            //$to = $return;
            $to = array();
            $to = array_chunk($return, 10, true);
            // implode commas inbetween the email addresses
            $i = 0;
            foreach($to as $t){
                $to[$i] = implode(", ",$t);
                $i++;
            }
            //echo $to;
        }
        elseif($form_data['to'] == 'members')
        {
            // query table
            $send_to_member = $this->db->query('SELECT email FROM hosts')->result_array();
            // recursion to flatten the array
            $return = array();
            //array_walk_recursive($send_to_member, function($a) use (&$return) { $return[] = $a; });
            $i=0;
            foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($send_to_member)) as $k=>$v){
                $return[$i] = $v;
                $i++;
            }
            // implode commas inbetween the email addresses
            //$to = $return;
            $to = array();
            $to = array_chunk($return, 10, true);
            // implode commas inbetween the email addresses
            $i = 0;
            foreach($to as $t){
                $to[$i] = implode(", ",$t);
                $i++;
            }
            //echo $to;
        }
        elseif($form_data['to'] == 'host_with_stu')
        {
            $send_to_member = array();
            // query table
            $host_list = $this->db->query('SELECT host_id FROM students WHERE host_id != 0 AND active = 1')->result_array();
            foreach($host_list as $list){
                $email = $this->db->query('SELECT email FROM hosts WHERE id = "'.$list['host_id'].'"')->result_array();
                array_push($send_to_member,$email[0]['email']);
            }
            // recursion to flatten the array
            $return = array();
            //array_walk_recursive($send_to_member, function($a) use (&$return) { $return[] = $a; });
            $i=0;
            foreach(new RecursiveIteratorIterator(new RecursiveArrayIterator($send_to_member)) as $k=>$v){
                $return[$i] = $v;
                $i++;
            }
            // implode commas inbetween the email addresses
            //$to = $return;
            $to = array();
            $to = array_chunk($return, 10, true);
            // implode commas inbetween the email addresses
            $i = 0;
            foreach($to as $t){
                $to[$i] = implode(", ",$t);
                $i++;
            }
            //echo $to;
        }
        
        // send email
        $subject = $form_data['subject'];
        $message = $form_data['message'];
        $headers = 'From: Clemson Area International Friendship' . "\r\n" . 'Reply-To: sccaif@gmail.com';
        
        $i = 0;
        
        // send mail
        foreach($to as $t){
            mail($t,$subject,$message,$headers);
        }
        
        //$t = "mlellis@clemson.edu";
        //mail($t,$subject,$message,$headers);
        
        /*foreach($to as $send_to){
            //echo $send_to.'<br />';
            mail($send_to, $subject, $message, $headers);
        }*/
        
        // store sent email
        $store_to = implode(", ", $to);
        $data = array('to' => $store_to,
                      'to_general' => $form_data['to'],
                      'subject' => $subject,
                      'message' => $message,
                      'rsvp' => 0);
        $this->db->set($data);
        $this->db->insert('email');
    }
    
    // send email to RSVP list
    public function send_email_rsvp($form_data)
    {
        // store sent email
        $data = array('to' => $form_data['to'],
                      'to_general' => null,
                      'subject' => $form_data['subject'],
                      'message' => $form_data['message'],
                      'rsvp' => 1);
        $this->db->set($data);
        $this->db->insert('email');
                
        // send email
        $to = $form_data['to'];
        $subject = $form_data['subject'];
        $message = $form_data['message'];
        $headers = 'From: Clemson Area International Friendship' . "\r\n" . 'Reply-To: sccaif@gmail.com';
        mail($to,$subject,$message,$headers);
    }
    
    // get all sent emails
    public function get_emails()
    {
        return $this->db->query('SELECT * FROM email ORDER BY date DESC')->result_array();
    }

}