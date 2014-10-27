<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="span3">
            <div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events'; ?>">Events Home</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">English Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                </ul>
            </div>
        </div>
        <div class="span9">
        	<div class="well">
            	<div class="row">
            	<ul class="nav nav-list">
                    <li class="nav-header">Past Newsletters</li>
                    <div class="span5">

                    </div>
                    <div class="span4">

                    </div>
                </ul>
                </div>
            </div>
        </div>
        <h2>Current Newsletter</h2>
        <hr />
    	<div class="well span12">
        	<?php foreach($newsletters as $news):?>
            	<h4><?php echo $news['title']; ?></h4>
                <h5><?php echo $news['date_added']; ?></h5>
                <?php if($username!=NULL){ echo '<h5>Description: '.$news['description'].'</h5>'; } ?>
                <iframe src='<?php echo base_url().'/'.$news['content']; ?>' width='900px' height='700px' ></iframe>
            <?php endforeach; ?>
        </div><!-- span8 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>