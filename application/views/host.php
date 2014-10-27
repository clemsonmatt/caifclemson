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
            	<h4>Host Friend Program</h4>
                <hr />
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Each year, 
                Clemson University welcomes approximately 600 NEW internationals
                to its campus. At any given time, there are between 1400-1500 
                internationals studying at Clemson University, representing 
                80-90 different countries. In 2012-2013, the top six countries 
                represented were:
                <br /><br />
                
                <img src="<?php echo base_url().'photos/countries.jpg'; ?>" />
                
                <br /><br />
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With the 
                presence of so many foreign students in our community, 
                there exists a unique opportunity for cross-cultural learning 
                and for building personal ties between Americans and people from
                other nations. Hosting a foreign student can be a very rewarding
                experience, both for the student and the host. Many of our 
                friendships continue to grow even after the student returns 
                home. 
                
                <br /><br />
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The rewards 
                range from expanding your understanding of the world to 
                discovering a new and special friend. The relationships that 
                develop between hosts and foreign students tend to foster a new 
                appreciation for how others live and view the world, and can 
                contribute to achieving a better awareness of cultural 
                differences and similarities.
                
                <br /><br />
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Host Family 
                Program of Clemson Area International Friendship offers the 
                opportunity for community members to become friends with foreign
                students, faculty and visiting scholars to the Clemson, SC area.
                Being a host friend does not require providing home stay. 
                Instead, it involves helping international visitors adjust to 
                the Clemson community by inviting them to share meals, visit in 
                American homes, tour the area, or take part in any number of 
                activities.
                
            </div>
        
        	<div class="well-small span4">
                <ul class="nav nav-list">
                    <li class="nav-header">Host And Student Info</li>
                    <li><h4><a class="btn btn-warning" href="<?php echo base_url().'host/host_form'; ?>">Community Member Form</a></h4></li>
                    <li><h4><a class="btn btn-warning" href="<?php echo base_url().'host/stu_form'; ?>">Student Form</a></h4></li>
                    <hr />
                    <li><h5><a href="<?php echo base_url().'host/stu_guide'; ?>">Guidelines For Students</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'host/host_guide'; ?>">Guidelines For Community Members</a></h5> 
                    	<ul style="color:#F60;">
                        	<li><a style="color:#F60;" href="<?php echo base_url().'host/activity_ideas'; ?>">Activity Ideas</a></li> 
                			<li><a style="color:#F60;" href="<?php echo base_url().'host/conversation_starters'; ?>">Conversation Starters</a></li>
                            <li><a style="color:#F60;" href="<?php echo base_url().'host/what_to_serve'; ?>">What To Serve</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
           	<div class="well span4">
        		<h4>Activities</h4>
                <hr />
                
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAIF plans 
                several organizational-wide activities throughout the
                year including:
                <br /><br />
                <ul style="list-style:none;">
                    <?php $stack = array('Conversational English'); $i=0; if(isset($events)){ foreach($events as $event): if($i>3){break;} ?>
                    	<?php if(strtotime($event['date']) >= time()): ?>
                    		<?php 	// don't display duplicate events 
								if(!in_array($event['title'], $stack)):
									array_push($stack, $event['title']);
							?>
                            		<li><h4><?php $i++; echo '<a href="'.base_url().'events/show_event/'.$event['id'].'">'.$event['title'].'</a>'; ?></h4></li>
                                <?php endif; ?>
                    	<?php endif; ?>
					<?php endforeach; } ?>
                </ul>
                
           	</div>
        
        </div>
        
        <br /><br />
    
</div>
</body>
</html>