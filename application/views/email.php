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
        	<a href="<?php echo base_url().'manage/sent_emails'; ?>"><button class="btn pull-right">Show Sent Emails</button></a>
        	<legend><h4>Email</h4></legend>
            <form action="<?php echo base_url().'manage/send_email'; ?>" method="post">
            <table class="table">
            	<thead>
                	<th></th>
                    <th></th>
                </thead>
                <tbody>
                	<tr>
                    	<td><strong>Send To</strong></td>
                        <td>
                        	<select class="span10" name="to">
                            	<option value="all">All</option>
                            	<option value="stu">Students Only</option>
                                <option value="host_with_stu">Host Familys Who Currently Have Students</option>
                                <option value="host">Host Familys Only</option>
                                <option value="members">Community Members & Host Familys Only</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    	<td><strong>Subject</strong></td>
                        <td><input class="span10" type="text" name="subject" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Message</strong></td>
                        <td><textarea name="message" class="span10" rows="15"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <!--input type="submit" class="btn btn-success" value="Send Email" /-->
            <button type="submit" class="btn btn-success"><i class="icon-envelope icon-white"></i> Send Email</button>
            </form>
        </div><!-- span8 -->
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