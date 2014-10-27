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
        	<h3>Photo Gallery</h3>
        	<br />
            <table class="table">
            	<thead>
                	<th><a href="<?php echo base_url().'events/photos'; ?>">&laquo; Back to Albums</a></th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                	<?php $i=-1; foreach($photos as $photo): $i++;?>
                    	<?php if(($i%3==0) && ($i>2)){ echo '</tr><tr>'; }
							  else if($i==0){ echo '<tr>'; } ?>
                        <td style="width:160px; height:160px;">
                        	<a href="<?php echo base_url().'photos/'.$photo['content']; ?>"><img src="<?php echo base_url().'/photos/'.$photo['content']; ?>" width="100%" style="max-width:160px;" frameborder="0" scrolling="no" /></a><br />
                            <?php echo $photo['description']; ?>
                        </td>
                    <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div><!-- span8 -->
        <div class="span4">
        	<ul class="nav nav-list">
                <li class="nav-header">Latest News</li>
                <li><h5><a href="<?php echo base_url().'events'; ?>">Events Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
            </ul>
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>