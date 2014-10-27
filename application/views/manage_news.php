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
        	<h3>Newsletters</h3>
        	<fieldset>	
            <!-- add newsletter -->	
            <legend style="color: rgb(255, 85, 0);">Add a Newsletter</legend>
        	<form action="<?php echo base_url().'manage/upload_news'; ?>" method="post" enctype="multipart/form-data">
            	<table>
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td class="span4"><strong>Title</strong></td>
                            <td class="input offset3">
                              <input class="span9 required" type="text" size="30" name="title" />
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Filename</strong></td>
                            <td class="input offset3">
                                <span class="btn btn-file">Upload PDF <input type="file" name="file" id="file" /></span><br />
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr>
                          	<td><strong>Description</strong></td>
                          	<td class="input offset3">
                              	<textarea class="span9 required" type="text" name="description" ></textarea>
                          	</td>
                        </tr>
                    </tbody>
                </table> 
                <br />
            <input type="submit" class="btn btn-success" name="Submit" value="Add Newsletter" />
            </form> 
            <br /> 
            <!-- view all newsletters --> 
            <legend style="color: rgb(255, 85, 0);">Remove Newsletters</legend>
            <form action="<?php echo base_url().'manage/remove_news'; ?>" method="post">
                <table class="table table-striped">
                   	<thead>
                       	<th>Remove Option</th>
                        <th>Newsletter Title</th>
                        <th>Date Added</th>
                    </thead>
                    <tbody>
                    <?php foreach($news_info as $info): ?>
                    	<tr>
                        	<td><button type="submit" class="btn btn-danger btn-mini" name="remove_news" value="<?php echo $info['title']; ?>">Remove</button></td>
                            <td><?php echo $info['title']; ?></td>
                            <td><?php echo $info['date_added']; ?></td>
                        </tr>
                    <?php endforeach; ?>
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
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/email'; ?>">Send Email</a></h5></li>
            </ul>
        </div>
	</div>
</div>
</body>
</html>