<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clemson Area International Friendship</title>
<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" />


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

<script type="text/javascript">
	$('.carousel').carousel()
	
</script>
</head>

<body>
<?php
            
        /*
        *	The sesson 'myusername' is 1 when the user logs in.
        *	When loged-in, the user can then see thier name and
        *	log out.
        */
        
    
        error_reporting(0);
        
        if($username != NULL)
        {
            echo "<div style='margin-top:20px;'><a class='btn' style='float:right; margin-right: 18%' href='".base_url()."index.php/welcome/logout'><i class='icon-off'></i>&nbsp;Logout</a></div>";
			include 'js.php';
        }
        else
        {	
            include 'login.php';
        }
    
    ?>
	<img name="caif_header" src="http://caif.net78.net/photos/test_header.jpg" width="2000" height="200" id="caif_header" />
</body>
</html>