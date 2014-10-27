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
        	<legend><center><h3><?php echo $class_info[0]['title']; ?></h3></center></legend>
            <?php if($admin==1): ?>
            	<a href="<?php echo base_url().'events/edit_club/'.$class_info[0]['id']; ?>"><button class="btn">Edit</button></a>
            <?php endif; ?>
            <table class="table table-striped">
            	<thead>
                	<th class="span2"><h4>Club Info</h4></th>
                	<th></th>
                </thead>
                <tbody>
                	<tr>
                    	<td><strong>Description</strong></td>
                        <td><?php echo nl2br($class_info[0]['info']); ?></td>
                    </tr>
                    <tr>
                    	<td><strong>When</strong></td>
                        <td><?php echo nl2br($class_info[0]['when']); ?></td>
                    </tr>
                    <tr>
                    	<td><strong>Time</strong></td>
                        <td><?php echo $class_info[0]['time']; ?></td>
                    </tr>
                    <tr>
                    	<td><strong>Where</strong></td>
                        <td><?php echo nl2br($class_info[0]['where']); ?></td>
                    </tr>
                    <?php if($class_info[0]['food']!=NULL): ?>
                    <tr>
                    	<td><strong>Food</strong></td>
                        <td><?php echo $class_info[0]['food']; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($class_info[0]['childcare']!=NULL): ?>
                    <tr>
                    	<td><strong>Childcare</strong></td>
                        <td><?php echo $class_info[0]['childcare']; ?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($class_info[0]['comments']!=NULL): ?>
                    <tr>
                    	<td><strong>Other Comments</strong></td>
                        <td><?php echo nl2br($class_info[0]['comments']); ?></td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <br />
            <table class="table table-striped">
            	<thead>
                	<th class="span2"><h4>Contact Info</h4></th>
                    <th></th>
                </thead>	
                <tbody>
                	<tr>
                    	<td><strong>Contact Name</strong></td>
                        <td><?php echo $class_info[0]['contact_name']; ?></td>
                    </tr>
                    <tr>
                    	<td><strong>Contact Phone</strong></td>
                        <td><?php echo $class_info[0]['contact_phone']; ?></td>
                    </tr>
                    <tr>
                    	<td><strong>Contact Email</strong></td>
                        <td><?php echo $class_info[0]['contact_email']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div><!-- span8 -->
        <div class="span4">
        	<div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/club'; ?>">International Club</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                    <li><h5><a href="http://pickens.alc.schoolfusion.us/modules/cms/pages.phtml?pageid=36278&sessionid=f742abc4f25b24374e6d86b1f21dae5c" target="_blank">Adult Learning Center</a></h5></li>
                </ul>
            </div>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>