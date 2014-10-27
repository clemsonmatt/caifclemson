<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="<?php echo base_url('assets/bootstrap/css/bootstrap-timepicker.min.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/bootstrap/css/datepicker.css') ?>" rel="stylesheet" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap-datepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap-timepicker.min.js') ?>"></script>

</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<h3>Edit Event Details</h3>
            <hr />
            <form action="<?php echo base_url().'events/change_event'; ?>" method="post">
            	<table class="table">
            	<thead>
                	<th></th>
                    <th></th>
                </thead>
                <tbody>
                	<tr>
                    	<td>Title</td>
                        <td><input class="span10" name="title" value="<?php echo $event_info[0]['title'] ?>" /></td>
                    </tr>
                    <tr>
                    	<td>URL</td>
                        <td><input class="span10" name="url" value="<?php echo $event_info[0]['url'] ?>" /></td>
                    </tr>
               		<tr>
                    	<td>Description</td>
                        <td><textarea class="span10" rows="3" name="description"><?php echo $event_info[0]['description'] ?></textarea></td>
                    </tr>
                    <tr>
                    	<td>Location</td>
                        <td><input class="span10" name="location" value="<?php echo $event_info[0]['location'] ?>" /></td>
                    </tr>
                    <tr>
                    	<td>Start Date</td>
                        <td><input class="span10" data-date="02/12/2013" data-date-format="mm/dd/yyyy" type="text" id="datepicker" name="date" value="<?php echo $event_info[0]['date'] ?>" /></td>
                    </tr>
                    <tr>
                    	<td>End Date</td>
                        <td><input class="span10" data-date="02/12/2013" data-date-format="mm/dd/yyyy" type="text" id="datepicker2" name="end_date" value="<?php echo $event_info[0]['end_date']; ?>"</td>
                    </tr>
                    <tr>
                    	<td>Start Time</td>
                        <td class="input-append bootstrap-timepicker"><input id="timepicker" class="span12" type="text" name="start_time" />
                            <span class="add-on"><i class="icon-time"></i></span>
                        </td>
                    </tr>
                    <tr>
                    	<td>End Time</td>
                        <td class="input-append bootstrap-timepicker"><input id="timepicker2" class="span12" type="text" name="end_time" />
                        	<span class="add-on"><i class="icon-time"></i></span>
                        </td>
                    </tr>
                    <tr>
                    	<td>RSVP Option</td>
                        <td><input type="radio" name="rsvp" value="yes" <?php if($event_info[0]['rsvp']=='yes'){ echo 'checked="checked"'; } ?>> Yes</input><br />
                        	<input type="radio" name="rsvp" value="no" <?php if($event_info[0]['rsvp']!='yes'){ echo 'checked="checked"'; } ?>> No</input>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="hidden" name="id" value="<?php echo $event_info[0]['id']; ?>" />
            <input class="btn btn-large" type="submit" value="Edit Event" />
            </form>
        </div><!-- span8 -->
        <div class="span4">
        	<div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events'; ?>">Events Home</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li> 
                    <li><h5><a href="#">Speaker's Bureau</a></h5></li> 
                    <li><h5><a href="#">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                </ul>
            </div>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
</div>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker();
	});
	$(function(){
		$("#datepicker2").datepicker();
	});
	$(function(){
		$("#timepicker").timepicker('setTime','<?php echo $event_info[0]['start_time']; ?>');
	});
	$(function(){
		$("#timepicker2").timepicker('setTime','<?php echo $event_info[0]['end_time']; ?>');
	});
</script>
</body>
</html>