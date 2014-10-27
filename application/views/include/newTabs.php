<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CAIF</title>

<link href="<?php echo base_url('assets/bootstrap_new/css/bootstrap3.css') ?>" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap_new/js/carousel.js') ?>"></script>

<style type="text/css">
    .navbar-inverse { background-color: #F66733}
    .navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #C25128}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #C25128}
    .dropdown-menu { background-color: #FFFFFF}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-color: #522D80}
    .navbar-inverse { background-image: none; }
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-image: none; }
    .navbar-inverse { border-color: #F66733}
    .navbar-inverse .navbar-brand { color: #FFFFFF}
    .navbar-inverse .navbar-brand:hover { color: #FFFFFF}
    .navbar-inverse .navbar-nav>li>a { color: #FFFFFF}
    .navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
    .dropdown-menu>li>a { color: #333333}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}

    /*.navbar-inverse { background-color: #522D80}
    .navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #361E54}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #361E54}
    .dropdown-menu { background-color: #FFFFFF}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-color: #F66733}
    .navbar-inverse { background-image: none; }
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-image: none; }
    .navbar-inverse { border-color: #522D80}
    .navbar-inverse .navbar-brand { color: #FFFFFF}
    .navbar-inverse .navbar-brand:hover { color: #FFFFFF}
    .navbar-inverse .navbar-nav>li>a { color: #FFFFFF}
    .navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
    .dropdown-menu>li>a { color: #333333}
    .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #FFFFFF}
    .navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}
*/

    .sidebar-nav {
        padding: 9px 0;
    }

    .dropdown-menu .sub-menu {
        left: 100%;
        position: absolute;
        top: 0;
        visibility: hidden;
        margin-top: -1px;
    }

    .dropdown-menu li:hover .sub-menu {
        visibility: visible;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu {
        margin-top: 0;
    }

    .navbar .sub-menu:before {
        border-bottom: 7px solid transparent;
        border-left: none;
        border-right: 7px solid rgba(0, 0, 0, 0.2);
        border-top: 7px solid transparent;
        left: -7px;
        top: 10px;
    }
    .navbar .sub-menu:after {
        border-top: 6px solid transparent;
        border-left: none;
        border-right: 6px solid #fff;
        border-bottom: 6px solid transparent;
        left: 10px;
        top: 11px;
        left: -6px;
    }

    /* purple button */
    .btn-purple { 
      color: #ffffff; 
      background-color: #522D80; 
      border-color: #522D80; 
    } 
     
    .btn-purple:hover, 
    .btn-purple:focus, 
    .btn-purple:active, 
    .btn-purple.active, 
    .open .dropdown-toggle.btn-purple { 
      color: #ffffff; 
      background-color: #3B205C; 
      border-color: #522D80; 
    } 
     
    .btn-purple:active, 
    .btn-purple.active, 
    .open .dropdown-toggle.btn-purple { 
      background-image: none; 
    } 
     
    .btn-purple.disabled, 
    .btn-purple[disabled], 
    fieldset[disabled] .btn-purple, 
    .btn-purple.disabled:hover, 
    .btn-purple[disabled]:hover, 
    fieldset[disabled] .btn-purple:hover, 
    .btn-purple.disabled:focus, 
    .btn-purple[disabled]:focus, 
    fieldset[disabled] .btn-purple:focus, 
    .btn-purple.disabled:active, 
    .btn-purple[disabled]:active, 
    fieldset[disabled] .btn-purple:active, 
    .btn-purple.disabled.active, 
    .btn-purple[disabled].active, 
    fieldset[disabled] .btn-purple.active { 
      background-color: #522D80; 
      border-color: #522D80; 
    } 
     
    .btn-purple .badge { 
      color: #522D80; 
      background-color: #ffffff; 
    }

    /* orange button */
    .btn-orange { 
      color: #ffffff; 
      background-color: #F66733; 
      border-color: #F66733; 
    } 
    
    .btn-orange:hover, 
    .btn-orange:focus, 
    .btn-orange:active, 
    .btn-orange.active, 
    .open .dropdown-toggle.btn-orange { 
      color: #ffffff; 
      background-color: #C7572E; 
      border-color: #F66733; 
    } 
     
    .btn-orange:active, 
    .btn-orange.active, 
    .open .dropdown-toggle.btn-orange { 
      background-image: none; 
    } 
     
    .btn-orange.disabled, 
    .btn-orange[disabled], 
    fieldset[disabled] .btn-orange, 
    .btn-orange.disabled:hover, 
    .btn-orange[disabled]:hover, 
    fieldset[disabled] .btn-orange:hover, 
    .btn-orange.disabled:focus, 
    .btn-orange[disabled]:focus, 
    fieldset[disabled] .btn-orange:focus, 
    .btn-orange.disabled:active, 
    .btn-orange[disabled]:active, 
    fieldset[disabled] .btn-orange:active, 
    .btn-orange.disabled.active, 
    .btn-orange[disabled].active, 
    fieldset[disabled] .btn-orange.active { 
      background-color: #F66733; 
      border-color: #F66733; 
    } 
     
    .btn-orange .badge { 
      color: #F66733; 
      background-color: #ffffff; 
    }

</style>

<script type="text/javascript">
    $('.carousel').carousel();
</script>

</head>

<body>

    <?php $page_url = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>
    
<nav class="navbar navbar-inverse" role="navigation" style="font-size: 18px;">
    <div class="container-fluid container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
      
                <li class="dropdown <?php echo $welcome_active ?>">
                    <a href="<?php echo base_url() ?>" class="dropdown-toggle" data-toggle="dropdown">Who We Are <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url().'host/testimonials'; ?>">Testimonials</a></li>
                        <li><a href="<?php echo base_url().'host/officers'; ?>">Officers</a></li>
                        <li><a href="<?php echo base_url().'host/contact_us'; ?>">Contact Us</a></li>
                    </ul>
                </li>
      
                <li class="dropdown <?php echo $host_active ?>">
                    <a href="<?php echo base_url().'host' ?>" class="dropdown-toggle" data-toggle="dropdown">
                        Host Friend Program <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" id="menu1">
                        <li><a href="<?php echo base_url().'host/host_guide'; ?>">Guidelines For Community Members</a></li>
                        <li><a href="<?php echo base_url().'host/stu_guide'; ?>">Guidelines For Students</a></li>
                        <li><a href="<?php echo base_url().'host/host_form' ?>">Form For Community Members</a></li>
                        <li><a href="<?php echo base_url().'host/stu_form' ?>">Form For Students</a></li>
                    </ul>
                </li>
                  
                <li class="dropdown <?php echo $event_active ?>">
                    <a href="<?php echo base_url().'events' ?>" class="dropdown-toggle" data-toggle="dropdown">
                        Events And Services <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></li>
                        <li><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></li>
                        <li><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li style="margin-right: 10px;">
                    <button class="btn btn-default navbar-btn">Register with CAIF</button>
                </li>
                <li><button class="btn btn-orange navbar-btn">Login</button></li>
            </ul>
        </div>
    </div>
</nav>
