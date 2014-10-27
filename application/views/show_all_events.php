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
        	<legend><h4>All Events</h4></legend>
    		<div style="height:500px; overflow:auto;">
        	<table class="table table-striped">
            	<thead>
                	<th class="span3">Title</th>
                    <th class="span3">Date/Time</th>
                    <th class="span2"></th>
                </thead>
                <tbody>
                	<?php if(isset($events)){ foreach($events as $event): ?>
            			<tr>
                        	<td><a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>" style="color:#333;"><?php echo $event['title']; ?></a></td>
                            <td <?php if ( date(strtotime($event['date'])) < time() ){ echo 'style="color:#F00;"'; } ?>> 
								<?php 
									if ($event['date']==NULL) { 
										echo ' '; 
									}
									else { 
										echo date('l, m/d/y', strtotime($event['date'])).'<br />'.$event['start_time'].' - '.$event['end_time']; 
									} 
								?>
                            </td>
                            <td>
                            	<a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>">
                                	<button class="btn" type="button">More Info &raquo;</button>
                                </a>
                            </td>
                        </tr>
            		<?php endforeach; } ?>
                </tbody>
			</table>
            </div>
        </div><!-- span9 -->
        <div class="span4">
        	<div class="well-small">
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'events/newsletters'; ?>">Newsletters</a></h5></li>  
                    <li><h5><a href="<?php echo base_url().'events/eng_class'; ?>">Conversational Eng. Class</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'events/photos'; ?>">Photo Gallery</a></h5></li>
                </ul>
            </div>
        </div><!-- span3 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>