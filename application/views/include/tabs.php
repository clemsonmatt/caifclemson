<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

	<?php
			$page_url = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			//echo $page_url;
	?>
    
    <!--div id="body_bg"-->
    <div style="background-color:#CFCFDF;"><!--#330033--><!-- #CFCFDF -->
    <!--div style="margin-left:18%; margin-right:19%;"-->
    
    
    <div class="navbar">
        <div class="navbar-inner">
            <div id="content">
                <ul class="nav" style="font-size: 18px;">
  					<li class="<?php echo $welcome_active ?>"><a href="<?php echo base_url() ?>">Who We Are</a></li>       
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'host/testimonials'; ?>">Testimonials</a></li>
                            <li><a href="<?php echo base_url().'host/officers'; ?>">Officers</a></li>
                            <li><a href="<?php echo base_url().'host/contact_us'; ?>">Contact Us</a></li>
                        </ul>
                    </li>
                    
                    <li class="divider-vertical"></li>
                    <li class="<?php echo $host_active ?>"><a href="<?php echo base_url().'host' ?>">Host Friend Program</a></li>					
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                        <ul class="dropdown-menu" id="menu1">
                            <li><a href="<?php echo base_url().'host/host_guide'; ?>">Guidelines For Community Members</a></li>
                            <li><a href="<?php echo base_url().'host/stu_guide'; ?>">Guidelines For Students</a></li>
                            <li><a href="<?php echo base_url().'host/host_form' ?>">Form For Community Members</a></li>
                            <li><a href="<?php echo base_url().'host/stu_form' ?>">Form For Students</a></li>
                        </ul>
                    </li>
                    
                    <li class="divider-vertical"></li>                    
                    <li class="<?php echo $event_active ?>"><a href="<?php echo base_url().'events' ?>">Events And Services</a></li> 
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></li>
                            <li><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></li>
                            <li><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></li>
                        </ul>
                    </li>
                    
                    <?php if($admin == 1)
						  { 
							echo '
							<li class="divider-vertical"></li>
							<li class="'.$manage_active.'"><a href="'.base_url().'manage">Manage</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="'.base_url().'manage/photos">Manage Photos</a></li>
									<li><a href="'.base_url().'manage/events">Manage Events</a></li>
									<li><a href="'.base_url().'manage/newsletters">Manage Newsletters</a></li>
									<li><a href="'.base_url().'manage/rsvp">Manage RSVP Event</a></li>
								</ul>
							</li>';
						  }
						  else if($username!=NULL)
						  {
							echo '
							<li class="divider-vertical"></li>
							<li class="'.$profile_active.'"><a href="'.base_url().'profile">My Profile</a></li>';
						  }
					?>
                </ul>
            </div>
        </div>
    </div>
    
    <!--/div-->

</body>
</html>