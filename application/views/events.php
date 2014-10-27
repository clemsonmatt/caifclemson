<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
td{
	max-width:430px;	
}
</style>
</head>

<body>
<div class="container">
    <div class="row-fluid">               
        <div class="span8">   
            <div class="well span6" style="height:320px;">
                <ul class="nav nav-list">
                    <li class="nav-header">Events this month</li>
                    <?php $i=0; if(isset($events)){ foreach($events as $event): if($i>2){break;}?>
                        <?php if(date('m/Y',strtotime($event['date'])) == date('m/Y')): ?>
                        <li><h5><a href="<?php $i++; echo base_url().'events/show_event/'.$event['id']; ?>"><?php echo $event['title']; ?></a></h5><?php echo date('l, m/d/y', strtotime($event['date'])); ?></li>
                            <!--ul><li><?php echo date('l, m/d/y', strtotime($event['date'])); ?></li></ul-->
                        <?php endif; ?>
                    <?php endforeach; } ?>
                </ul>
            </div>
            <div class="well span6">
                <?php echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4)); ?>
            </div>
        </div>
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
        </div>
    </div>
    <div class="row-fluid">
        <div class="10">
            <div class="well">
            <a href="<?php echo base_url().'events/show_all_events'; ?>" style="float:right"><button class="btn">View Past Events</button></a>
            <h4>CAIF Upcoming Events</h4>
            <div style="max-height:500px; overflow:auto;">
                <table class="table table-striped table-condensed">
                    <thead>
                        <th class="span3"><strong>Event</strong></th>
                        <th class="span3"><strong>Date/Time</strong></th>
                        <th><strong>Description</strong></th>
                        <th class="span2"></th>
                    </thead>
                    <tbody>
                        <?php if($events){ foreach($events as $event): ?>
                        	<?php if($event['date'] == NULL): ?>
                            <tr>
                            	<td><h5><a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>"><?php echo $event['title']; ?></a></h5></td>
                                <td>&nbsp;</td>
                                <td style="max-width:400px;"><a href="<?php echo $event['url']; ?>" target="_blank"><?php echo $event['url']; ?></a></td>
                                <td><a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>"><button class="btn" type="button">More Info &raquo;</button></a></td>
                            <tr>
                            <?php endif; ?>
							<?php if(date(strtotime($event['date'])) >= (time() - (1 * 24 * 60 * 60))): ?>
                            <tr>
                                <td><h5><a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>"><?php echo $event['title']; ?></a></h5></td>
                                <td><?php echo date('l, m/d/y', strtotime($event['date'])).'<br />'.$event['start_time'].' - '.$event['end_time']; ?></td>
                                <td style="max-width:400px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis"><?php echo $event['description'].'<br />&nbsp;'; ?></td>
                                <td><a href="<?php echo base_url().'events/show_event/'.$event['id']; ?>"><button class="btn" type="button">More Info &raquo;</button></a></td>
                            </tr>
                            <?php endif; ?>
                        <?php endforeach; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>