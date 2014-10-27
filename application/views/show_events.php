<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
	jQuery(function(){
		jQuery('#comingYes').click(function(){
			jQuery('#showGuestYN').show();
		});
		jQuery('#comingNo').click(function(){
			jQuery('.hideGuestYN').hide();
			jQuery('.hideGuestNum').hide();
		});
		jQuery('#guestYes').click(function(){
			jQuery('#showGuestNum').show();
		});
		jQuery('#guestNo').click(function(){
			jQuery('.hideGuestNum').hide();
		});
	});
</script>

</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<h3>Event Details</h3>
            <?php if($admin==1): ?>
            	<a href="<?php echo base_url().'events/edit_event/'.$event_info[0]['id']; ?>" style="color:#FFF;"><button class="btn">Edit Event</button></a>
            <?php endif; ?>
            <hr />
            <h4><?php echo $event_info[0]['title']; ?></h4>
            <table class="table">
            	<thead>
                	<th></th>
                    <th></th>
                </thead>
                <tbody>
                	<?php if($event_info[0]['url']!=NULL): ?>
               		<tr>
                    	<td>URL</td>
                        <td><a href="<?php echo $event_info[0]['url'] ?>" target="_blank"><?php echo $event_info[0]['url'] ?></a></td>
                    </tr>
                    <?php endif; ?>
                	<?php if($event_info[0]['description']!=NULL): ?>
               		<style>
						
					</style>
                    <tr style="h1, h2, h3, h4, h5, h6{
							color:#222;
							margin:15px;
						}
						p{
							color:#222;
							margin:10px;
							float:left;
						}
						ul{
							margin-top:10px;
						}">
                    	<td>Description</td>
                        <td><?php echo $event_info[0]['description'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($event_info[0]['location']!=NULL): ?>
                    <tr>
                    	<td>Location</td>
                        <td><?php echo $event_info[0]['location'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($event_info[0]['date']!=NULL): ?>
                    <tr>
                    	<td>Start Date</td>
                        <td><?php echo date('l, m/d/y', strtotime($event_info[0]['date'])) ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($event_info[0]['end_date']!=NULL): ?>
                    <tr>
                    	<td>End Date</td>
                        <td><?php echo date('l, m/d/y', strtotime($event_info[0]['end_date'])) ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($event_info[0]['date']!=NULL): ?>
                    <tr>
                    	<td>Start Time</td>
                        <td><?php echo $event_info[0]['start_time'] ?></td>
                    </tr>
                    <tr>
                    	<td>End Time</td>
                        <td><?php echo $event_info[0]['end_time'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($event_info[0]['rsvp']=='yes'){ ?> 
                    <tr>
                    	<td>RSVP Option</td>
                        <td><?php echo $event_info[0]['rsvp'] ?></td>
                    </tr>
                    <?php if($already_rsvp[0]['username']==NULL): ?>
                    	<form method="post" action="<?php echo base_url().'events/rsvp/'.$event_info[0]['id']; ?>">
                    <?php else: ?>
                    	<form method="post" action="<?php echo base_url().'events/change_rsvp/'.$event_info[0]['id']; ?>">
                    <?php endif; ?>
                    	<input type="hidden" name="username" value="<?php echo $username; ?>" />
                        <tr>
                            <td>Are You Coming?</td>
                            <td>
                            	<input id="comingYes" type="radio" name="coming" value="yes" <?php if($already_rsvp[0]['coming']=='yes'){ echo 'checked="checked"'; } ?> /> Yes <br />
                            	<input id="comingNo" type="radio" name="coming" value="no" <?php if($already_rsvp[0]['coming']=='no'){ echo 'checked="checked"'; } ?> /> No
                            </td>
                        </tr>
                        <tr style="display:none;" class="hideGuestYN" id="showGuestYN">
                        	<td>Are You Bringing Guests?</td>
                            <td>
                            	<input id="guestYes" type="radio" name="guests" value="yes" /> Yes <br />
                                <input id="guestNo" type="radio" name="guests" value="no" /> No
                            </td>
                        </tr>
                        <tr style="display:none;" class="hideGuestNum" id="showGuestNum">
                        	<td>How Many Guests?</td>
                            <td>
                            	<input id="guestNum" type="text" name="guestNum" />
                            </td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" class="span9" value="<?php if(isset($user_info[0]['FirstName'])) echo $user_info[0]['FirstName'].' '.$user_info[0]['LastName']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="span9" type="email" name="email" value="<?php if(isset($user_info[0]['email'])) echo $user_info[0]['email']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>
                            	<?php if($already_rsvp[0]['username']==NULL): ?>
                                	<input class="btn" type="submit" value="RSVP Now" />
                                <?php else: ?>
                                	<input class="btn" type="submit" value="Change RSVP" />
                                <?php endif; ?>
                            </td>
                            <td></td>
                    	</tr>
                    </form>
                    <?php } ?>
                </tbody>
            </table>
        </div><!-- span8 -->
        <div class="span4">
            <div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events'; ?>">Events Home</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                </ul>
            </div>
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>