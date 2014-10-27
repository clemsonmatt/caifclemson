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
            	<?php if($admin==1){ ?>
                <ul class="nav nav-list">
                    <li class="nav-header">Latest News</li>
                    <li><h5><a href="<?php echo base_url().'manage'; ?>">Manage Home</a></h5></li> 
                    <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                	<li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li>
                    <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li> 
                	<li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Events</a></h5></li>
                	<li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
                </ul>
                <?php }else{ ?>
                <ul class="nav nav-list">
                    <li class="nav-header">Manage Profile</li>
                    <li><h5><a href="<?php echo base_url().'profile'; ?>">My Profile</a></h5></li>
                </ul>
                <?php } ?>
            </div>
        </div><!-- span3 -->
        <div class="well span9">
        	<h3>Host Information</h3>
            <?php if($admin==1): ?>	
                <a href="<?php echo base_url().'manage/edit_host/'.$host_info[0]['id']; ?>"><button class="btn">Edit Host</button></a>
            <?php endif; ?>
            <hr />
            <?php if($host_info[0]['pic']!=NULL): ?>
            	<img src="<?php echo base_url().'/photos/'.$host_info[0]['pic']; ?>" style="max-width:400px; max-height:400px;"></img>
        	<?php endif; ?>
            <?php if($admin==1): ?>
            	<legend><h4>Login Information</h4></legend>
                <table class="table table-striped">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td>Username</td>
                            <td><?php echo $host_info[0]['username']; ?></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                            <td><?php echo $pass[0]['password']; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
            <legend><h4>Personal Information</h4></legend>
            <table class="table table-striped">
            	<thead>
                	<th>Description</th>
                    <th>Response</th>
                </thead>
                <tbody>
                	<tr>
                		<td>Name</td>
                    	<td><?php echo $host_info[0]['name']; ?></td>
                    </tr>
                    <tr>
                		<td>Address</td>
                    	<td><?php echo $host_info[0]['address']; ?></td>
                    </tr>
                    <tr>
                		<td>City</td>
                    	<td><?php echo $host_info[0]['city']; ?></td>
                    </tr>
                    <tr>
                		<td>State</td>
                    	<td><?php echo $host_info[0]['state']; ?></td>
                    </tr>
                    <tr>
                		<td>Postal/Zip Code</td>
                    	<td><?php echo $host_info[0]['zip']; ?></td>
                    </tr>
                    <tr>
                		<td>Mobile Phone</td>
                    	<td><?php echo $host_info[0]['mobile_phone']; ?></td>
                    </tr>
                    <tr>
                		<td>Home Phone</td>
                    	<td><?php echo $host_info[0]['home_phone']; ?></td>
                    </tr>
                    <tr>
                		<td>Work Phone</td>
                    	<td><?php echo $host_info[0]['work_phone']; ?></td>
                    </tr>
                    <tr>
                		<td>Email</td>
                    	<td><?php echo $host_info[0]['email']; ?></td>
                    </tr>
                    <tr>
                		<td>Children</td>
                    	<td>
							<?php 
								if($host_info[0]['no_child']=='1')
									echo 'No Children <br />';
								if($host_info[0]['sm_child']=='1')
									echo 'Small children in the home <br />';
								if($host_info[0]['tn_child']=='1')
									echo 'Teenage children at home <br />';
								if($host_info[0]['cl_child']=='1')
									echo 'College age children <br />';
								if($host_info[0]['gr_child']=='1')
									echo 'They are grown and do not live with us now <br />';
							?>                            
                        </td>
                    </tr>
                    <tr>
                		<td>Pets</td>
                    	<td>
							<?php 
								if($host_info[0]['pet']=='no_pet')
									echo 'No Pets';
								else if($host_info[0]['pet']=='in_pet')
									echo 'Yes, inside only';
								else if($host_info[0]['pet']=='out_pet')
									echo 'Yes, outside only';
								else if($host_info[0]['pet']=='both_pet')
									echo 'Yes, both inside and outside';
							?>                            
                        </td>
                    </tr>
                    <tr>
                		<td>If yes, what kind</td>
                    	<td><?php echo $host_info[0]['pet_type']; ?></td>
                    </tr>
                    <tr>
                		<td>Hobbies</td>
                    	<td><?php echo $host_info[0]['hobbies']; ?></td>
                    </tr>
                    <tr>
                		<td>Places Traveled</td>
                    	<td><?php echo $host_info[0]['travel']; ?></td>
                    </tr>
                    <tr>
                		<td>Languages</td>
                    	<td><?php echo $host_info[0]['languages']; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php if($admin==1): ?>
            <br />
            <legend><h4>Host Friend Program</h4></legend>
            <table class="table table-striped">
            	<thead>
                	<th>Description</th>
                    <th>Response</th>
                </thead>
                <tbody>
                    <tr>
                    	<td>Host Family</td>
                        <td>
                        	<?php if($host_info[0]['host_option']==1){ echo 'Yes'; } else{ echo 'No'; } ?>
                        </td>
                    </tr>
                    <?php if($host_info[0]['host_option']==1): ?>
                    	<tr>
                            <td>Number of students to host</td>
                            <td><?php echo $host_info[0]['students']; ?></td>
                        </tr>
                        <tr>
                            <td>Student Country Preference</td>
                            <td>
								<ul class="span12" name="country" style="list-style:none;">
                                   <li style=" <?php if($host_info[0]['country']!=" "){ echo 'display:none;'; } ?>" value=" " selected>(please select a country preference)</li>
                                    <li style=" <?php if($host_info[0]['country']!="any"){ echo 'display:none;'; } ?>" value="any">Any</li>
                                    <li style=" <?php if($host_info[0]['country']!="AF"){ echo 'display:none;'; } ?>" value="AF">Afghanistan</li>
                                    <li style=" <?php if($host_info[0]['country']!="AL"){ echo 'display:none;'; } ?>" value="AL">Albania</li>
                                    <li style=" <?php if($host_info[0]['country']!="DZ"){ echo 'display:none;'; } ?>" value="DZ">Algeria</li>
                                    <li style=" <?php if($host_info[0]['country']!="AS"){ echo 'display:none;'; } ?>" value="AS">American Samoa</li>
                                    <li style=" <?php if($host_info[0]['country']!="AD"){ echo 'display:none;'; } ?>" value="AD">Andorra</li>
                                    <li style=" <?php if($host_info[0]['country']!="AO"){ echo 'display:none;'; } ?>" value="AO">Angola</li>
                                    <li style=" <?php if($host_info[0]['country']!="AI"){ echo 'display:none;'; } ?>" value="AI">Anguilla</li>
                                    <li style=" <?php if($host_info[0]['country']!="AQ"){ echo 'display:none;'; } ?>" value="AQ">Antarctica</li>
                                    <li style=" <?php if($host_info[0]['country']!="AG"){ echo 'display:none;'; } ?>" value="AG">Antigua and Barbuda</li>
                                    <li style=" <?php if($host_info[0]['country']!="AR"){ echo 'display:none;'; } ?>" value="AR">Argentina</li>
                                    <li style=" <?php if($host_info[0]['country']!="AM"){ echo 'display:none;'; } ?>" value="AM">Armenia</li>
                                    <li style=" <?php if($host_info[0]['country']!="AW"){ echo 'display:none;'; } ?>" value="AW">Aruba</li>
                                    <li style=" <?php if($host_info[0]['country']!="AU"){ echo 'display:none;'; } ?>" value="AU">Australia</li>
                                    <li style=" <?php if($host_info[0]['country']!="AT"){ echo 'display:none;'; } ?>" value="AT">Austria</li>
                                    <li style=" <?php if($host_info[0]['country']!="AZ"){ echo 'display:none;'; } ?>" value="AZ">Azerbaijan</li>
                                    <li style=" <?php if($host_info[0]['country']!="BS"){ echo 'display:none;'; } ?>" value="BS">Bahamas</li>
                                    <li style=" <?php if($host_info[0]['country']!="BH"){ echo 'display:none;'; } ?>" value="BH">Bahrain</li>
                                    <li style=" <?php if($host_info[0]['country']!="BD"){ echo 'display:none;'; } ?>" value="BD">Bangladesh</li>
                                    <li style=" <?php if($host_info[0]['country']!="BB"){ echo 'display:none;'; } ?>" value="BB">Barbados</li>
                                    <li style=" <?php if($host_info[0]['country']!="BY"){ echo 'display:none;'; } ?>" value="BY">Belarus</li>
                                    <li style=" <?php if($host_info[0]['country']!="BE"){ echo 'display:none;'; } ?>" value="BE">Belgium</li>
                                    <li style=" <?php if($host_info[0]['country']!="BZ"){ echo 'display:none;'; } ?>" value="BZ">Belize</li>
                                    <li style=" <?php if($host_info[0]['country']!="BJ"){ echo 'display:none;'; } ?>" value="BJ">Benin</li>
                                    <li style=" <?php if($host_info[0]['country']!="BM"){ echo 'display:none;'; } ?>" value="BM">Bermuda</li>
                                    <li style=" <?php if($host_info[0]['country']!="BT"){ echo 'display:none;'; } ?>" value="BT">Bhutan</li>
                                    <li style=" <?php if($host_info[0]['country']!="BO"){ echo 'display:none;'; } ?>" value="BO">Bolivia</li>
                                    <li style=" <?php if($host_info[0]['country']!="BA"){ echo 'display:none;'; } ?>" value="BA">Bosnia and Herzegowina</li>
                                    <li style=" <?php if($host_info[0]['country']!="BW"){ echo 'display:none;'; } ?>" value="BW">Botswana</li>
                                    <li style=" <?php if($host_info[0]['country']!="BV"){ echo 'display:none;'; } ?>" value="BV">Bouvet Island</li>
                                    <li style=" <?php if($host_info[0]['country']!="BR"){ echo 'display:none;'; } ?>" value="BR">Brazil</li>
                                    <li style=" <?php if($host_info[0]['country']!="IO"){ echo 'display:none;'; } ?>" value="IO">British Indian Ocean Territory</li>
                                    <li style=" <?php if($host_info[0]['country']!="BN"){ echo 'display:none;'; } ?>" value="BN">Brunei Darussalam</li>
                                    <li style=" <?php if($host_info[0]['country']!="BG"){ echo 'display:none;'; } ?>" value="BG">Bulgaria</li>
                                    <li style=" <?php if($host_info[0]['country']!="BF"){ echo 'display:none;'; } ?>" value="BF">Burkina Faso</li>
                                    <li style=" <?php if($host_info[0]['country']!="BI"){ echo 'display:none;'; } ?>" value="BI">Burundi</li>
                                    <li style=" <?php if($host_info[0]['country']!="KH"){ echo 'display:none;'; } ?>" value="KH">Cambodia</li>
                                    <li style=" <?php if($host_info[0]['country']!="CM"){ echo 'display:none;'; } ?>" value="CM">Cameroon</li>
                                    <li style=" <?php if($host_info[0]['country']!="CA"){ echo 'display:none;'; } ?>" value="CA">Canada</li>
                                    <li style=" <?php if($host_info[0]['country']!="CV"){ echo 'display:none;'; } ?>" value="CV">Cape Verde</li>
                                    <li style=" <?php if($host_info[0]['country']!="KY"){ echo 'display:none;'; } ?>" value="KY">Cayman Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="CF"){ echo 'display:none;'; } ?>" value="CF">Central African Republic</li>
                                    <li style=" <?php if($host_info[0]['country']!="TD"){ echo 'display:none;'; } ?>" value="TD">Chad</li>
                                    <li style=" <?php if($host_info[0]['country']!="CL"){ echo 'display:none;'; } ?>" value="CL">Chile</li>
                                    <li style=" <?php if($host_info[0]['country']!="CN"){ echo 'display:none;'; } ?>" value="CN">China</li>
                                    <li style=" <?php if($host_info[0]['country']!="CX"){ echo 'display:none;'; } ?>" value="CX">Christmas Island</li>
                                    <li style=" <?php if($host_info[0]['country']!="CC"){ echo 'display:none;'; } ?>" value="CC">Cocos (Keeling) Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="CO"){ echo 'display:none;'; } ?>" value="CO">Colombia</li>
                                    <li style=" <?php if($host_info[0]['country']!="KM"){ echo 'display:none;'; } ?>" value="KM">Comoros</li>
                                    <li style=" <?php if($host_info[0]['country']!="CG"){ echo 'display:none;'; } ?>" value="CG">Congo</li>
                                    <li style=" <?php if($host_info[0]['country']!="CD"){ echo 'display:none;'; } ?>" value="CD">Congo, the Democratic Republic of the</li>
                                    <li style=" <?php if($host_info[0]['country']!="CK"){ echo 'display:none;'; } ?>" value="CK">Cook Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="CR"){ echo 'display:none;'; } ?>" value="CR">Costa Rica</li>
                                    <li style=" <?php if($host_info[0]['country']!="CI"){ echo 'display:none;'; } ?>" value="CI">Cote d'Ivoire</li>
                                    <li style=" <?php if($host_info[0]['country']!="HR"){ echo 'display:none;'; } ?>" value="HR">Croatia (Hrvatska)</li>
                                    <li style=" <?php if($host_info[0]['country']!="CU"){ echo 'display:none;'; } ?>" value="CU">Cuba</li>
                                    <li style=" <?php if($host_info[0]['country']!="CY"){ echo 'display:none;'; } ?>" value="CY">Cyprus</li>
                                    <li style=" <?php if($host_info[0]['country']!="CZ"){ echo 'display:none;'; } ?>" value="CZ">Czech Republic</li>
                                    <li style=" <?php if($host_info[0]['country']!="DK"){ echo 'display:none;'; } ?>" value="DK">Denmark</li>
                                    <li style=" <?php if($host_info[0]['country']!="DJ"){ echo 'display:none;'; } ?>" value="DJ">Djibouti</li>
                                    <li style=" <?php if($host_info[0]['country']!="DM"){ echo 'display:none;'; } ?>" value="DM">Dominica</li>
                                    <li style=" <?php if($host_info[0]['country']!="DO"){ echo 'display:none;'; } ?>" value="DO">Dominican Republic</li>
                                    <li style=" <?php if($host_info[0]['country']!="TP"){ echo 'display:none;'; } ?>" value="TP">East Timor</li>
                                    <li style=" <?php if($host_info[0]['country']!="EC"){ echo 'display:none;'; } ?>" value="EC">Ecuador</li>
                                    <li style=" <?php if($host_info[0]['country']!="EG"){ echo 'display:none;'; } ?>" value="EG">Egypt</li>
                                    <li style=" <?php if($host_info[0]['country']!="SV"){ echo 'display:none;'; } ?>" value="SV">El Salvador</li>
                                    <li style=" <?php if($host_info[0]['country']!="GQ"){ echo 'display:none;'; } ?>" value="GQ">Equatorial Guinea</li>
                                    <li style=" <?php if($host_info[0]['country']!="ER"){ echo 'display:none;'; } ?>" value="ER">Eritrea</li>
                                    <li style=" <?php if($host_info[0]['country']!="EE"){ echo 'display:none;'; } ?>" value="EE">Estonia</li>
                                    <li style=" <?php if($host_info[0]['country']!="ET"){ echo 'display:none;'; } ?>" value="ET">Ethiopia</li>
                                    <li style=" <?php if($host_info[0]['country']!="FK"){ echo 'display:none;'; } ?>" value="FK">Falkland Islands (Malvinas)</li>
                                    <li style=" <?php if($host_info[0]['country']!="FO"){ echo 'display:none;'; } ?>" value="FO">Faroe Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="FJ"){ echo 'display:none;'; } ?>" value="FJ">Fiji</li>
                                    <li style=" <?php if($host_info[0]['country']!="FI"){ echo 'display:none;'; } ?>" value="FI">Finland</li>
                                    <li style=" <?php if($host_info[0]['country']!="FR"){ echo 'display:none;'; } ?>" value="FR">France</li>
                                    <li style=" <?php if($host_info[0]['country']!="FX"){ echo 'display:none;'; } ?>" value="FX">France, Metropolitan</li>
                                    <li style=" <?php if($host_info[0]['country']!="GF"){ echo 'display:none;'; } ?>" value="GF">French Guiana</li>
                                    <li style=" <?php if($host_info[0]['country']!="PF"){ echo 'display:none;'; } ?>" value="PF">French Polynesia</li>
                                    <li style=" <?php if($host_info[0]['country']!="TF"){ echo 'display:none;'; } ?>" value="TF">French Southern Territories</li>
                                    <li style=" <?php if($host_info[0]['country']!="GA"){ echo 'display:none;'; } ?>" value="GA">Gabon</li>
                                    <li style=" <?php if($host_info[0]['country']!="GM"){ echo 'display:none;'; } ?>" value="GM">Gambia</li>
                                    <li style=" <?php if($host_info[0]['country']!="GE"){ echo 'display:none;'; } ?>" value="GE">Georgia</li>
                                    <li style=" <?php if($host_info[0]['country']!="DE"){ echo 'display:none;'; } ?>" value="DE">Germany</li>
                                    <li style=" <?php if($host_info[0]['country']!="GH"){ echo 'display:none;'; } ?>" value="GH">Ghana</li>
                                    <li style=" <?php if($host_info[0]['country']!="GI"){ echo 'display:none;'; } ?>" value="GI">Gibraltar</li>
                                    <li style=" <?php if($host_info[0]['country']!="GR"){ echo 'display:none;'; } ?>" value="GR">Greece</li>
                                    <li style=" <?php if($host_info[0]['country']!="GL"){ echo 'display:none;'; } ?>" value="GL">Greenland</li>
                                    <li style=" <?php if($host_info[0]['country']!="GD"){ echo 'display:none;'; } ?>" value="GD">Grenada</li>
                                    <li style=" <?php if($host_info[0]['country']!="GP"){ echo 'display:none;'; } ?>" value="GP">Guadeloupe</li>
                                    <li style=" <?php if($host_info[0]['country']!="GU"){ echo 'display:none;'; } ?>" value="GU">Guam</li>
                                    <li style=" <?php if($host_info[0]['country']!="GT"){ echo 'display:none;'; } ?>" value="GT">Guatemala</li>
                                    <li style=" <?php if($host_info[0]['country']!="GN"){ echo 'display:none;'; } ?>" value="GN">Guinea</li>
                                    <li style=" <?php if($host_info[0]['country']!="GW"){ echo 'display:none;'; } ?>" value="GW">Guinea-Bissau</li>
                                    <li style=" <?php if($host_info[0]['country']!="GY"){ echo 'display:none;'; } ?>" value="GY">Guyana</li>
                                    <li style=" <?php if($host_info[0]['country']!="HT"){ echo 'display:none;'; } ?>" value="HT">Haiti</li>
                                    <li style=" <?php if($host_info[0]['country']!="HM"){ echo 'display:none;'; } ?>" value="HM">Heard and Mc Donald Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="VA"){ echo 'display:none;'; } ?>" value="VA">Holy See (Vatican City State)</li>
                                    <li style=" <?php if($host_info[0]['country']!="HN"){ echo 'display:none;'; } ?>" value="HN">Honduras</li>
                                    <li style=" <?php if($host_info[0]['country']!="HK"){ echo 'display:none;'; } ?>" value="HK">Hong Kong</li>
                                    <li style=" <?php if($host_info[0]['country']!="HU"){ echo 'display:none;'; } ?>" value="HU">Hungary</li>
                                    <li style=" <?php if($host_info[0]['country']!="IS"){ echo 'display:none;'; } ?>" value="IS">Iceland</li>
                                    <li style=" <?php if($host_info[0]['country']!="IN"){ echo 'display:none;'; } ?>" value="IN">India</li>
                                    <li style=" <?php if($host_info[0]['country']!="ID"){ echo 'display:none;'; } ?>" value="ID">Indonesia</li>
                                    <li style=" <?php if($host_info[0]['country']!="IR"){ echo 'display:none;'; } ?>" value="IR">Iran (Islamic Republic of)</li>
                                    <li style=" <?php if($host_info[0]['country']!="IQ"){ echo 'display:none;'; } ?>" value="IQ">Iraq</li>
                                    <li style=" <?php if($host_info[0]['country']!="IE"){ echo 'display:none;'; } ?>" value="IE">Ireland</li>
                                    <li style=" <?php if($host_info[0]['country']!="IL"){ echo 'display:none;'; } ?>" value="IL">Israel</li>
                                    <li style=" <?php if($host_info[0]['country']!="IT"){ echo 'display:none;'; } ?>" value="IT">Italy</li>
                                    <li style=" <?php if($host_info[0]['country']!="JM"){ echo 'display:none;'; } ?>" value="JM">Jamaica</li>
                                    <li style=" <?php if($host_info[0]['country']!="JP"){ echo 'display:none;'; } ?>" value="JP">Japan</li>
                                    <li style=" <?php if($host_info[0]['country']!="JO"){ echo 'display:none;'; } ?>" value="JO">Jordan</li>
                                    <li style=" <?php if($host_info[0]['country']!="KZ"){ echo 'display:none;'; } ?>" value="KZ">Kazakhstan</li>
                                    <li style=" <?php if($host_info[0]['country']!="KE"){ echo 'display:none;'; } ?>" value="KE">Kenya</li>
                                    <li style=" <?php if($host_info[0]['country']!="KI"){ echo 'display:none;'; } ?>" value="KI">Kiribati</li>
                                    <li style=" <?php if($host_info[0]['country']!="KP"){ echo 'display:none;'; } ?>" value="KP">Korea, Democratic People's Republic of</li>
                                    <li style=" <?php if($host_info[0]['country']!="KR"){ echo 'display:none;'; } ?>" value="KR">Korea, Republic of</li>
                                    <li style=" <?php if($host_info[0]['country']!="KW"){ echo 'display:none;'; } ?>" value="KW">Kuwait</li>
                                    <li style=" <?php if($host_info[0]['country']!="KG"){ echo 'display:none;'; } ?>" value="KG">Kyrgyzstan</li>
                                    <li style=" <?php if($host_info[0]['country']!="LA"){ echo 'display:none;'; } ?>" value="LA">Lao People's Democratic Republic</li>
                                    <li style=" <?php if($host_info[0]['country']!="LV"){ echo 'display:none;'; } ?>" value="LV">Latvia</li>
                                    <li style=" <?php if($host_info[0]['country']!="LB"){ echo 'display:none;'; } ?>" value="LB">Lebanon</li>
                                    <li style=" <?php if($host_info[0]['country']!="LS "){ echo 'display:none;'; } ?>" value="LS">Lesotho</li>
                                    <li style=" <?php if($host_info[0]['country']!="LR"){ echo 'display:none;'; } ?>" value="LR">Liberia</li>
                                    <li style=" <?php if($host_info[0]['country']!="LY"){ echo 'display:none;'; } ?>" value="LY">Libyan Arab Jamahiriya</li>
                                    <li style=" <?php if($host_info[0]['country']!="LI"){ echo 'display:none;'; } ?>" value="LI">Liechtenstein</li>
                                    <li style=" <?php if($host_info[0]['country']!="LT"){ echo 'display:none;'; } ?>" value="LT">Lithuania</li>
                                    <li style=" <?php if($host_info[0]['country']!="LU"){ echo 'display:none;'; } ?>" value="LU">Luxembourg</li>
                                    <li style=" <?php if($host_info[0]['country']!="MO"){ echo 'display:none;'; } ?>" value="MO">Macau</li>
                                    <li style=" <?php if($host_info[0]['country']!="MK"){ echo 'display:none;'; } ?>" value="MK">Macedonia, The Former Yugoslav Republic of</li>
                                    <li style=" <?php if($host_info[0]['country']!="MG"){ echo 'display:none;'; } ?>" value="MG">Madagascar</li>
                                    <li style=" <?php if($host_info[0]['country']!="MW"){ echo 'display:none;'; } ?>" value="MW">Malawi</li>
                                    <li style=" <?php if($host_info[0]['country']!="MY"){ echo 'display:none;'; } ?>" value="MY">Malaysia</li>
                                    <li style=" <?php if($host_info[0]['country']!="MV"){ echo 'display:none;'; } ?>" value="MV">Maldives</li>
                                    <li style=" <?php if($host_info[0]['country']!="ML"){ echo 'display:none;'; } ?>" value="ML">Mali</li>
                                    <li style=" <?php if($host_info[0]['country']!="MT"){ echo 'display:none;'; } ?>" value="MT">Malta</li>
                                    <li style=" <?php if($host_info[0]['country']!="MH"){ echo 'display:none;'; } ?>" value="MH">Marshall Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="MQ"){ echo 'display:none;'; } ?>" value="MQ">Martinique</li>
                                    <li style=" <?php if($host_info[0]['country']!="MR"){ echo 'display:none;'; } ?>" value="MR">Mauritania</li>
                                    <li style=" <?php if($host_info[0]['country']!="MU"){ echo 'display:none;'; } ?>" value="MU">Mauritius</li>
                                    <li style=" <?php if($host_info[0]['country']!="YT"){ echo 'display:none;'; } ?>" value="YT">Mayotte</li>
                                    <li style=" <?php if($host_info[0]['country']!="MX"){ echo 'display:none;'; } ?>" value="MX">Mexico</li>
                                    <li style=" <?php if($host_info[0]['country']!="FM"){ echo 'display:none;'; } ?>" value="FM">Micronesia, Federated States of</li>
                                    <li style=" <?php if($host_info[0]['country']!="MD"){ echo 'display:none;'; } ?>" value="MD">Moldova, Republic of</li>
                                    <li style=" <?php if($host_info[0]['country']!="MC"){ echo 'display:none;'; } ?>" value="MC">Monaco</li>
                                    <li style=" <?php if($host_info[0]['country']!="MN"){ echo 'display:none;'; } ?>" value="MN">Mongolia</li>
                                    <li style=" <?php if($host_info[0]['country']!="MS"){ echo 'display:none;'; } ?>" value="MS">Montserrat</li>
                                    <li style=" <?php if($host_info[0]['country']!="MA"){ echo 'display:none;'; } ?>" value="MA">Morocco</li>
                                    <li style=" <?php if($host_info[0]['country']!="MZ"){ echo 'display:none;'; } ?>" value="MZ">Mozambique</li>
                                    <li style=" <?php if($host_info[0]['country']!="MM"){ echo 'display:none;'; } ?>" value="MM">Myanmar</li>
                                    <li style=" <?php if($host_info[0]['country']!="NA"){ echo 'display:none;'; } ?>" value="NA">Namibia</li>
                                    <li style=" <?php if($host_info[0]['country']!="NR"){ echo 'display:none;'; } ?>" value="NR">Nauru</li>
                                    <li style=" <?php if($host_info[0]['country']!="NP"){ echo 'display:none;'; } ?>" value="NP">Nepal</li>
                                    <li style=" <?php if($host_info[0]['country']!="NL"){ echo 'display:none;'; } ?>" value="NL">Netherlands</li>
                                    <li style=" <?php if($host_info[0]['country']!="AN"){ echo 'display:none;'; } ?>" value="AN">Netherlands Antilles</li>
                                    <li style=" <?php if($host_info[0]['country']!="NC"){ echo 'display:none;'; } ?>" value="NC">New Caledonia</li>
                                    <li style=" <?php if($host_info[0]['country']!="NZ"){ echo 'display:none;'; } ?>" value="NZ">New Zealand</li>
                                    <li style=" <?php if($host_info[0]['country']!="NI"){ echo 'display:none;'; } ?>" value="NI">Nicaragua</li>
                                    <li style=" <?php if($host_info[0]['country']!="NE"){ echo 'display:none;'; } ?>" value="NE">Niger</li>
                                    <li style=" <?php if($host_info[0]['country']!="NG"){ echo 'display:none;'; } ?>" value="NG">Nigeria</li>
                                    <li style=" <?php if($host_info[0]['country']!="NU"){ echo 'display:none;'; } ?>" value="NU">Niue</li>
                                    <li style=" <?php if($host_info[0]['country']!="NF"){ echo 'display:none;'; } ?>" value="NF">Norfolk Island</li>
                                    <li style=" <?php if($host_info[0]['country']!="MP"){ echo 'display:none;'; } ?>" value="MP">Northern Mariana Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="NO"){ echo 'display:none;'; } ?>" value="NO">Norway</li>
                                    <li style=" <?php if($host_info[0]['country']!="OM"){ echo 'display:none;'; } ?>" value="OM">Oman</li>
                                    <li style=" <?php if($host_info[0]['country']!="PK"){ echo 'display:none;'; } ?>" value="PK">Pakistan</li>
                                    <li style=" <?php if($host_info[0]['country']!="PW"){ echo 'display:none;'; } ?>" value="PW">Palau</li>
                                    <li style=" <?php if($host_info[0]['country']!="PA"){ echo 'display:none;'; } ?>" value="PA">Panama</li>
                                    <li style=" <?php if($host_info[0]['country']!="PG"){ echo 'display:none;'; } ?>" value="PG">Papua New Guinea</li>
                                    <li style=" <?php if($host_info[0]['country']!="PY"){ echo 'display:none;'; } ?>" value="PY">Paraguay</li>
                                    <li style=" <?php if($host_info[0]['country']!="PE"){ echo 'display:none;'; } ?>" value="PE">Peru</li>
                                    <li style=" <?php if($host_info[0]['country']!="PH"){ echo 'display:none;'; } ?>" value="PH">Philippines</li>
                                    <li style=" <?php if($host_info[0]['country']!="PN"){ echo 'display:none;'; } ?>" value="PN">Pitcairn</li>
                                    <li style=" <?php if($host_info[0]['country']!="PL"){ echo 'display:none;'; } ?>" value="PL">Poland</li>
                                    <li style=" <?php if($host_info[0]['country']!="PT"){ echo 'display:none;'; } ?>" value="PT">Portugal</li>
                                    <li style=" <?php if($host_info[0]['country']!="PR"){ echo 'display:none;'; } ?>" value="PR">Puerto Rico</li>
                                    <li style=" <?php if($host_info[0]['country']!="QA"){ echo 'display:none;'; } ?>" value="QA">Qatar</li>
                                    <li style=" <?php if($host_info[0]['country']!="RE"){ echo 'display:none;'; } ?>" value="RE">Reunion</li>
                                    <li style=" <?php if($host_info[0]['country']!="RO"){ echo 'display:none;'; } ?>" value="RO">Romania</li>
                                    <li style=" <?php if($host_info[0]['country']!="RU"){ echo 'display:none;'; } ?>" value="RU">Russian Federation</li>
                                    <li style=" <?php if($host_info[0]['country']!="RW"){ echo 'display:none;'; } ?>" value="RW">Rwanda</li>
                                    <li style=" <?php if($host_info[0]['country']!="KN"){ echo 'display:none;'; } ?>" value="KN">Saint Kitts and Nevis</li>
                                    <li style=" <?php if($host_info[0]['country']!="LC"){ echo 'display:none;'; } ?>" value="LC">Saint LUCIA</li>
                                    <li style=" <?php if($host_info[0]['country']!="VC"){ echo 'display:none;'; } ?>" value="VC">Saint Vincent and the Grenadines</li>
                                    <li style=" <?php if($host_info[0]['country']!="WS"){ echo 'display:none;'; } ?>" value="WS">Samoa</li>
                                    <li style=" <?php if($host_info[0]['country']!="SM"){ echo 'display:none;'; } ?>" value="SM">San Marino</li>
                                    <li style=" <?php if($host_info[0]['country']!="ST"){ echo 'display:none;'; } ?>" value="ST">Sao Tome and Principe</li>
                                    <li style=" <?php if($host_info[0]['country']!="SA"){ echo 'display:none;'; } ?>" value="SA">Saudi Arabia</li>
                                    <li style=" <?php if($host_info[0]['country']!="SN"){ echo 'display:none;'; } ?>" value="SN">Senegal</li>
                                    <li style=" <?php if($host_info[0]['country']!="SC"){ echo 'display:none;'; } ?>" value="SC">Seychelles</li>
                                    <li style=" <?php if($host_info[0]['country']!="SL"){ echo 'display:none;'; } ?>" value="SL">Sierra Leone</li>
                                    <li style=" <?php if($host_info[0]['country']!="SG"){ echo 'display:none;'; } ?>" value="SG">Singapore</li>
                                    <li style=" <?php if($host_info[0]['country']!="SK"){ echo 'display:none;'; } ?>" value="SK">Slovakia (Slovak Republic)</li>
                                    <li style=" <?php if($host_info[0]['country']!="SI"){ echo 'display:none;'; } ?>" value="SI">Slovenia</li>
                                    <li style=" <?php if($host_info[0]['country']!="SB"){ echo 'display:none;'; } ?>" value="SB">Solomon Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="SO"){ echo 'display:none;'; } ?>" value="SO">Somalia</li>
                                    <li style=" <?php if($host_info[0]['country']!="ZA"){ echo 'display:none;'; } ?>" value="ZA">South Africa</li>
                                    <li style=" <?php if($host_info[0]['country']!="GS"){ echo 'display:none;'; } ?>" value="GS">South Georgia and the South Sandwich Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="ES"){ echo 'display:none;'; } ?>" value="ES">Spain</li>
                                    <li style=" <?php if($host_info[0]['country']!="LK"){ echo 'display:none;'; } ?>" value="LK">Sri Lanka</li>
                                    <li style=" <?php if($host_info[0]['country']!="SH"){ echo 'display:none;'; } ?>" value="SH">St. Helena</li>
                                    <li style=" <?php if($host_info[0]['country']!="PM"){ echo 'display:none;'; } ?>" value="PM">St. Pierre and Miquelon</li>
                                    <li style=" <?php if($host_info[0]['country']!="SD"){ echo 'display:none;'; } ?>" value="SD">Sudan</li>
                                    <li style=" <?php if($host_info[0]['country']!="SR"){ echo 'display:none;'; } ?>" value="SR">Suriname</li>
                                    <li style=" <?php if($host_info[0]['country']!="SJ"){ echo 'display:none;'; } ?>" value="SJ">Svalbard and Jan Mayen Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="SZ"){ echo 'display:none;'; } ?>" value="SZ">Swaziland</li>
                                    <li style=" <?php if($host_info[0]['country']!="SE"){ echo 'display:none;'; } ?>" value="SE">Sweden</li>
                                    <li style=" <?php if($host_info[0]['country']!="CH"){ echo 'display:none;'; } ?>" value="CH">Switzerland</li>
                                    <li style=" <?php if($host_info[0]['country']!="SY"){ echo 'display:none;'; } ?>" value="SY">Syrian Arab Republic</li>
                                    <li style=" <?php if($host_info[0]['country']!="TW"){ echo 'display:none;'; } ?>" value="TW">Taiwan, Province of China</li>
                                    <li style=" <?php if($host_info[0]['country']!="TJ"){ echo 'display:none;'; } ?>" value="TJ">Tajikistan</li>
                                    <li style=" <?php if($host_info[0]['country']!="TZ"){ echo 'display:none;'; } ?>" value="TZ">Tanzania, United Republic of</li>
                                    <li style=" <?php if($host_info[0]['country']!="TH"){ echo 'display:none;'; } ?>" value="TH">Thailand</li>
                                    <li style=" <?php if($host_info[0]['country']!="TG"){ echo 'display:none;'; } ?>" value="TG">Togo</li>
                                    <li style=" <?php if($host_info[0]['country']!="TK"){ echo 'display:none;'; } ?>" value="TK">Tokelau</li>
                                    <li style=" <?php if($host_info[0]['country']!="TO"){ echo 'display:none;'; } ?>" value="TO">Tonga</li>
                                    <li style=" <?php if($host_info[0]['country']!="TT"){ echo 'display:none;'; } ?>" value="TT">Trinidad and Tobago</li>
                                    <li style=" <?php if($host_info[0]['country']!="TN"){ echo 'display:none;'; } ?>" value="TN">Tunisia</li>
                                    <li style=" <?php if($host_info[0]['country']!="TR"){ echo 'display:none;'; } ?>" value="TR">Turkey</li>
                                    <li style=" <?php if($host_info[0]['country']!="TM"){ echo 'display:none;'; } ?>" value="TM">Turkmenistan</li>
                                    <li style=" <?php if($host_info[0]['country']!="TC"){ echo 'display:none;'; } ?>" value="TC">Turks and Caicos Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="TV"){ echo 'display:none;'; } ?>" value="TV">Tuvalu</li>
                                    <li style=" <?php if($host_info[0]['country']!="UG"){ echo 'display:none;'; } ?>" value="UG">Uganda</li>
                                    <li style=" <?php if($host_info[0]['country']!="UA"){ echo 'display:none;'; } ?>" value="UA">Ukraine</li>
                                    <li style=" <?php if($host_info[0]['country']!="AE"){ echo 'display:none;'; } ?>" value="AE">United Arab Emirates</li>
                                    <li style=" <?php if($host_info[0]['country']!="GB"){ echo 'display:none;'; } ?>" value="GB">United Kingdom</li>
                                    <li style=" <?php if($host_info[0]['country']!="US"){ echo 'display:none;'; } ?>" value="US">United States</li>
                                    <li style=" <?php if($host_info[0]['country']!="UM"){ echo 'display:none;'; } ?>" value="UM">United States Minor Outlying Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="UY"){ echo 'display:none;'; } ?>" value="UY">Uruguay</li>
                                    <li style=" <?php if($host_info[0]['country']!="UZ"){ echo 'display:none;'; } ?>" value="UZ">Uzbekistan</li>
                                    <li style=" <?php if($host_info[0]['country']!="VU"){ echo 'display:none;'; } ?>" value="VU">Vanuatu</li>
                                    <li style=" <?php if($host_info[0]['country']!="VE"){ echo 'display:none;'; } ?>" value="VE">Venezuela</li>
                                    <li style=" <?php if($host_info[0]['country']!="VN"){ echo 'display:none;'; } ?>" value="VN">Viet Nam</li>
                                    <li style=" <?php if($host_info[0]['country']!="VG"){ echo 'display:none;'; } ?>" value="VG">Virgin Islands (British)</li>
                                    <li style=" <?php if($host_info[0]['country']!="VI"){ echo 'display:none;'; } ?>" value="VI">Virgin Islands (U.S.)</li>
                                    <li style=" <?php if($host_info[0]['country']!="WF"){ echo 'display:none;'; } ?>" value="WF">Wallis and Futuna Islands</li>
                                    <li style=" <?php if($host_info[0]['country']!="EH"){ echo 'display:none;'; } ?>" value="EH">Western Sahara</li>
                                    <li style=" <?php if($host_info[0]['country']!="YE"){ echo 'display:none;'; } ?>" value="YE">Yemen</li>
                                    <li style=" <?php if($host_info[0]['country']!="YU"){ echo 'display:none;'; } ?>" value="YU">Yugoslavia</li>
                                    <li style=" <?php if($host_info[0]['country']!="ZM"){ echo 'display:none;'; } ?>" value="ZM">Zambia</li>
                                    <li style=" <?php if($host_info[0]['country']!="ZW"){ echo 'display:none;'; } ?>" value="ZW">Zimbabwe</li>
                              </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Student Gender Preference</td>
                            <td>
								<ul class="span12" name="type_stu" style="list-style:none;">
                                    <li style=" <?php if($host_info[0]['type_stu']!=" "){ echo 'display:none;'; } ?>" value=" ">(please select a gender preference)</li>
                                    <li style=" <?php if($host_info[0]['type_stu']!="0"){ echo 'display:none;'; } ?>" value="0">No Gender Preference</li>
                                    <li style=" <?php if($host_info[0]['type_stu']!="1"){ echo 'display:none;'; } ?>" value="1">Female(s) Only</li>
                                    <li style=" <?php if($host_info[0]['type_stu']!="2"){ echo 'display:none;'; } ?>" value="2">Male(s) Only</li>
                                    <li style=" <?php if($host_info[0]['type_stu']!="3"){ echo 'display:none;'; } ?>" value="3">Married Couple Only</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                        	<td>Host ILEP Teacher</td>
                            <td>
                            	<?php if($host_info[0]['ILEP']==1){ echo 'Yes'; } else{ echo 'No'; } ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <br />
            <legend><h4>Other Ways To Be Involved</h4></legend>
            <table class="table table-striped">
                <thead>
                    <th>Description</th>
                    <th>Response</th>
                </thead>
                <tbody>
                	<?php if($host_info[0]['financial']==1): ?>
                        <tr>
                            <td>Financial Contribution</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                        	<td>Contribution Amount
								<?php if($host_info[0]['contribution']==100): ?>
                                	<br /><br />
                                    <ul style="list-style:none;">
                                        <li>Free Shirt 1 Size</li>
                                        <li><ul>
                                            <li><?php  
                                                if($host_info[0]['contribution_shirt1_size']=='XS')
                                                    echo 'X-Small';
                                                else if($host_info[0]['contribution_shirt1_size']=='S')
                                                    echo 'Small';
                                                else if($host_info[0]['contribution_shirt1_size']=='M')
                                                    echo 'Medium';
                                                else if($host_info[0]['contribution_shirt1_size']=='L')
                                                    echo 'Large';
                                                else
                                                    echo 'X-Large';
                                            ?></li>
                                        </ul></li>
                                    </ul>
                                    <ul style="list-style:none;">
                                        <li>Free Shirt 2 Size</li>
                                        <li><ul>
                                            <li><?php  
                                                if($host_info[0]['contribution_shirt2_size']=='XS')
                                                    echo 'X-Small';
                                                else if($host_info[0]['contribution_shirt2_size']=='S')
                                                    echo 'Small';
                                                else if($host_info[0]['contribution_shirt2_size']=='M')
                                                    echo 'Medium';
                                                else if($host_info[0]['contribution_shirt2_size']=='L')
                                                    echo 'Large';
                                                else
                                                    echo 'X-Large';
                                            ?></li>
                                        </ul></li>
                                    </ul>	
                                <?php endif; ?>                           
                            </td>
                            <td><?php echo '$'.$host_info[0]['contribution']; ?></td>
                        </tr>
                    <?php endif; ?>    
                    <tr>
                    	<td>Ladies' Luncheons</td>
                        <td><?php if($host_info[0]['ladies']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Event set-up</td>
                        <td><?php if($host_info[0]['event_help']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>International Festival Booth
							<?php if($host_info[0]['festival']==1): ?>
                            	<br /><br />
                                <ul style="list-style:none;">
                                    <li>Bake a Dessert: <?php if($host_info[0]['bake_dessert']==1){ echo 'Yes'; } else{ echo 'No'; } ?></li>
                                </ul>
                                <ul style="list-style:none;">
                                    <li>Man Booth: <?php if($host_info[0]['man_booth']==1){ echo 'Yes'; } else{ echo 'No'; } ?></li>
                                </ul>
                            <?php endif; ?>
                        </td>
                        <td><?php if($host_info[0]['festival']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                      	<td>Conversational English Classes
                        	<?php if($host_info[0]['english_class']==1): ?>
                            	<br /><br />
                                <ul style="list-style:none;">
                                    <li>Fall Classes: <?php if($host_info[0]['fall_english_class']==1){ echo 'Yes'; } else{ echo 'No'; } ?></li>
                                </ul>
                                <ul style="list-style:none;">
                                    <li>Spring Classes: <?php if($host_info[0]['spring_english_class']==1){ echo 'Yes'; } else{ echo 'No'; } ?></li>
                                </ul>
                                <ul style="list-style:none;">
                                    <li>Summer Classes: <?php if($host_info[0]['summer_english_class']==1){ echo 'Yes'; } else{ echo 'No'; } ?></li>
                                </ul>
                            <?php endif; ?>
                        </td>
                        <td><?php if($host_info[0]['english_class']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>                    
                    <tr>
                    	<td>Apartment Events</td>
                        <td><?php if($host_info[0]['apartment_events']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Shopping Trips</td>
                        <td><?php if($host_info[0]['shopping_trips']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Planning Group Outing</td>
                        <td><?php if($host_info[0]['group_outing']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Provide A Meal</td>
                        <td><?php if($host_info[0]['provide_meal']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Recruitment</td>
                        <td><?php if($host_info[0]['recruitment']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>
                    <tr>
                    	<td>Purchase Shirt
                        	<?php if($host_info[0]['purchase_shirt']==1): ?>
                            	<br /><br />
                                <ul style="list-style:none;">
                                    <li>Shirt 1 Size</li>
                                    <ul>
                                        <li><?php  
                                            if($host_info[0]['purchase_shirt1_size']=='XS')
                                                echo 'X-Small';
                                            else if($host_info[0]['purchase_shirt1_size']=='S')
                                                echo 'Small';
                                            else if($host_info[0]['purchase_shirt1_size']=='M')
                                                echo 'Medium';
                                            else if($host_info[0]['purchase_shirt1_size']=='L')
                                                echo 'Large';
                                            else
                                                echo 'X-Large';
                                        ?></li>
                                    </ul>
                                </ul>
                                <ul style="list-style:none;">
                                    <li>Shirt 2 Size</li>
                                    <ul>
                                        <li><?php  
                                            if($host_info[0]['purchase_shirt2_size']=='XS')
                                                echo 'X-Small';
                                            else if($host_info[0]['purchase_shirt2_size']=='S')
                                                echo 'Small';
                                            else if($host_info[0]['purchase_shirt2_size']=='M')
                                                echo 'Medium';
                                            else if($host_info[0]['purchase_shirt2_size']=='L')
                                                echo 'Large';
                                            else if($host_info[0]['purchase_shirt2_size']=='XL')
                                                echo 'X-Large';
                                            else
                                                echo 'None';
                                        ?></li>
                                    </ul>
                                </ul>
                            <?php endif; ?>
                        </td>
                        <td><?php if($host_info[0]['purchase_shirt']==1){ echo 'Yes'; } else{ echo 'No'; } ?></td>
                    </tr>                    
                </tbody>
            </table>
            <?php endif; ?>
        </div><!-- span9 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>