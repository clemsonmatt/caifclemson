<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<a href="<?php echo base_url().'manage/show_rsvp_all'; ?>" style="float:right;"><button class="btn">Show Past RSVPs To Events</button></a>
        	<h3>RSVPs To Events</h3>
        	<?php if(isset($events)){ foreach($events as $event): ?>
            	<?php if($event['rsvp'] == 'yes'){ ?>
                	<?php if(date(strtotime($event['date']))>time()): ?>
                	<legend>                     
                    <a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>"><h4><?php echo $event['title']; ?></h4></a>
                    <a href="<?php echo base_url().'manage/email_rsvp_list/'.$event['id']; ?>" style="float:right;"><button class="btn"><i class="icon-envelope"></i> Email RSVP List</button></a>
                    <a href="<?php echo base_url().'manage/download_rsvp/'.$event['id']; ?>"><button class="btn"><i class="icon-download"></i> Download List</button></a>
                    </legend>
                    <table class="table table-striped">
                        <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Response</th>
                        </thead>
                        <tbody>
                    <?php $i=1;  if(isset($rsvps)){ foreach($rsvps as $rsvp): ?>
                        <?php if($rsvp['event_id']==$event['id'])
                              { 							  
                                 echo '<tr>
                                     <td>'.$i++.'</td>
                                     <td>'.$rsvp['name'].'</td>
                                     <td>'.$rsvp['email'].'</td>
                                     <td>'.$rsvp['coming'].'</td>
                                 </tr>';
                              } ?>                    
                    <?php endforeach; } ?>
                        </tbody>
                    </table>
                    <br />
                    <?php endif; ?>
                <?php } ?>
            <?php endforeach; } ?>
        </div><!-- well span8 -->
        <div class="span4">
        	<ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage'; ?>">Manage Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
            </ul>
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>