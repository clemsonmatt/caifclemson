<html>
<head>
<script type="text/javascript">
$(document).ready(function(){	
	$('.carousel').carousel({
		interval: 4000	
	})
	$('.carousel').carousel('cycle');
});
</script>
</head>
<body>
<div class="container">
	<div style="opacity:none;">
        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item"><img src="<?php echo base_url().'photos/welcome_pic1.jpg'; ?>" /></div>
                <div class="item"><a target="_blank" href="https://www.facebook.com/caif.clemson?fref=ts"><img src="<?php echo base_url().'photos/welcome_pic2.jpg'; ?>" /></a></div>
                <div class="item"><a href="<?php echo base_url().'events/eng_class'; ?>"><img src="<?php echo base_url().'photos/welcome_pic3.jpg'; ?>" /></a></div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
    

    <center> 
    
    <div class="row-fluid">
    	
    	<div class="span3" style="margin-left:110px;">
        	<h2>Testimonials</h2>
            What are people saying?
            <br /><br />
            <a class="btn" href="<?php echo base_url().'host/testimonials'; ?>">View details &raquo;</a>
        </div>
        <div class="span3">
        	<h2>Officers</h2>
            Meet Your CAIF Officers
            <br /><br />
			<a class="btn" href="<?php echo base_url().'host/officers'; ?>">View details &raquo;</a>
        </div>
        <div class="span3">
        	<h2>Contact Us</h2>
            How can I get more info?
            <br /><br />
            <a class="btn" href="<?php echo base_url().'host/contact_us'; ?>">View details &raquo;</a>
        </div>
        
    </div>
    </center>
    
    <br /><br />
    
    <div class="row-fluid">
        <div class="well span7">               
            <h4>About Us</h4>
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clemson Area International Friendship (CAIF) was chartered in December 1982 for the purpose of coordinating hospitality and support services for foreign students, scholars, and visiting faculty in the Clemson, SC area.  Each year, Clemson University welcomes approximately 600 NEW internationals to its campus. At any given time, there are between 1400-1500 internationals studying at Clemson University, representing 80-90 different countries.
            <br /><br />
                
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Host Friend program offers the opportunity for community members to become friends with internationals and in doing so,  helps promote a better understanding among different cultures in today's internationally oriented world.  CAIF is not a home-stay program, but rather involves helping foreign visitors adjust to the Clemson community by inviting them to share meals, visit in your home, tour the area, or take part in any number of activities.
            <br /><br />
            
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clemson Area International Friendship is a community organization, not directly affiliated with Clemson University or any religious institution.  We do, however partner closely with international student organizations on campus as well as campus ministries, local churches, civic organizations and individuals who are interested in and concerned for the foreign visitors in our community.. 
            
        </div>
        <div class="well span5">
            <a href="<?php echo base_url().'host/host_form'; ?>"><h4>Get Involved with CAIF</h4></a>
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAIF is always looking for friendly community members who are truly interested in our international students and visitors.  Most members 
            wish to be involved by serving as a host partner, however others may choose to be involved by helping with ladies' luncheons, apartment events, conversational English classes, 
            transportation to outings, and a variety of other activities.  Please fill out the Community Member Form or Contact Us for more information.	
        </div>
        <div class="well span5">
        	<a href="<?php echo base_url().'host/stu_form'; ?>"><h4>Student Participation</h4></a>
            <hr />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please visit our Events & Services to learn about upcoming events which may be of interest to you.  To sign up for a host family, 
            complete the Student Form.
        </div>
    </div>
        
    
 	<?php //include 'buttons.php'; ?> 
    
    
    <?php //<a href="http://maps.google.com/?@34.6833,82.8375">Google Maps</a> ?>
        
</div>
</body>
</html>