<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(function(){
	$("#state option[value='<?php echo $host_info[0]['state']; ?>']").prop("selected",true);
});
$(function(){
	$("#country option[value='<?php echo $host_info[0]['country']; ?>']").prop("selected",true);
});
$(function(){
	$("#type_stu option[value='<?php echo $host_info[0]['type_stu']; ?>']").prop("selected",true);
});
$(function(){
	$("#contribution_shirt1_size option[value='<?php echo $host_info[0]['contribution_shirt1_size']; ?>']").prop("selected",true);
});
$(function(){
	$("#contribution_shirt2_size option[value='<?php echo $host_info[0]['contribution_shirt2_size']; ?>']").prop("selected",true);
});
$(function(){
	$("#purchase_shirt1_size option[value='<?php echo $host_info[0]['purchase_shirt1_size']; ?>']").prop("selected",true);
});
$(function(){
	$("#purchase_shirt2_size option[value='<?php echo $host_info[0]['purchase_shirt2_size']; ?>']").prop("selected",true);
});
</script>
</head>

<body>
<div class="container">
	<div class="row-fluid">
        <div class="well span8">
        	<h3>Edit Host Information</h3>
            <form action="<?php echo base_url().'manage/update_host/'.$host_info[0]['id']; ?>" method="post" enctype="multipart/form-data">
            	<legend><h4>Contact Information</h4></legend>
				<?php if ($host_info[0]['pic'] != null): ?>
                    <img src="<?php echo base_url().'/photos/'.$host_info[0]['pic']; ?>" width='100px' height='100px'></img>
                <?php endif; ?>
                <input type="hidden" name="old_username" value="<?php echo $host_info[0]['username']; ?>" />
                <table class="table table-striped">
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                         	<td>Username</td>
                            <td><input class="input-large required" type="text" name="username" value="<?php echo $host_info[0]['username']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Password</td>
                            <td><input class="input-large required" type="text" name="password" value="<?php echo $pass[0]['password']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input class="input-large required" type="text" name="name" value="<?php echo $host_info[0]['name']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input class="input-large required" type="text" name="address" value="<?php echo $host_info[0]['address']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input class="input-large required" type="text" name="city" value="<?php echo $host_info[0]['city']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td>
                                <select class="required" name="state" id="state">
                                    <option value="  ">(please select a state)</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Postal/Zip Code</td>
                            <td><input class="input-large required" type="text" name="zip" value="<?php echo $host_info[0]['zip']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Mobile Phone</td>
                            <td><input class="input-large required" type="text" name="mobile_phone" value="<?php echo $host_info[0]['mobile_phone']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Home Phone</td>
                            <td><input class="input-large required" type="text" name="home_phone" value="<?php echo $host_info[0]['home_phone']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Work Phone</td>
                            <td><input class="input-large required" type="text" name="work_phone" value="<?php echo $host_info[0]['work_phone']; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="input-large required" type="email" name="email" value="<?php echo $host_info[0]['email']; ?>" /></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <legend><h4>Personal Information</h4></legend>
                <table>
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Do you have children?</strong>
                                <br /><small>Please check all that apply:</small><br />
                                <input type="hidden" name="sm_child" value="0" />
                                <input class="offset1" type="checkbox" name="sm_child" value="1" <?php if($host_info[0]['sm_child']=='1'){ echo 'checked="checked"'; } ?> /> Yes,we have small children in the home.<br />
                                <input type="hidden" name="tn_child" value="0" />
                                <input class="offset1" type="checkbox" name="tn_child" value="1" <?php if($host_info[0]['tn_child']=='1'){ echo 'checked="checked"'; } ?> /> Yes,we have teenage children at home.<br />
                                <input type="hidden" name="cl_child" value="0" />
                                <input class="offset1" type="checkbox" name="cl_child" value="1" <?php if($host_info[0]['cl_child']=='1'){ echo 'checked="checked"'; } ?> /> Yes,we have college age children.<br />
                                <input type="hidden" name="gr_child" value="0" />
                                <input class="offset1" type="checkbox" name="gr_child" value="1" <?php if($host_info[0]['gr_child']=='1'){ echo 'checked="checked"'; } ?> /> Yes,but they are grown and do not live with us now.<br />
                                <input type="hidden" name="no_child" value="0" />
                                <input class="offset1" type="checkbox" name="no_child" value="1" <?php if($host_info[0]['no_child']=='1'){ echo 'checked="checked"'; } ?> /> No.                           
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Do you have pets?</strong>
                                <br /><small>Please check all that apply:</small><br />
                                <input class="offset1" type="checkbox" name="pet" value="no_pet" <?php if($host_info[0]['pet']=='no_pet'){ echo 'checked="checked"'; } ?> /> No<br />
                                <input class="offset1" type="checkbox" name="pet" value="out_pet" <?php if($host_info[0]['pet']=='out_pet'){ echo 'checked="checked"'; } ?> /> Yes - Outside Only<br />
                                <input class="offset1" type="checkbox" name="pet" value="in_pet" <?php if($host_info[0]['pet']=='in_pet'){ echo 'checked="checked"'; } ?> /> Yes - Inside Only<br />
                                <input class="offset1" type="checkbox" name="pet" value="both_pet" <?php if($host_info[0]['pet']=='both_pet'){ echo 'checked="checked"'; } ?> /> Yes - Inside and Outside
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>If yes, what kinds?</strong><br />
                            <textarea class="required span12" name="pet_type"><?php echo $host_info[0]['pet_type']; ?></textarea></td> 
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Please list your interests and hobbies.</strong><br />
                            <textarea class="required span12" name="hobbies" rows="8"><?php echo $host_info[0]['hobbies']; ?></textarea></td> 
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Please list any countries you have traveled in.</strong><br />
                            <textarea class="required span12" name="travel" rows="8"><?php echo $host_info[0]['travel']; ?></textarea></td> 
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>Please list any languages you speak and indicate fluency.</strong><br />
                            <textarea class="required span12" name="languages" rows="8"><?php echo $host_info[0]['languages']; ?></textarea></td> 
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><strong>If possible, could you upload a family picture?</strong>
                                <input class="offset1" type="file" name="file" id="file" />
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr><td><strong>Please indicate (by checking all that apply) how you would like to be involved with CAIF this year:</strong></td></tr>
                    </tbody>
                </table>
            	<br />
                <legend><h4>Host Friend Program</h4></legend>
                <table>
                	<thead>
                    	<th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                	<ul style="list-style:none">
                                    	<li><input type="radio" name="host_option" value="0" <?php if($host_info[0]['host_option']==0){ echo 'checked="checked"'; }?> /> <strong>I am unable to host new students this year</strong></li>
                                        <li><input type="radio" name="host_option" id="host" value="1" <?php if($host_info[0]['host_option']==1){ echo 'checked="checked"'; }?> /> <strong>I am willing to host a new student(s) this year</strong></li>
                                        <ul id="hosting" style="list-style:none; <?php if($host_info[0]['host_option']==0){ echo 'display:none;'; }?>">
                                        	<br />
                                        	<li>
                                            	<strong>How many students would you be willing to host for one year?</strong>
                                                <br /><!-- <small>Please check only one:</small><br />
                                                <input class="offset1" type="radio" name="students" value="One" <?php if($host_info[0]['students']=='One'){ echo 'checked="checked"'; } ?> /> One
                                                <input class="offset1" type="radio" name="students" value="Two" <?php if($host_info[0]['students']=='Two'){ echo 'checked="checked"'; } ?> /> Two
                                                <input class="offset1" type="radio" name="students" value="Three" <?php if($host_info[0]['students']=='Three'){ echo 'checked="checked"'; } ?> /> Three
                                                <input class="offset1" type="radio" name="students" value="More" <?php if($host_info[0]['students']=='More'){ echo 'checked="checked"'; } ?> /> More
                                                 -->
                                                <select class="offset1 span12" name="students">
                                                    <option value="One" <?php if($host_info[0]['students'] == 'One'){ echo 'selected'; } ?>>One</option>
                                                    <option value="Two" <?php if($host_info[0]['students'] == 'Two'){ echo 'selected'; } ?>>Two</option>
                                                    <option value="Three" <?php if($host_info[0]['students'] == 'Three'){ echo 'selected'; } ?>>Three</option>
                                                    <option value="Four" <?php if($host_info[0]['students'] == 'Four'){ echo 'selected'; } ?>>Four</option>
                                                    <option value="Five" <?php if($host_info[0]['students'] == 'Five'){ echo 'selected'; } ?>>Five</option>
                                                    <option value="Six" <?php if($host_info[0]['students'] == 'Six'){ echo 'selected'; } ?>>Six</option>
                                                    <option value="More" <?php if($host_info[0]['students'] == 'More'){ echo 'selected'; } ?>>More</option>
                                                </select>
                                            </li>
                                            <br />
                                            <li>
                                            	<strong>If you would like to befriend students from a particular country, cultural background, or gender, please select your preference. We try to fulfill requests when possible, but cannot make any guarantees.</strong><br />
                                                <select class="span12 offset1" name="country" id="country">
                                                     <option value=" " selected>(please select a country preference)</option>
                                                      <option value="any">Any</option>
                                                      <option value="AF">Afghanistan</option>
                                                      <option value="AL">Albania</option>
                                                      <option value="DZ">Algeria</option>
                                                      <option value="AS">American Samoa</option>
                                                      <option value="AD">Andorra</option>
                                                      <option value="AO">Angola</option>
                                                      <option value="AI">Anguilla</option>
                                                      <option value="AQ">Antarctica</option>
                                                      <option value="AG">Antigua and Barbuda</option>
                                                      <option value="AR">Argentina</option>
                                                      <option value="AM">Armenia</option>
                                                      <option value="AW">Aruba</option>
                                                      <option value="AU">Australia</option>
                                                      <option value="AT">Austria</option>
                                                      <option value="AZ">Azerbaijan</option>
                                                      <option value="BS">Bahamas</option>
                                                      <option value="BH">Bahrain</option>
                                                      <option value="BD">Bangladesh</option>
                                                      <option value="BB">Barbados</option>
                                                      <option value="BY">Belarus</option>
                                                      <option value="BE">Belgium</option>
                                                      <option value="BZ">Belize</option>
                                                      <option value="BJ">Benin</option>
                                                      <option value="BM">Bermuda</option>
                                                      <option value="BT">Bhutan</option>
                                                      <option value="BO">Bolivia</option>
                                                      <option value="BA">Bosnia and Herzegowina</option>
                                                      <option value="BW">Botswana</option>
                                                      <option value="BV">Bouvet Island</option>
                                                      <option value="BR">Brazil</option>
                                                      <option value="IO">British Indian Ocean Territory</option>
                                                      <option value="BN">Brunei Darussalam</option>
                                                      <option value="BG">Bulgaria</option>
                                                      <option value="BF">Burkina Faso</option>
                                                      <option value="BI">Burundi</option>
                                                      <option value="KH">Cambodia</option>
                                                      <option value="CM">Cameroon</option>
                                                      <option value="CA">Canada</option>
                                                      <option value="CV">Cape Verde</option>
                                                      <option value="KY">Cayman Islands</option>
                                                      <option value="CF">Central African Republic</option>
                                                      <option value="TD">Chad</option>
                                                      <option value="CL">Chile</option>
                                                      <option value="CN">China</option>
                                                      <option value="CX">Christmas Island</option>
                                                      <option value="CC">Cocos (Keeling) Islands</option>
                                                      <option value="CO">Colombia</option>
                                                      <option value="KM">Comoros</option>
                                                      <option value="CG">Congo</option>
                                                      <option value="CD">Congo, the Democratic Republic of the</option>
                                                      <option value="CK">Cook Islands</option>
                                                      <option value="CR">Costa Rica</option>
                                                      <option value="CI">Cote d'Ivoire</option>
                                                      <option value="HR">Croatia (Hrvatska)</option>
                                                      <option value="CU">Cuba</option>
                                                      <option value="CY">Cyprus</option>
                                                      <option value="CZ">Czech Republic</option>
                                                      <option value="DK">Denmark</option>
                                                      <option value="DJ">Djibouti</option>
                                                      <option value="DM">Dominica</option>
                                                      <option value="DO">Dominican Republic</option>
                                                      <option value="TP">East Timor</option>
                                                      <option value="EC">Ecuador</option>
                                                      <option value="EG">Egypt</option>
                                                      <option value="SV">El Salvador</option>
                                                      <option value="GQ">Equatorial Guinea</option>
                                                      <option value="ER">Eritrea</option>
                                                      <option value="EE">Estonia</option>
                                                      <option value="ET">Ethiopia</option>
                                                      <option value="FK">Falkland Islands (Malvinas)</option>
                                                      <option value="FO">Faroe Islands</option>
                                                      <option value="FJ">Fiji</option>
                                                      <option value="FI">Finland</option>
                                                      <option value="FR">France</option>
                                                      <option value="FX">France, Metropolitan</option>
                                                      <option value="GF">French Guiana</option>
                                                      <option value="PF">French Polynesia</option>
                                                      <option value="TF">French Southern Territories</option>
                                                      <option value="GA">Gabon</option>
                                                      <option value="GM">Gambia</option>
                                                      <option value="GE">Georgia</option>
                                                      <option value="DE">Germany</option>
                                                      <option value="GH">Ghana</option>
                                                      <option value="GI">Gibraltar</option>
                                                      <option value="GR">Greece</option>
                                                      <option value="GL">Greenland</option>
                                                      <option value="GD">Grenada</option>
                                                      <option value="GP">Guadeloupe</option>
                                                      <option value="GU">Guam</option>
                                                      <option value="GT">Guatemala</option>
                                                      <option value="GN">Guinea</option>
                                                      <option value="GW">Guinea-Bissau</option>
                                                      <option value="GY">Guyana</option>
                                                      <option value="HT">Haiti</option>
                                                      <option value="HM">Heard and Mc Donald Islands</option>
                                                      <option value="VA">Holy See (Vatican City State)</option>
                                                      <option value="HN">Honduras</option>
                                                      <option value="HK">Hong Kong</option>
                                                      <option value="HU">Hungary</option>
                                                      <option value="IS">Iceland</option>
                                                      <option value="IN">India</option>
                                                      <option value="ID">Indonesia</option>
                                                      <option value="IR">Iran (Islamic Republic of)</option>
                                                      <option value="IQ">Iraq</option>
                                                      <option value="IE">Ireland</option>
                                                      <option value="IL">Israel</option>
                                                      <option value="IT">Italy</option>
                                                      <option value="JM">Jamaica</option>
                                                      <option value="JP">Japan</option>
                                                      <option value="JO">Jordan</option>
                                                      <option value="KZ">Kazakhstan</option>
                                                      <option value="KE">Kenya</option>
                                                      <option value="KI">Kiribati</option>
                                                      <option value="KP">Korea, Democratic People's Republic of</option>
                                                      <option value="KR">Korea, Republic of</option>
                                                      <option value="KW">Kuwait</option>
                                                      <option value="KG">Kyrgyzstan</option>
                                                      <option value="LA">Lao People's Democratic Republic</option>
                                                      <option value="LV">Latvia</option>
                                                      <option value="LB">Lebanon</option>
                                                      <option value="LS">Lesotho</option>
                                                      <option value="LR">Liberia</option>
                                                      <option value="LY">Libyan Arab Jamahiriya</option>
                                                      <option value="LI">Liechtenstein</option>
                                                      <option value="LT">Lithuania</option>
                                                      <option value="LU">Luxembourg</option>
                                                      <option value="MO">Macau</option>
                                                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                      <option value="MG">Madagascar</option>
                                                      <option value="MW">Malawi</option>
                                                      <option value="MY">Malaysia</option>
                                                      <option value="MV">Maldives</option>
                                                      <option value="ML">Mali</option>
                                                      <option value="MT">Malta</option>
                                                      <option value="MH">Marshall Islands</option>
                                                      <option value="MQ">Martinique</option>
                                                      <option value="MR">Mauritania</option>
                                                      <option value="MU">Mauritius</option>
                                                      <option value="YT">Mayotte</option>
                                                      <option value="MX">Mexico</option>
                                                      <option value="FM">Micronesia, Federated States of</option>
                                                      <option value="MD">Moldova, Republic of</option>
                                                      <option value="MC">Monaco</option>
                                                      <option value="MN">Mongolia</option>
                                                      <option value="MS">Montserrat</option>
                                                      <option value="MA">Morocco</option>
                                                      <option value="MZ">Mozambique</option>
                                                      <option value="MM">Myanmar</option>
                                                      <option value="NA">Namibia</option>
                                                      <option value="NR">Nauru</option>
                                                      <option value="NP">Nepal</option>
                                                      <option value="NL">Netherlands</option>
                                                      <option value="AN">Netherlands Antilles</option>
                                                      <option value="NC">New Caledonia</option>
                                                      <option value="NZ">New Zealand</option>
                                                      <option value="NI">Nicaragua</option>
                                                      <option value="NE">Niger</option>
                                                      <option value="NG">Nigeria</option>
                                                      <option value="NU">Niue</option>
                                                      <option value="NF">Norfolk Island</option>
                                                      <option value="MP">Northern Mariana Islands</option>
                                                      <option value="NO">Norway</option>
                                                      <option value="OM">Oman</option>
                                                      <option value="PK">Pakistan</option>
                                                      <option value="PW">Palau</option>
                                                      <option value="PA">Panama</option>
                                                      <option value="PG">Papua New Guinea</option>
                                                      <option value="PY">Paraguay</option>
                                                      <option value="PE">Peru</option>
                                                      <option value="PH">Philippines</option>
                                                      <option value="PN">Pitcairn</option>
                                                      <option value="PL">Poland</option>
                                                      <option value="PT">Portugal</option>
                                                      <option value="PR">Puerto Rico</option>
                                                      <option value="QA">Qatar</option>
                                                      <option value="RE">Reunion</option>
                                                      <option value="RO">Romania</option>
                                                      <option value="RU">Russian Federation</option>
                                                      <option value="RW">Rwanda</option>
                                                      <option value="KN">Saint Kitts and Nevis</option>
                                                      <option value="LC">Saint LUCIA</option>
                                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                                      <option value="WS">Samoa</option>
                                                      <option value="SM">San Marino</option>
                                                      <option value="ST">Sao Tome and Principe</option>
                                                      <option value="SA">Saudi Arabia</option>
                                                      <option value="SN">Senegal</option>
                                                      <option value="SC">Seychelles</option>
                                                      <option value="SL">Sierra Leone</option>
                                                      <option value="SG">Singapore</option>
                                                      <option value="SK">Slovakia (Slovak Republic)</option>
                                                      <option value="SI">Slovenia</option>
                                                      <option value="SB">Solomon Islands</option>
                                                      <option value="SO">Somalia</option>
                                                      <option value="ZA">South Africa</option>
                                                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                      <option value="ES">Spain</option>
                                                      <option value="LK">Sri Lanka</option>
                                                      <option value="SH">St. Helena</option>
                                                      <option value="PM">St. Pierre and Miquelon</option>
                                                      <option value="SD">Sudan</option>
                                                      <option value="SR">Suriname</option>
                                                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                      <option value="SZ">Swaziland</option>
                                                      <option value="SE">Sweden</option>
                                                      <option value="CH">Switzerland</option>
                                                      <option value="SY">Syrian Arab Republic</option>
                                                      <option value="TW">Taiwan, Province of China</option>
                                                      <option value="TJ">Tajikistan</option>
                                                      <option value="TZ">Tanzania, United Republic of</option>
                                                      <option value="TH">Thailand</option>
                                                      <option value="TG">Togo</option>
                                                      <option value="TK">Tokelau</option>
                                                      <option value="TO">Tonga</option>
                                                      <option value="TT">Trinidad and Tobago</option>
                                                      <option value="TN">Tunisia</option>
                                                      <option value="TR">Turkey</option>
                                                      <option value="TM">Turkmenistan</option>
                                                      <option value="TC">Turks and Caicos Islands</option>
                                                      <option value="TV">Tuvalu</option>
                                                      <option value="UG">Uganda</option>
                                                      <option value="UA">Ukraine</option>
                                                      <option value="AE">United Arab Emirates</option>
                                                      <option value="GB">United Kingdom</option>
                                                      <option value="US">United States</option>
                                                      <option value="UM">United States Minor Outlying Islands</option>
                                                      <option value="UY">Uruguay</option>
                                                      <option value="UZ">Uzbekistan</option>
                                                      <option value="VU">Vanuatu</option>
                                                      <option value="VE">Venezuela</option>
                                                      <option value="VN">Viet Nam</option>
                                                      <option value="VG">Virgin Islands (British)</option>
                                                      <option value="VI">Virgin Islands (U.S.)</option>
                                                      <option value="WF">Wallis and Futuna Islands</option>
                                                      <option value="EH">Western Sahara</option>
                                                      <option value="YE">Yemen</option>
                                                      <option value="YU">Yugoslavia</option>
                                                      <option value="ZM">Zambia</option>
                                                      <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </li>
                                            <li>
                                            	<select class="span12" name="type_stu" id="type_stu">
                                                    <option value=" ">(please select a gender preference)</option>
                                                    <option value="0">No Gender Preference</option>
                                                    <option value="1">Female(s) Only</option>
                                                    <option value="2">Male(s) Only</option>
                                                    <option value="3">Married Couple Only</option>
                                                </select>
                                            </li>
                                            <br />
                                            <li>
                                            	<input type="hidden" name="ILEP" value="0" />
                                                <input type="checkbox" name="ILEP" value="1" <?php if($host_info[0]['ILEP']==1){ echo 'checked="checked"'; }?> /> I could host an ILEP teacher fellow for the Spring Semester only</li>
                                        </ul>
                                    </ul>
                                </td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <fieldset>
                	<legend><h4>Other Ways To Be Involved</h4></legend>
                    <small>Check all that apply. A check does not necessarily commit you.</small>
                    <br /><br />
                    <ul style="list-style:none;">
                    	<li>
                        	<input type="hidden" name="financial" value="0" />
                            <input id="financial" type="checkbox" name="financial" value="1" <?php if($host_info[0]['financial']==1){ echo 'checked="checked"'; } ?> /> Financial Support (CAIF has no source of funding other than member donations)	
                        	<ul id="financial_info" class="offset1" style="list-style:none; <?php if($host_info[0]['financial']==0){ echo 'display:none;'; } ?>">
                            	<br />
                            	&nbsp;&nbsp;&nbsp;&nbsp;My annual contribution: (Thank You!)
                            	<li><input type="radio" name="contribution" value="25" <?php if($host_info[0]['contribution']==25){ echo 'checked="checked"'; } ?> /> $25 (suggested minimum)</li>
                                <li><input type="radio" name="contribution" value="35" <?php if($host_info[0]['contribution']==35){ echo 'checked="checked"'; } ?> /> $35</li>
                                <li><input type="radio" name="contribution" value="50" <?php if($host_info[0]['contribution']==50){ echo 'checked="checked"'; } ?> /> $50</li>
                                <li><input type="radio" name="contribution" value="75" <?php if($host_info[0]['contribution']==75){ echo 'checked="checked"'; } ?> /> $75</li>
                                <li><input id="free_shirt" type="radio" name="contribution" value="100" <?php if($host_info[0]['contribution']==100){ echo 'checked="checked"'; } ?> /> $100 or more (get 2 free CAIF T-shirts)
                                	<ul id="free_shirt_options" class="offset1" style=" <?php if($host_info[0]['contribution']!=100){ echo 'display:none;'; } ?>">
                                    	<li>Shirt #1: <select name="contribution_shirt1_size" id="contribution_shirt1_size">
                                                            <option value="XS">X-Small</option>
                                                            <option value="S">Small</option>
                                                            <option value="M">Medium</option>
                                                            <option value="L">Large</option>
                                                            <option value="XL">X-Large</option>
                                                      </select>
                                        </li>
                                        <li>Shirt #2: <select name="contribution_shirt2_size" id="contribution_shirt2_size">
                                                            <option value="XS">X-Small</option>
                                                            <option value="S">Small</option>
                                                            <option value="M">Medium</option>
                                                            <option value="L">Large</option>
                                                            <option value="XL">X-Large</option>
                                                      </select>                                
                                        </li>
                                    </ul>
                                </li>
                                <br />
                                <li>Make check made payable to <b>CAIF</b> and mail to:</li>
                                <li>CAIF c/o Elaine Laiewski, Todd’s Creek Road, Central, SC  29630</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="ladies" value="0" />
                            <input type="checkbox" name="ladies" value="1" <?php if($host_info[0]['ladies']==1){ echo 'checked="checked"'; } ?> /> Ladies' monthly luncheons</li>
                        <br />
                        <li>
                        	<input type="hidden" name="event_help" value="0" />
                            <input type="checkbox" name="event_help" value="1" <?php if($host_info[0]['event_help']==1){ echo 'checked="checked"'; } ?> /> Event set-up / clean-up (as my avalilability allows)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="festival" value="0" />
                            <input id="festival" type="checkbox" name="festival" value="1" <?php if($host_info[0]['festival']==1){ echo 'checked="checked"'; } ?> /> International Festival Booth - April
                        	<ul class="offset1" id="festival_options" style=" <?php if($host_info[0]['festival']!=1){ echo 'display:none;'; } ?> list-style:none;">
                            	<li>
                                	<input type="hidden" name="bake_dessert" value="0" />
                                    <input type="checkbox" name="bake_dessert" value="1" <?php if($host_info[0]['bake_dessert']==1){ echo 'checked="checked"'; } ?> /> Bake a dessert</li>
                                <li>
                                	<input type="hidden" name="man_booth" value="0" />
                                    <input type="checkbox" name="man_booth" value="1" <?php if($host_info[0]['man_booth']==1){ echo 'checked="checked"'; } ?> /> Man the booth for an hour</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="english_class" value="0" />
                            <input id="english_class" type="checkbox" name="english_class" value="1" <?php if($host_info[0]['english_class']==1){ echo 'checked="checked"'; } ?> /> Conversational English Class (sponsored by RUFI and/or Crosspoint Church)
                        	<ul class="offset1" id="english_class_options" style=" <?php if($host_info[0]['english_class']!=1){ echo 'display:none;'; } ?> list-style:none;">
                            	<li>
                                	<input type="hidden" name="fall_english_class" value="0" />
                                    <input type="checkbox" name="fall_english_class" value="1" <?php if($host_info[0]['fall_english_class']==1){ echo 'checked="checked"'; } ?> /> Fall semester (as I'm available)</li>
                                <li>
                                	<input type="hidden" name="spring_english_class" value="0" />
                                	<input type="checkbox" name="spring_english_class" value="1" <?php if($host_info[0]['spring_english_class']==1){ echo 'checked="checked"'; } ?> /> Spring semester (as I'm available)</li>
                                <li>
                                	<input type="hidden" name="summer_english_class" value="0" />
                                    <input type="checkbox" name="summer_english_class" value="1" <?php if($host_info[0]['summer_english_class']==1){ echo 'checked="checked"'; } ?> /> Summer (as I'm available)</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="apartment_events" value="0" />
                            <input type="checkbox" name="apartment_events" value="1" <?php if($host_info[0]['apartment_events']==1){ echo 'checked="checked"'; } ?> /> Apartment Events</li>
                        <br />
                        <li>
                        	<input type="hidden" name="shopping_trips" value="0" />
                            <input type="checkbox" name="shopping_trips" value="1" <?php if($host_info[0]['shopping_trips']==1){ echo 'checked="checked"'; } ?> /> Organize Shopping Trips (thrift/consignment, flea markets, outlets, mall, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="group_outing" value="0" />
                            <input type="checkbox" name="group_outing" value="1" <?php if($host_info[0]['group_outing']==1){ echo 'checked="checked"'; } ?> /> Organize a group outing opportunity (rafting, hike, day trip, lake day, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="provide_meal" value="0" />
                            <input type="checkbox" name="provide_meal" value="1" <?php if($host_info[0]['provide_meal']==1){ echo 'checked="checked"'; } ?> /> Provide a meal for an international family to help welcome a new baby</li>
                        <br />
                        <li>
                        	<input type="hidden" name="recruitment" value="0" />
                            <input type="checkbox" name="recruitment" value="1" <?php if($host_info[0]['recruitment']==1){ echo 'checked="checked"'; } ?> /> Recruitment of new members (tell friends, neighbors, co-workers, associates, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="purchase_shirt" value="0" />
                            <input id="purchase_shirt" type="checkbox" name="purchase_shirt" value="1" <?php if($host_info[0]['purchase_shirt']==1){ echo 'checked="checked"'; } ?> /> Purchase a CAIF t-shirt for $10 (a great gift idea for your host student!)
                        	<ul id="purchase_shirt_options" class="offset1" style=" <?php if($host_info[0]['purchase_shirt']!=1){ echo 'display:none;'; } ?> list-style:none;">
                                <small><li>Shirts are $10 each.</li> 
                                <li>Make check made payable to <b>CAIF</b> and mail to:</li>
                                <li>CAIF c/o Elaine Laiewski, Todd’s Creek Road, Central, SC  29630</li></small>
                                <br /> 
                                <li>Shirt #1: <select name="purchase_shirt1_size" id="purchase_shirt1_size">
                                					<option value="XS">X-Small</option>
                                                    <option value="S">Small</option>
                                                    <option value="M">Medium</option>
                                                    <option value="L">Large</option>
                                                    <option value="XL">X-Large</option>
                                              </select>
                                </li>
                                <li>Shirt #2: <select name="purchase_shirt2_size" id="purchase_shirt2_size">
                                					<option value="NA">None</option>
                                					<option value="XS">X-Small</option>
                                                    <option value="S">Small</option>
                                                    <option value="M">Medium</option>
                                                    <option value="L">Large</option>
                                                    <option value="XL">X-Large</option>
                                              </select>                                
                                </li>
                            </ul>
                        </li>
                    </ul>
                </fieldset>
                <br />
                <input class="btn btn-large" type="submit" value="Save Profile Changes" />
            </form>
        </div><!-- span8 -->
        <div class="well-small span4">
            <ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li>
                <li><h5><a href="<?php echo base_url().'manage/rsvp'; ?>">Manage RSVP Event</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/pair'; ?>">Pair Student-Host</a></h5></li>
            </ul>
        </div>
    </div><!-- row-fluid -->
</div>
<script type="text/javascript">
$("#host").change(function(){
	var showOrHide = $(this).is(':checked');
	$('#hosting').toggle(showOrHide);
});
$('#financial').change(function(){
	var showOrHide = $(this).is(':checked');
	$('#financial_info').toggle(showOrHide);
});
$('#free_shirt').change(function(){
	var showOrHide = $(this).is(':checked');
	$('#free_shirt_options').toggle(showOrHide);
});
$('#festival').change(function(){
	var showOrHide = $(this).is(':checked');
	$('#festival_options').toggle(showOrHide);
});
$('#english_class').change(function(){
	var showOrHide = $(this).is(':checked');
	$('#english_class_options').toggle(showOrHide);
});
$('#purchase_shirt').change(function(){
	var showOrHide = $(this).is(':checked');
	$('#purchase_shirt_options').toggle(showOrHide);
}); 
</script>
</body>
</html>