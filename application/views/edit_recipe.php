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
        	<legend><h4>Edit A Recipe</h4></legend>
            <form action="<?php echo base_url().'host/submit_edit_recipe/'.$recipe[0]['id']; ?>" method="post">
            <table class="table table-striped">
            	<thead>
                	<th></th>
                    <th></th>
                </thead>
                <tbody>
                	<tr>
                    	<td><strong>Title</strong></td>
                        <td><input class="span11" type="text" name="title" value="<?php echo $recipe[0]['title']; ?>" /></td>
                    <tr>
                    <tr>
                    	<td><strong>Description</strong></td>
                        <td><textarea class="span11" rows="8" name="description"><?php echo $recipe[0]['description']; ?></textarea></td> 
                    </tr>
                    <tr>
                    	<td><strong>URL</strong></td>
                        <td><input class="span11" type="text" name="url" value="<?php echo $recipe[0]['url']; ?>" /></td>
                    </tr>
                    <tr>
                    	<td><strong>Ingredients</strong></td>
                        <td><textarea class="span11" rows="8" name="ingredients"><?php echo $recipe[0]['ingredients']; ?></textarea></td>
                    </tr>
                    <tr>
                    	<td><strong>Instructions</strong></td>
                        <td><textarea class="span11" rows="8" name="instructions"><?php echo $recipe[0]['instructions']; ?></textarea></td>
                    </tr>
                </tbody>
            </table>
            <input class="btn btn-large" type="submit" value="Add Recipe" />
            </form>
        </div><!-- span8 -->
        <div class="span4">
        	<ul class="nav nav-list">
            	<li class="nav-header">Host Information</li>
                <li><h5><a href="<?php echo base_url().'host/host_guide'; ?>">Guidelines For Community Members</a></h5></li>
                <li><h5><a href="<?php echo base_url().'host/host_form'; ?>">Form For Community Members</a></h5></li>
                <li><h5><a href="<?php echo base_url().'host/stu_guide'; ?>">Guidelines For Students</a></h5></li>
                <li><h5><a href="<?php echo base_url().'host/stu_form'; ?>">Form For Students</a></h5></li>
                <hr />    
                <li><h5><a href="<?php echo base_url().'host/activity_ideas'; ?>">Activity Ideas</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'host/conversation_starters'; ?>">Conversation Starters</a></h5></li>
                <li><h5><a href="<?php echo base_url().'host/what_to_serve'; ?>">What To Serve</a></h5></li>
            </ul>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>