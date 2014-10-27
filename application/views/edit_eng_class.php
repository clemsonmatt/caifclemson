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
        	<form action="<?php echo base_url().'events/sub_edit_eng_class/'.$class_info[0]['id']; ?>" method="post">
            <table class="table table-striped">
            	<thead>
                	<th class="span2"><h4>Class Info</h4></th>
                	<th></th>
                </thead>
                <tbody>
                	<tr>
                    	<td><strong>Title</strong></td>
                        <td><input class="span12" type="text" name="title" value="<?php echo $class_info[0]['title']; ?>" /></td>
                    </tr>
                	<tr>
                    	<td><strong>Description</strong></td>
                        <td><textarea class="span12" rows="7" name="description"><?php echo $class_info[0]['info']; ?></textarea></td>
                    </tr>
                    <tr>
                    	<td><strong>When</strong></td>
                        <td><textarea class="span12" rows="7" name="when"><?php echo $class_info[0]['when']; ?></textarea></td>
                    </tr>
                    <tr>
                    	<td><strong>Time</strong></td>
                        <td><input class="span12" type="text" name="time" value="<?php echo $class_info[0]['time']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Where</strong></td>
                        <td><textarea class="span12" rows="7" name="where"><?php echo $class_info[0]['where']; ?></textarea></td>
                    </tr>
                    <tr>
                    	<td><strong>Food</strong></td>
                        <td><input class="span12" type="text" name="food" value="<?php echo $class_info[0]['food']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Childcare</strong></td>
                        <td><input class="span12" type="text" name="childcare" value="<?php echo $class_info[0]['childcare']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Other Comments</strong></td>
                        <td><textarea class="span12" rows="7" name="comments"><?php echo $class_info[0]['comments']; ?></textarea></td>
                    </tr>
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
                        <td><input class="span12" type="text" name="contact_name" value="<?php echo $class_info[0]['contact_name']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Contact Phone</strong></td>
                        <td><input class="span12" type="text" name="contact_phone" value="<?php echo $class_info[0]['contact_phone']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Contact Email</strong></td>
                        <td><input class="span12" type="text" name="contact_email" value="<?php echo $class_info[0]['contact_email']; ?>" /></td>
                    </tr>
                </tbody>
            </table>
            <input class="btn btn-large" type="submit" value="Save English Class Changes" />
            </form>
        </div><!-- span8 -->
        <div class="span4">
        	<div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/club'; ?>">International Club</a></h5></li>
                </ul>
            </div>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>