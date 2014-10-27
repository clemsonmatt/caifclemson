<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clemson Area International Friendship</title>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" />


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

</head>

<style>
.custom_header {
	/* IE10 Consumer Preview */ 
	background-image: -ms-linear-gradient(top, #FFFFFF 0%, #DDDDDD 100%);
	
	/* Mozilla Firefox */ 
	background-image: -moz-linear-gradient(top, #FFFFFF 0%, #DDDDDD 100%);
	
	/* Opera */ 
	background-image: -o-linear-gradient(top, #FFFFFF 0%, #DDDDDD 100%);
	
	/* Webkit (Safari/Chrome 10) */ 
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #DDDDDD));
	
	/* Webkit (Chrome 11+) */ 
	background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #DDDDDD 100%);
	
	/* W3C Markup, IE10 Release Preview */ 
	background-image: linear-gradient(to bottom, #FFFFFF 0%, #DDDDDD 100%);
}
</style>

<body style="background-color:#311643;"><!-- #7E3E97 #311643 #69337D -->

	<div class="container ">
    
    <div style="float:left;">	
        <!--img src="<?php echo base_url().'photos/Clemson-Intl-CAIF-Logo---resize2.gif'; ?>" /-->
        <img src="<?php echo base_url().'photos/Clemson Intl.fw.png'; ?>" style="max-width:175px; margin-top:10px; margin-left:10px;" />	
    </div>

    
	<?php
            
        /*
        *	The sesson 'myusername' is 1 when the user logs in.
        *	When loged-in, the user can then see thier name and
        *	log out.
        */	
		
		?>
        
        <div style="float:right; margin-left:10px; margin-top: 20px;"><a target="_blank" href="https://www.facebook.com/caif.clemson?fref=ts"><img style="max-height:16px;" src="<?php echo base_url().'photos/1367554812_43141.ico'; ?>" /></a></div>
		
		<?php
    
        error_reporting(0);
        
        if($username != NULL)
        {
			if($admin == 1)
			{
            	echo "<div style='margin-top:20px;'><a class='btn' style='float:right;' href='".base_url()."host/logout'><i class='icon-off'></i>&nbsp;Logout</a></div>";
			}
			else
			{
				echo "<div style='margin-top:20px;'><a class='btn' style='float:right;' href='".base_url()."host/logout'><i class='icon-off'></i>&nbsp;Logout</a></div>";
			}
			include 'js.php';
        }
        else
        {	
            include 'login.php';
        }
    
    ?>	
    
    <div style="float:right; margin-right:10px; margin-top: 0px;"><a class="btn btn-warning" data-toggle="modal" href="#regModal">Click here to register with CAIF!</a></div>
    
    <div class="modal hide fade" id="regModal" aria-hidden="true">
        <div class="modal-header">
            <h3>CAIF Registration Forms</h3>
        </div>
        <div class="modal-body">
            <legend><h4>Register with CAIF today!</h4></legend>
            <a class="btn btn-large span6" href="<?php echo base_url().'host/host_form'; ?>" style="color:#808;">Click here for Member Form</a>
        </div>
        <div class="modal-body">
            <a class="btn btn-large span6" href="<?php echo base_url().'host/stu_form'; ?>" style="color:#808;">Click here for Student Form</a>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>

    <!--img src="header_new.fw.png" /-->
        
    <div style="float:right; padding-right:12%; padding-top:3%;">
        <h1><a href="<?php echo base_url(); ?>" style="color:#F60;">Clemson Area International Friendship</a></h1>
        <h3><p style="color:#FFF;">"Meeting The World At Your Back Door"</p></h3>
    </div>
    
    </div>

</body>
</html>