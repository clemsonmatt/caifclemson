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

<!--script type="text/javascript" src="<?php echo base_url('assets/tinymce/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script-->
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        //tinymce.init({selector:'textarea'});
</script>

<script type="text/javascript">
	jQuery(function(){
		jQuery('#rsvpYes').click(function(){
			jQuery('#showRsvpPhone').show();
		});
		jQuery('#rsvpNo').click(function(){
			jQuery('.hideRsvpPhone').hide();
		});
	});
</script>

</head>

<body>
<div class="container">
	<div class="row-fluid">
        <div class="well span8">
        	<h3>Events</h3>
        	<fieldset>	
            <!-- add newsletter -->	
            <legend style="color: rgb(255, 85, 0);">Add Event</legend>
        	<form action="<?php echo base_url().'manage/add_event'; ?>" method="post" enctype="multipart/form-data">
            	<table class="table">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td class="span3"><strong>Title</strong></td>
                            <td class="input offset3">
                              <input class="span11" type="text" size="30" name="title" />
                            </td>
                        </tr>
                        <tr>
                        	<td class="span3"><strong>URL</strong></td>
                            <td class="input offset3">
                            	<input class="span11" type="text" size="30" name="url" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tbody>
                        <tr>
                        	<td class="span3"><strong>Description</strong></td>
                            <td class="input offset1">
                            	<textarea class="span11" rows="10" name="description"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <tbody>
                        <tr>
                        	<td class="span4"><strong>Location</strong></td>
                            <td class="input offset3">
                            	<input class="span10" type="text" name="location" />
                            </td>
                        </tr>
                        <tr>
                        	<td class="span4"><strong>Start Date</strong></td>
                            <td class="input offset3">
                            	<input class="span10" data-date="02/12/2013" data-date-format="mm/dd/yyyy" type="text" id="datepicker" name="date" placeholder="05/16/2013" />
                            </td>
                        </tr>
                        <tr>
                        	<td class="span4"><strong>End Date</strong></td>
                            <td class="input offset3">
                            	<input class="span10" data-date="02/12/2013" data-date-format="mm/dd/yyyy" type="text" id="datepicker2" name="end_date" placeholder="05/16/2013" />
                            </td>
                        </tr>
                        <tr>
                        	<td class="span4"><strong>Start Time</strong></td>
                            <td class="input-append bootstrap-timepicker">
                            	<input id="timepicker" class="span12" type="text" name="start_time" />
                                <span class="add-on"><i class="icon-time"></i></span>
                            </td>
                        </tr>
                        <tr>
                        	<td class="span4"><strong>End Time</strong></td>
                            <td class="input-append bootstrap-timepicker">
                            	<input id="timepicker2" class="span12" type="text" name="end_time" />
                                <span class="add-on"><i class="icon-time"></i></span>
                            </td>
                        </tr>
                        <tr>
                        	<td class="span4"><strong>RSVP Option</strong></td>
                            <td class="offset3">
                            	<select name="rsvp">
                                	<option id="rsvpNo" value="no">No</option>
                                    <option id="rsvpYes" value="yes">Yes</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="display:none;" class="hideRsvpPhone" id="showRsvpPhone">
                        	<td class="span4"><strong>RSVP Phone Contact</strong></td>
                            <td class="offest3">
                            	<input id="rsvpPhone" class="span10" type="text" name="rsvpPhone" />
                            </td>
                        </tr>
                    </tbody>
                </table> 
                <br />
            <input type="submit" class="btn btn-success" name="Submit" value="Add Event" />
            </form> 
            <br /> 
            <!-- view all newsletters --> 
            <legend style="color: rgb(255, 85, 0);">Remove Event</legend>
            <form action="<?php echo base_url().'manage/remove_event'; ?>" method="post">
                <table class="table table-striped">
                   	<thead>
                       	<th>Remove Option</th>
                        <th>Event Title</th>
                        <th>Date Added</th>
                    </thead>
                    <tbody>
                    <?php if(isset($events)){ foreach($events as $event): ?>
                    	<tr>
                        	<td><button type="submit" class="btn btn-danger btn-mini" name="event_title" value="<?php echo $event['title']; ?>">Remove</button></td>
                            <td><?php echo '<a href="'.base_url().'events/show_event/'.$event['id'].'" style="color:rgb(255, 85, 0);">'.$event['title'].'</a>'; ?></td>
                            <td><?php echo $event['submit_time']; ?></td>
                        </tr>
                    <?php endforeach; }?>
                    </tbody>
                </table>
            </form>
        </fieldset>
        </div>       
        <div class="span3">
            <ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage'; ?>">Manage Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
            </ul>
        </div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#datepicker").datepicker();
	});
	$(function(){
		$("#datepicker2").datepicker();
	});
	$(function(){
		$("#timepicker").timepicker();
	});
	$(function(){
		$("#timepicker2").timepicker();
	});
</script>
</body>
</html>