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
    		<h4>What To Serve - Meal Tips</h4>
        	<hr />
            Meals are a key part of most cultures.  Families and friends visit and interact around meals at home, eating out, having coffee or snacks together, or picnics.  Inviting your 
            international friend for a meal is a wonderful way to strengthen your relationship.  As you become more acquainted with your new friends, you'll learn the types of foods they like and 
            dislike, and also their favorites.  
        </div>
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
            </ul>
        </div>
    </div><!-- row-fluid -->
    <div class="row-fluid">
    	<div class="well span6">
        	<h4>What Will I Serve to my New Friends?</h4>
            <hr />
            In general, chicken, rice, fish, fruit, and cooked vegetables are good choices to include in a meal.  The following are some basic meal guidelines:
            <br /><br />
            <ul>
                <li>Rice is a staple food in many cultures.</li> 
                <li>Vegetables and fruit-- fresh, canned, or frozen--are generally accepted (with the exception of tossed salad for Asians)</li>
                <li>Chicken is usually a safe choice, especially served with rice.</li>
                <li>Fish, seafood and lamb may be acceptable alternatives for those who don't eat beef or pork.</li>
                <li>Believe it or not, the American Southern favorite, "deviled eggs", is usually well-liked by most interationals.</li>
                <li>Many internationals do not share the American affinity for sweets.  They may prefer simple fruit desserts or ice cream to rich or heavy pastries.  But by all means, make sure your new friends experience a HOT Krispy Kreme donut before they leave the South!</li>
                <li>Most internationals are unfamiliar with our "southern sweet tea".  Serving unsweet hot black or green tea is often appreciated either with a meal or afterwards.</li>
                <li>You should ask your guest if he/she prefers ice in his/her beverage.  Many do not like iced beverages.</li>
                <li>Fruit juices are often enjoyed as meal beverages.</li>
                <li>Having pita bread or flour tortillas available for Indian students is a good idea.  They are sometimes more comfortable eating a meal with this type of bread as their "utensil".</li>
            </ul>
        </div>
        <div class="well span6">
        	<?php if($admin==1): ?>
        		<a href="<?php echo base_url().'host/add_recipe'; ?>" style="float:right;"><button class="btn btn-success">Add Recipe</button></a>
        	<?php endif; ?>
            <h4>Recipe Ideas:</h4>
            <hr />
            <ul>
            	<?php $i=1; if(isset($recipes)){ foreach($recipes as $recipe): ?>
                	<li><a onmouseover="" style="cursor: pointer;" target="<?php echo $i; ?>" class="show_recipe"><?php echo $recipe['title']; ?></a>
                    	<div class="hide" id="recipe<?php echo $i; ?>" style="display:none;">
                        	<?php if($admin==1){ echo '<br /><a href="'.base_url().'host/edit_recipe/'.$recipe['id'].'"><button class="btn">Edit Recipe</button></a>'; } ?>
                        	<table class="table table-striped">
                            	<thead>
                                	<th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                            <?php if($recipe['description']!=NULL): ?>
                            	<tr>
                            		<td>Description</td>
									<td><?php echo nl2br($recipe['description']); ?></td>
                            	</tr>
							<?php endif; ?>
                            <?php if($recipe['url']!=NULL): ?>
                            	<tr>
                                	<td>URL</td>
                            		<td><a style="color:#F60;" href="<?php echo $recipe['url']; ?>"><?php echo $recipe['url']; ?></a></td>
                                </tr>
                            <?php endif; ?>
                            <?php if($recipe['ingredients']!=NULL): ?>
                            	<tr>
                                	<td>Ingredients</td>
                            		<td><?php echo nl2br($recipe['ingredients']); ?></td>
                                </tr>
                            <?php endif; ?>
                            <?php if($recipe['instructions']!=NULL): ?>
                            	<tr>
                                	<td>Instructions</td>
                            		<td><?php echo nl2br($recipe['instructions']); ?></td>
                                </tr>
                            <?php endif; ?>
                            	</tbody>
                            </table>
                        </div>
                    </li>
                <?php $i++; endforeach; } ?>
            </ul>
        </div>
        <div class="well span6">
        	<h4>What About Eating Out Together?</h4>
            <hr />
            Some safe bets in the Clemson area to find food that your international student may enjoy include (but not limited to):
            <br /><br />
            <ul style="float:right; padding-right:100px;">
            	<li>Asian Delight</li>
                <li>Thai Spice</li>
                <li>Friends Cafe</li>
            </ul>
            <ul>
                <li>Osaka Express</li>
                <li>Tokyo's</li>
                <li>Hibachi Grill Buffet</li>
                <li>House of Leung</li>
            </ul>
        </div>
    </div><!-- row-fluid -->
    <div class="row-fluid">
    	<div class="well span6">
        	<h4>What About Dietary Restrictions?</h4>
            <hr />
            Some internationals you meet may have certain dietary restrictions.  These may be religious, cultural, or individual practices or preferences.  The following general guidelines are generalizations.  When in doubt, ask!
            <br /><br />
            <ul>
            	<li>Some Hindus and Buddhists  are strict vegetarians.  They eat no meat, fish, poultry, eggs, or dishes containing any of these foods.  Others may eat chicken and/or eggs. Again, when in doubt, ask.</li>
                <li>Muslims and most Jews do not eat pork of any kind.</li>
                <li>Most Muslims refrain from alcohol.</li>
                <li>Typically, most internationals do not care for chopped and/or processed meats and unfamiliar mixed dishes such as casseroles.</li>
                <li>Many Asians do not care for raw vegetables (including  tossed salads) and they are unfamiliar with cheeses and pastas.</li>
            </ul>
        </div>
        <div class="well span6">
        	<h4>A Few Other Pointers</h4>
            <hr />
            Additionally, you should be aware that in some cultures (like China), it is customary to refuse offers of food several times before accepting.  You can politely tell your friend that in America, when someone invites you over for a meal, you may feel free to eat right away.  It would also be courteous of you to provide chopsticks for east Asian friends.  Remember that acceptable table manners aren't always cross-cultural.  For instance, in some countries, to "smack" your food while chewing is a compliment to the cook.   Please do not stress out about what to serve.  Enjoy your meal together, ask lots of questions and let the time around the family table be a great bridge builder!
        </div>
    </div><!-- row-fluid -->
</div>
<script type="text/javascript">
jQuery(function(){
	jQuery('.show_recipe').click(function(){
    	jQuery('.hide').hide();
        jQuery('#recipe'+$(this).attr('target')).show();
    });
});
</script>
</body>
</html>