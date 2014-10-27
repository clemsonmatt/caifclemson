<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>

<div style="background-color:#CFCFDF;"><!--#330033--><!-- #CFCFDF -->
            
<div class="navbar">
    <div class="navbar-inner">
        <div id="content">
            <ul class="nav" style="font-size: 18px;">
                <li class="<?php echo $welcome_active ?>"><a onclick="alertMsg('<?php echo base_url() ?>')" href="#">Who We Are</a></li>       
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a onclick="alertMsg('<?php echo base_url().'host/testimonials' ?>')" href="#">Testimonials</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'host/officers'; ?>')" href="#">Officers</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'host/contact_us'; ?>')" href="#">Contact Us</a></li>
                    </ul>
                </li>
                
                <li class="divider-vertical"></li>
                <li class="<?php echo $host_active ?>"><a onclick="alertMsg('<?php echo base_url().'host' ?>')" href="#">Host Friend Program</a></li>					
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                        <li><a onclick="alertMsg('<?php echo base_url().'host/host_guide'; ?>')" href="#">Guidelines For Community Members</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'host/stu_guide'; ?>')" href="#">Guidelines For Students</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'host/host_form' ?>')" href="#">Form For Community Members</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'host/stu_form' ?>')" href="#">Form For Students</a></li>
                    </ul>
                </li>
                
                <li class="divider-vertical"></li>                    
                <li class="<?php echo $event_active ?>"><a onclick="alertMsg('<?php echo base_url().'events' ?>')" href="#">Events And Services</a></li> 
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a onclick="alertMsg('<?php echo base_url().'events/newsletters'; ?>')" href="#">Newsletters</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'events/eng_class'; ?>')" href="#">Conversational Eng. Class</a></li>
                        <li><a onclick="alertMsg('<?php echo base_url().'events/photos'; ?>')" href="#">Photo Gallery</a></li>
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

<div class="container">
	<div class="row-fluid">
    	<div class="well span12">
        	<h3>Update</h3>
            Please check yes if you intend to stay a host to international students.
            If you would like to no longer be a host family but still partake in CAIF membership, please check no. 
            <br /><br />
            Please contact <a href="<?php echo base_url().'host/officers'; ?>">Kathy Mabry</a> if you 
            would no longer like to participate in any CAIF membership opportunities.
            <br /><br />
            <form action="<?php echo base_url().'profile/hostActive'; ?>" method="post">
            	<input type="hidden" name="username" value="<?php echo $profile[0]['username']; ?>" />
            	<button class="btn btn-danger" type="submit" name="submit" value="no">No</button> 
                <button class="btn btn-success" type="submit" name="submit" value="yes">Yes</button>
            </form>
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>