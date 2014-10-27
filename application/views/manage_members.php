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
        	<h3>Members</h3>
        	<table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                	<?php $i=1; if(isset($members)){ foreach($members as $member): ?>
                    <tr>
                    	<td><?php echo $i; ?></td>
                        <td><?php $i++; echo $member['name']; ?></td>
                        <td><?php echo $member['email']; ?></td>
                        <th><button class="btn">Edit</button></th>
                        <th><button class="btn btn-danger">Remove</button></th>
                    </tr>
                    <?php endforeach; } ?>
                </tbody>
            </table>
        </div>
        <div class="span3">
            <ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage'; ?>">Manage Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
            </ul>
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>