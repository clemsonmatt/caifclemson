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
        	<h3>Photos</h3>
        	<fieldset>	
            <!-- add newsletter -->	
            <legend style="color: rgb(255, 85, 0);">Add Albums</legend>
            <form action="<?php echo base_url().'manage/add_album'; ?>" method="post">
            	<table class="table">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>                       
                            <td class="span4"><strong>Add Album</strong></td>
                            <td class="input offset3">                            	
                                <input class="span9 required" type="text" size="30" name="add_album" />                                
                            </td>
                        </tr>
                        <tr>                       
                            <td class="span4"><strong>Album Description</strong></td>
                            <td class="input offset3">                            	
                                <input class="span9 required" type="text" size="30" name="album_description" />                                
                            </td>
                        </tr>
                        <tr><td></td><td><input class="btn btn-success btn-mini" type="submit" value="Add Album" /></td></tr>
                	</tbody>
                </table>
            </form>
            <legend style="color: rgb(255, 85, 0);">Add Photos</legend>
        	<form action="<?php echo base_url().'manage/upload_photos'; ?>" method="post" enctype="multipart/form-data">
            	<table>
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php if(isset($albums)): ?>
                        <tr>
                        	<td class="span4"><strong>Album</strong></td>
                            <td class="input offset3">
                            	<select class="span9" name="album">
                                	<option value="none">None</option>                                    
                                    	<?php foreach($albums as $album): ?>
                                        	<option value="<?php echo $album['id']; ?>"><?php echo $album['name']; ?></option>
                                        <?php endforeach; ?>                                    
                                </select>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Filename</strong></td>
                            <td class="input offset3">
                                <span class="btn btn-file">Upload Photo <input type="file" name="file" id="file" /></span><br />
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
            <input type="submit" class="btn btn-success" name="Submit" value="Add Photo" />
            </form> 
            <br /> 
            <!-- view all newsletters --> 
            <legend style="color: rgb(255, 85, 0);">Remove Photos</legend>
            <form action="<?php echo base_url().'manage/remove_photo'; ?>" method="post">
                <table class="table table-striped">
                   	<thead>
                       	<th>Remove Option</th>
                        <th>Photo</th>
                        <th>Date Added</th>
                    </thead>
                    <tbody>
                    <?php foreach($photos as $photo): ?>
                    	<tr>
                        	<td><button type="submit" class="btn btn-danger btn-mini" name="remove_photo" value="<?php echo $photo['content']; ?>">Remove</button></td>
                            <td><?php echo '<img src="'.base_url().'/photos/'.$photo['content'].'" width="150px" style="max-width:150px;"/>'; ?></td>
                            <td><?php echo $photo['submit_time']; ?></td>
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
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
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