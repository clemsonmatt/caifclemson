<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
	jQuery(function(){
		jQuery('.email').click(function(){
			jQuery('.emailHide').hide();
			jQuery('#email_'+$(this).attr('target')).show();
		});
		jQuery('.closeEmail').click(function(){
			jQuery('.emailHide').hide();
			jQuery('.showEmails').show();
		});
		jQuery('.emailTo').click(function(){
			jQuery('#emailTo_'+$(this).attr('target')).show();
			jQuery('.viewToEmail').hide();
			jQuery('.hideToEmail').show();
		});
		jQuery('.hideToEmail').click(function(){
			jQuery('.hideToEmail').hide();
			jQuery('.hideTo').hide();
			jQuery('.viewToEmail').show();
		});
	});
</script>

</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<a class="emailHide showEmails" href="<?php echo base_url().'manage/email'; ?>"><button class="btn pull-right">Send Email</button></a>
        	<div class="emailHide showEmails">    
                <legend><h4>Sent Emails</h4></legend>
                <div class="tabbable span12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">Standard</a></li>
                        <li><a href="#tab2" data-toggle="tab">RSVP List</a></li>
                    </ul>
                    <div class="tab-content">
            			<!-- tab 1 -->
                        <div class="tab-pane active" id="tab1">
                        	<div style="max-height:500px; overflow:auto;">
                            <table class="table table-striped">
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php foreach($emails as $email): ?>
                                    	<?php if($email['rsvp']==0): ?>
                                        <tr>
                                            <td><a target="<?php echo $email['id']; ?>" id="<?php echo $email['id']; ?>" class="email"><button class="btn">View</button></a></td>
                                            <td><?php echo $email['subject']; ?></td>
                                            <td><?php echo date('D. n/j/y - h:i A', strtotime($email['date'])); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- tab 2 -->
                        <div class="tab-pane" id="tab2">
                        	<div style="max-height:500px; overflow:auto;">
                        	<table class="table table-striped">
                                <thead>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php foreach($emails as $email): ?>
                                    	<?php if($email['rsvp']==1): ?>
                                        <tr>
                                            <td><a target="<?php echo $email['id']; ?>" id="<?php echo $email['id']; ?>" class="email"><button class="btn">View</button></a></td>
                                            <td><?php echo $email['subject']; ?></td>
                                            <td><?php echo date('D. n/j/y - h:i A', strtotime($email['date'])); ?></td>
                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!-- tab-content -->
                </div><!-- tabbable -->
            </div>
            <?php foreach($emails as $email): ?>
                <div id="email_<?php echo $email['id']; ?>" class="emailHide" style="display:none;">
                	<a class="closeEmail pull-right"><button class="btn">&laquo; Back</button></a>
                    <legend><h4><?php echo date('D. n/j/y - h:i A', strtotime($email['date'])); ?></h4></legend>
                    <form action="<?php echo base_url().'manage/send_email'; ?>" method="post">
                    <table class="table">
                        <tr>
                            <th>To:</th>
                            <td>
                            	<select class="span10" name="to">
                                    <option <?php if($email['to_general'] == 'all'){ echo 'selected="selected"'; } ?> value="all">All</option>
                                    <option <?php if($email['to_general'] == 'stu'){ echo 'selected="selected"'; } ?> value="stu">Students Only</option>
                                    <option <?php if($email['to_general'] == 'host_with_stu'){ echo 'selected="selected"'; } ?> value="host_with_stu">Host Familys Who Currently Have Students</option>
                                    <option <?php if($email['to_general'] == 'host'){ echo 'selected="selected"'; } ?> value="host">Host Familys Only</option>
                                    <option <?php if($email['to_general'] == 'members'){ echo 'selected="selected"'; } ?> value="members">Community Members & Host Familys Only</option>
                            	</select> 
                            	<a target="<?php echo $email['id']; ?>" class="emailTo viewToEmail"><button type="button" class="btn btn-info pull-right">View</button></a>
                                <a target="<?php echo $email['id']; ?>" class="hideToEmail" style="display:none;"><button type="button" class="btn btn-info pull-right">Hide</button></a>
                            	<div id="emailTo_<?php echo $email['id']; ?>" class="hideTo" style="display:none;">
                                	<?php echo $email['to']; ?>
                                </div>    
                            </td>
                        </tr>
                        <tr>
                            <th>Subject:</th>
                            <td><input class="span12" type="text" name="subject" value="<?php echo $email['subject']; ?>" /></td>
                        </tr>
                        <tr>
                            <th>Message:</th>
                            <td><textarea name="message" class="span12" rows="15"><?php echo $email['message']; ?></textarea></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-success"><i class="icon-envelope icon-white"></i> Send Email</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
         <div class="span4">
        	<ul class="nav nav-list">
                  <li class="nav-header">Administrative Tools</li>
                  <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                  <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                  <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li>
                  <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                  <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
              </ul>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>