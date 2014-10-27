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
        	<form action="<?php echo base_url().'events/sub_eng_class'; ?>" method="post">
            	<legend><h4>New Conversational English Class</h4></legend>
                <table class="table table-striped">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td><strong>Title</strong></td>
                            <td><input class="span12" type="text" name="title" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Description</strong></td>
                            <td><textarea class="span12" rows="7" name="description"></textarea></td>
                        </tr>
                        <tr>
                        	<td><strong>When</strong></td>
                            <td><textarea class="span12" rows="7" name="when"></textarea></td>
                        </tr>
                        <tr>
                        	<td><strong>Time</strong></td>
                            <td><input class="span12" type="text" name="time" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Where</strong></td>
                            <td><textarea class="span12" rows="7" name="where"></textarea></td>
                        </tr>
                        <tr>
                        	<td><strong>Food</strong></td>
                            <td><input class="span12" type="text" name="food" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Childcare</strong></td>
                            <td><input class="span12" type="text" name="childcare" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Other Comments</strong></td>
                            <td><textarea class="span12" rows="7" name="comments"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <legend><h4>Contact Info</h4></legend>
                <table class="table table-striped">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                        <tr>
                        	<td><strong>Contact Name</strong></td>
                            <td><input class="span12" type="text" name="contact_name" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Contact Phone</strong></td>
                            <td><input class="span12" type="text" name="contact_phone" /></td>
                        </tr>
                        <tr>
                        	<td><strong>Contact Email</strong></td>
                            <td><input class="span12" type="text" name="contact_email" /></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <input class="btn btn-large" type="submit" value="Submit New English Class" />
            </form>
        </div><!-- span8 -->
        <div class="span4">
        	<div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
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