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
        	<div style="color:#F00;">* Username is already taken, please choose different username. *</div>
        	<h3>Community Member Form</h3>
            <form action="<?php echo base_url().'host/submit_host'; ?>" method="post" enctype="multipart/form-data">
            	<fieldset>
                	<legend><h4>Contact Information</h4></legend>
                    <table class="table table-striped">
                    	<thead>
                        	<th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><strong>CAIF Member(s) Name</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="name" size="30" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Address</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="address" size="90" /></td>
                            </tr>
                            <tr>
                            	<td><strong>City</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="city" size="90" /></td>
                            </tr>
                            <tr>
                            	<td><strong>State</strong></td>
                                <td>
                                	<select class="offset2 required" name="state">
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
                            	<td><strong>Postal/Zip Code</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="zip" size="90" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Mobile Phone</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="mobile_phone" value="(864)" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Home Phone</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="home_phone" size="90" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Work Phone</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="work_phone" size="90" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Email</strong></td>
                                <td><input class="offset2 input-large required" type="email" name="email" size="90" /></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <br />
                <fieldset>
                	<legend><h4>Personal Information</h4></legend>
                    <table width="500px">
                    	<thead>
                        	<th></th>
                            
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><strong>Do you have children?</strong>
                                	<br /><small>Please check all that apply:</small><br />
                                    <input type="hidden" name="sm_child" value="0" />
                                	<input class="offset1" type="checkbox" name="sm_child" value="1" /> Yes,we have small children in the home.<br />
                                    <input type="hidden" name="tn_child" value="0" />
                                    <input class="offset1" type="checkbox" name="tn_child" value="1" /> Yes,we have teenage children at home.<br />
                                    <input type="hidden" name="cl_child" value="0" />
                                    <input class="offset1" type="checkbox" name="cl_child" value="1" /> Yes,we have college age children.<br />
                                    <input type="hidden" name="gr_child" value="0" />
                                    <input class="offset1" type="checkbox" name="gr_child" value="1" /> Yes,but they are grown and do not live with us now.<br />
                                    <input type="hidden" name="no_child" value="0" />
                                    <input class="offset1" type="checkbox" name="no_child" value="1" /> No.
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>Do you have pets?</strong>
                                	<br /><small>Please check one:</small><br />
                                	<input class="offset1" checked="checked" type="radio" name="pet" value="no_pet" /> No<br />
                                    <input class="offset1" type="radio" name="pet" value="out_pet" /> Yes - Outside Only<br />
                                    <input class="offset1" type="radio" name="pet" value="in_pet" /> Yes - Inside Only<br />
                                    <input class="offset1" type="radio" name="pet" value="both_pet" /> Yes - Inside and Outside
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>If yes, what kinds?</strong><br />
                                <textarea class="required span12" name="pet_type"></textarea></td> 
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>Please list your interests and hobbies.</strong><br />
                                <textarea class="required span12" name="hobbies" rows="8"></textarea></td> 
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>Please list any countries you have traveled in.</strong><br />
                                <textarea class="required span12" name="travel" rows="8"></textarea></td> 
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>Please list any languages you speak and indicate fluency.</strong><br />
                                <textarea class="required span12" name="languages" rows="8"></textarea></td> 
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
                </fieldset>
                <br />
                <fieldset>
                    <legend><h4>Host Friend Program</h4></legend>
                    	<table width="500px">
                    	<thead>
                        	<th></th>
                            
                        </thead>
                        <tbody>
                            <tr>
                            	<td>
                                	<ul style="list-style:none">
                                    	<li><input type="radio" checked="checked" name="host_option" value="0" /> <strong>I am unable to host new students this year</strong></li>
                                        <li><input type="radio" name="host_option" id="host" value="1" /> <strong>I am willing to host a new student(s) this year</strong></li>
                                        <ul id="hosting" style="display:none; list-style:none;">
                                        	<br />
                                        	<li>
                                            	<strong>How many students would you be willing to host for one year?</strong>
                                                <br /><!-- <small>Please check only one:</small><br />
                                                <input class="offset1" checked="checked" type="radio" name="students" value="One" /> One
                                                <input class="offset1" type="radio" name="students" value="Two" /> Two
                                                <input class="offset1" type="radio" name="students" value="Three" /> Three
                                                <input class="offset1" type="radio" name="students" value="More" /> More -->
                                                <select class="offset1 span12" name="students">
                                                    <option value="One">One</option>
                                                    <option value="Two">Two</option>
                                                    <option value="Three">Three</option>
                                                    <option value="Four">Four</option>
                                                    <option value="Five">Five</option>
                                                    <option value="Six">Six</option>
                                                    <option value="More">More</option>
                                                </select>
                                            </li>
                                            <br />
                                            <li>
                                            	<strong>If you would like to befriend students from a particular country, cultural background, or gender, please select your preference. We try to fulfill requests when possible, but cannot make any guarantees.</strong><br />
                                                <select class="span12 offset1" name="country">
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
                                                      <option value="TW">Taiwan</option>
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
                                            	<select class="span12" name="type_stu">
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
                                                <input type="checkbox" name="ILEP" value="1" /> I could host an ILEP teacher fellow for the Spring Semester only</li>
                                        </ul>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <br />
                <fieldset>
                	<legend><h4>Other Ways To Be Involved</h4></legend>
                    <small>Check all that apply. A check does not necessarily commit you.</small>
                    <br /><br />
                    <ul style="list-style:none;">
                    	<li>
                        	<input type="hidden" name="financial" value="0" />
                        	<input id="financial" type="checkbox" name="financial" value="1" /> Financial Support (CAIF has no source of funding other than member donations)	
                        	<ul id="financial_info" class="offset1" style="display:none; list-style:none;">
                            	<br />
                            	&nbsp;&nbsp;&nbsp;&nbsp;My annual contribution: (Thank You!)
                            	<li><input type="radio" checked="checked" name="contribution" value="25" /> $25 (suggested minimum)</li>
                                <li><input type="radio" name="contribution" value="35" /> $35</li>
                                <li><input type="radio" name="contribution" value="50" /> $50</li>
                                <li><input type="radio" name="contribution" value="75" /> $75</li>
                                <li><input id="free_shirt" type="radio" name="contribution" value="100" /> $100 or more (get 2 free CAIF T-shirts)
                                	<ul id="free_shirt_options" class="offset1" style="display:none;">
                                    	<li>Shirt #1: <select name="contribution_shirt1_size">
                                                            <option value="XS">X-Small</option>
                                                            <option value="S">Small</option>
                                                            <option value="M">Medium</option>
                                                            <option value="L">Large</option>
                                                            <option value="XL">X-Large</option>
                                                      </select>
                                        </li>
                                        <li>Shirt #2: <select name="contribution_shirt2_size">
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
                                <li>CAIF c/o Elaine Laiewski, 139 Todd’s Creek Road, Central, SC  29630</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="ladies" value="0" />
                            <input type="checkbox" name="ladies" value="1" /> Ladies' monthly luncheons</li>
                        <br />
                        <li>
                        	<input type="hidden" name="event_help" value="0" />
                            <input type="checkbox" name="event_help" value="1" /> Event set-up / clean-up (as my avalilability allows)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="festival" value="0" />
                            <input id="festival" type="checkbox" name="festival" value="1" /> International Festival Booth - April
                        	<ul class="offset1" id="festival_options" style="display:none; list-style:none;">
                            	<li>
                                	<input type="hidden" name="bake_dessert" value="0" />
                                    <input type="checkbox" name="bake_dessert" value="1" /> Bake a dessert</li>
                                <li>
                                	<input type="hidden" name="man_booth" value="0" />
                                	<input type="checkbox" name="man_booth" value="1" /> Man the booth for an hour</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="english_class" value="0" />
                            <input id="english_class" type="checkbox" name="english_class" value="1" /> Conversational English Class (sponsored by area churches)
                        	<ul class="offset1" id="english_class_options" style="display:none; list-style:none;">
                            	<li>
                                	<input type="hidden" name="fall_english_class" value="0" />
                                    <input type="checkbox" name="fall_english_class" value="1" /> Fall semester (as I'm available)</li>
                                <li>
                                	<input type="hidden" name="spring_english_class" value="0" />
                                    <input type="checkbox" name="spring_english_class" value="1" /> Spring semester (as I'm available)</li>
                                <li>
                                	<input type="hidden" name="summer_english_class" value="0" />
                                    <input type="checkbox" name="summer_english_class" value="1" /> Summer (as I'm available)</li>
                            </ul>
                        </li>
                        <br />
                        <li>
                        	<input type="hidden" name="apartment_events" value="0" />
                            <input type="checkbox" name="apartment_events" value="1" /> Apartment Events</li>
                        <br />
                        <li>
                        	<input type="hidden" name="shopping_trips" value="0" />
                            <input type="checkbox" name="shopping_trips" value="1" /> Organize Shopping Trips (thrift/consignment, flea markets, outlets, mall, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="group_outing" value="0" />
                            <input type="checkbox" name="group_outing" value="1" /> Organize a group outing opportunity (rafting, hike, day trip, lake day, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="provide_meal" value="0" />
                            <input type="checkbox" name="provide_meal" value="1" /> Provide a meal for an international family to help welcome a new baby</li>
                        <br />
                        <li>
                        	<input type="hidden" name="recruitment" value="0" />
                            <input type="checkbox" name="recruitment" value="1" /> Recruitment of new members (tell friends, neighbors, co-workers, associates, etc)</li>
                        <br />
                        <li>
                        	<input type="hidden" name="purchase_shirt" value="0" />
                            <input id="purchase_shirt" type="checkbox" name="purchase_shirt" value="1" /> Purchase a CAIF t-shirt for $10 (a great gift idea for your host student!)
                        	<ul id="purchase_shirt_options" class="offset1" style="display:none; list-style:none;">
                                <small><li>Shirts are $10 each.</li> 
                                <li>Make check made payable to <b>CAIF</b> and mail to:</li>
                                <li>CAIF c/o Elaine Laiewski, Todd’s Creek Road, Central, SC  29630</li></small>
                                <br /> 
                                <li>Shirt #1: <select name="purchase_shirt1_size">
                                					<option value="XS">X-Small</option>
                                                    <option value="S">Small</option>
                                                    <option value="M">Medium</option>
                                                    <option value="L">Large</option>
                                                    <option value="XL">X-Large</option>
                                              </select>
                                </li>
                                <li>Shirt #2: <select name="purchase_shirt2_size">
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
                <fieldset>
                	<legend><h4>Login Information</h4></legend>
                    <small>** This login information will be used inorder for you to keep your information up to date.</small>
                    <div style="color:#F00;">* Username is already taken, please choose different username. *</div>
                	<table class="table table-striped">
                    	<thead>
                        	<th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                            	<td><strong>Username</strong></td>
                                <td><input class="span8" type="text" name="username" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Password</strong></td>
                                <td><input class="span8" id="pass1" type="password" name="password" /></td>
                            </tr>
                            <tr>
                            	<td><br /><br /><strong>Confirm Password</strong></td>
                                <td>
                                	<span id="confirmMessage" class="confirmMessage span8"></span>
                                	<input class="span8" id="pass2" onkeyup="checkPass();return false;" type="password" name="password_again" />  
                                    <input class="btn btn-large btn-primary" type="submit" value="Submit Host Friend Form" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <strong>Thank you for opening your home to International Students. Please understand that a background check may be performed to protect the safety of our students. </strong>
            </form>
        </div>
        <div class="well-small span4">
            <ul class="nav nav-list">
                <li class="nav-header">Host And Student Info</li>
                <li><h4><a class="btn btn-warning" href="<?php echo base_url().'host/stu_form'; ?>">Student Form</a></h4></li>
                <hr />
                <li><h5><a href="<?php echo base_url().'host'; ?>">Community Members Home</a></h5></li>
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
    </div>
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

var timer;
function checkPass()
{
	clearTimeout(timer);
	timer=setTimeout(function validate(){
		//Store the password field objects into variables ...
		var pass1 = document.getElementById('pass1');
		var pass2 = document.getElementById('pass2');
		//Store the Confimation Message Object ...
		var message = document.getElementById('confirmMessage');
		//Set the colors we will be using ...
		var goodColor = "#66cc66";
		var badColor = "#ff6666";
		//Compare the values in the password field
		//and the confirmation field
		if(pass1.value == pass2.value){
			//The passwords match.
			//Set the color to the good color and inform
			//the user that they have entered the correct password
			pass2.style.backgroundColor = goodColor;
			message.style.color = goodColor;
			message.innerHTML = "Passwords Match!"
		}else{
			//The passwords do not match.
			//Set the color to the bad color and
			//notify the user.
			pass2.style.backgroundColor = badColor;
			message.style.color = badColor;
			message.innerHTML = "Passwords Do Not Match!"
		}
	},1000);
} 

</script>
</body>
</html>