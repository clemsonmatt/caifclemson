<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(function(){
	$("#country option[value='<?php echo $student_info[0]['home_country']; ?>']").prop("selected",true);
});
$(function(){
	$("#major option[value='<?php echo $student_info[0]['area_of_study']; ?>']").prop("selected",true);
});
</script>
</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<h3>Edit Student Information</h3>
            <form action="<?php echo base_url().'manage/update_stu/'.$student_info[0]['id']; ?>" method="post" enctype="multipart/form-data">
            	<fieldset>
                	<input type="hidden" name="old_username" value="<?php echo $student_info[0]['username']; ?>" />
                	<legend><h4>Contact Information</h4></legend>
                    <?php if($student_info[0]['pic']!=NULL): ?>
            			<img src="<?php echo base_url().'/photos/'.$student_info[0]['pic']; ?>" width='100px' height='100px'></img>
        			<?php endif; ?>
                    <?php if($profile[0]['host_id'] != 0){ ?>
                    	<input type="hidden" name="host_id" value="<?php echo $profile[0]['host_id']; ?>" />
                    <?php }else{ ?>
                    	<input type="hidden" name="host_id" value="0" />
                    <?php } ?>
                    <table class="table table-striped">
                    	<thead>
                        	<th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><strong>Username</strong></td>
                                <td><input class="offset2 input-large required" name="username" type="text" value="<?php echo $student_info[0]['username']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Password</strong></td>
                                <td><input class="offset2 input-large required" name="password" type="text" value="<?php echo $pass[0]['password']; ?>" /></td>
                            </tr>
                        	<tr>
                            	<td><strong>First Name</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="first_name" value="<?php echo $student_info[0]['first_name']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Last Name (Family Name)</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="last_name" value="<?php echo $student_info[0]['last_name']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Do you have an American name?</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="american_name" value="<?php echo $student_info[0]['american_name']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Gender</strong></td>
                                <td>
                                	<select class="offset2 required" name="gender">
                                		<option value="0" <?php if($student_info[0]['gender']==0){ echo 'selected="selected"'; } ?>>Male</option>
                                        <option value="1" <?php if($student_info[0]['gender']==1){ echo 'selected="selected"'; } ?>>Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>Birthday</strong></td>
                                <td>
                                	<select class="offset2 span3" name="month">
                                    	<?php $i=1; foreach($months as $month): ?>
                                        	<option value="<?php echo $month; ?>"<?php if(substr($student_info[0]['birthday'],0,-8) == $month){ $month_use = $month; echo 'selected="selected"'; } ?>><?php echo $month; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <select class="span3" name="day">
                                    	<?php $i=1; foreach($days as $day): ?>
                                        	<option value="<?php echo $day; ?>"<?php if(substr($student_info[0]['birthday'],0,-5) == $month_use."/".$day){ $day_use = $day; echo 'selected="selected"'; } ?>><?php echo $day; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <select class="span4" name="year">
                                    	<?php $i=1; foreach($years as $year): ?>
                                        	<option value="<?php echo $year; ?>"<?php if($student_info[0]['birthday'] == $month_use."/".$day_use."/".$year){ echo 'selected="selected"'; } ?>><?php echo $year; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>Phone</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="phone" value="<?php echo $student_info[0]['phone']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Email</strong></td>
                                <td><input class="offset2 input-large required" type="email" name="email" value="<?php echo $student_info[0]['email']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Apartment Complex</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="apt_name" value="<?php echo $student_info[0]['apartment_complex']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Apartment Number</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="apt_num" value="<?php echo $student_info[0]['apartment_number']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Mailing Address</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="address" value="<?php echo $student_info[0]['mailing_address']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>City</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="city" value="<?php echo $student_info[0]['city']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Postal/Zip Code</strong></td>
                                <td><input class="offset2 input-large required" type="text" name="zip" value="<?php echo $student_info[0]['zip']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Home Country</strong></td>
                                <td>
                                	<select class="offset2 required" name="home_country" id="country">
                                    	 <option value=" " selected>(please select a country)</option>
                                          <option value="--">none</option>
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
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>Area of Study</strong></td>
                                <td>
                                	<select class="offset2" name="area_of_study" id="major">
                                    	<option value=" ">(please select a major)</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="Administration and Supervision">Administration and Supervision</option>
                                        <option value="Agricultural Education">Agricultural Education</option>
                                        <option value="Agricultural Mechanization and Business">Agricultural Mechanization and Business</option>
                                        <option value="Animal and Veterinary Sciences">Animal and Vaterinary Sciences</option>
                                        <option value="Anthropology">Anthropology</option>
                                        <option value="Applied Economics">Applied Economics</option>
                                        <option value="Applied Psychology">Applied Psychology</option>
                                        <option value="Applied Sociology">Applied Sociology</option>
                                        <option value="Architecture">Architecture</option>
                                        <option value="Art">Art</option>
                                        <option value="Automotive Engineering">Automotive Engineering</option>
                                        <option value="Biochemistry">Biochemistry</option>
                                        <option value="Biochemistry and Molecular Biology">Biochemistry and Molecular Biology</option>
                                        <option value="Bioengineering">Bioengineering</option>
                                        <option value="Biological Sciences">Biological Sciences</option>
                                        <option value="Biosystems Engineering">Biosystems Engineering</option>
                                        <option value="Business Administration">Business Administration</option>
                                        <option value="Chemical Engineering">Chemical Engineering</option>
                                        <option value="City and Regional Planning">City and Regional Planning</option>
                                        <option value="Civil Engineering">Civil Engineering</option>
                                        <option value="Communication Studies">Communication Studies</option>
                                        <option value="Communication, Technology and Society">Communication, Technology and Society</option>
                                        <option value="Computer Engineering">Computer Engineering</option>
                                        <option value="Computer Information Systems">Computer Information Systems</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Construction Science and Management">Construction Science and Management</option>
                                        <option value="Counselor Education, Clinical Mental health Counseling">Counselor Education, Clinical Mental Health Counseling</option>
                                        <option value="Counselor Education, School Counseling">Counselor Education, School Counseling</option>
                                        <option value="Counselor Education, Student Affairs">Counselor Education, Student Affairs</option>
                                        <option value="Curriculum and Instruction">Curriculum and Instruction</option>
                                        <option value="Digital Production Arts">Digital Production Arts</option>
                                        <option value="Early Childhood Education">Early Childhood Education</option>
                                        <option value="Economics">Economics</option>
                                        <option value="Educational Leadership">Educational Leadership</option>
                                        <option value="Electrical Engineering">Electrical Engineering</option>
                                        <option value="Elementary Education">Elementary Education</option>
                                        <option value="Engineering and Science Education">Engineering and Science Education</option>
                                        <option value="English">English</option>
                                        <option value="Entomology">Entomology</option>
                                        <option value="Environmental and Natural Resources">Envionmental and Natrual Resources</option>
                                        <option value="Environmental Engineering">Environmental Engineering</option>
                                        <option value="Environmental Engineering and Science">Environmental Engineering and Science</option>
                                        <option value="Enviromental Toxicology">Environmental Toxicology</option>
                                        <option value="Financial Management">Financial Management</option>
                                        <option value="Food, Nutrition and Culinary Sciences">Food, Nutrition and Culinary Sciences</option>
                                        <option value="Food Science">Food Science</option>
                                        <option value="Food Technology">Food Technology</option>
                                        <option value="Forest Resource Management">Forest Resource Management</option>
                                        <option value="Genetics">Genetics</option>
                                        <option value="Geology">Geology</option>
                                        <option value="Graphic Communications">Grapic Communications</option>
                                        <option value="Healthcare Genetics">Healthcare Genetics</option>
                                        <option value="Health Science">Healthcare Science</option>
                                        <option value="Historic Preservation">Historic Presernation</option>
                                        <option value="History">History</option>
                                        <option value="Horticulture">Horticulture</option>
                                        <option value="Human-Centered Computing">Human-Centered Computing</option>
                                        <option value="Human Factors Psychology">Human Factors Psychology</option>
                                        <option value="Human Resource Development">Human Resource Development</option>
                                        <option value="Hydrogeology">Hydrogeology</option>
                                        <option value="Industrial Engineering">Industrial Engineering</option>
                                        <option value="Industrial/Organizational Psychology">Industrial/Organizational Psychology</option>
                                        <option value="International Family and Community Studies">International Family and Community Studies</option>
                                        <option value="Landscape Architecture">Landscape Architecture</option>
                                        <option value="Language and International Health">Language and International Health</option>
                                        <option value="Language and International Trade">Language and International Trade</option>
                                        <option value="Literacy">Literacy</option>
                                        <option value="Management">Management</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Materials Science and Engineering">Materials Science and Engineering</option>
                                        <option value="Mathematical Sciences">Mathematical Sciences</option>
                                        <option value="Mathematics Teaching">Mathematics Teaching</option>
                                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                                        <option value="Microbiology">Microbiology</option>
                                        <option value="Middle Level Education">Middle Level Education</option>
                                        <option value="Modern Languages">Modern Languages</option>
                                        <option value="Nursing">Nursing</option>
                                        <option value="Packaging Science">Packaging Science</option>
                                        <option value="Parks, Recreation and Tourism Management">Parks, Recreation and Tourism Management</option>
                                        <option value="Philosophy">Philosophy</option>
                                        <option value="Photonic Science and Technology">Photonic Science and Technology</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Planning, Design and Built Environment">Planning, Design and Built Environment</option>
                                        <option value="Plant and Environmental Sciences">Plant and Environmental Sciences</option>
                                        <option value="Policy Studies">Policy Studies</option>
                                        <option value="Political Science">Political Science</option>
                                        <option value="Prepharmacy">Prepharmacy</option>
                                        <option value="Preprofessional Health Studies">Preprofessional Health Studies</option>
                                        <option value="Prerehabilitation Sciences">Prerehabilitation Sciences</option>
                                        <option value="Preveterinary Medicine">Preveterinary Medicine</option>
                                        <option value="Production Studies in Performing Arts">Production Studies in Performing Arts</option>
                                        <option value="Professional Communication">Professional Communication</option>
                                        <option value="Psychology">Psychology</option>
                                        <option value="Public Administration">Public Administration</option>
                                        <option value="Real Estate Development">Real Estate Development</option>
                                        <option value="Rhetorics, Communication and Information Design">Rhetorics, Communication and Information Design</option>
                                        <option value="Science Teaching">Science Teaching</option>
                                        <option value="Secondary Education">Secondary Education</option>
                                        <option value="Secondary Mathematics">Secondary Mathematics</option>
                                        <option value="Secondary Science">Secondary Science</option>
                                        <option value="Sociology">Sociology</option>
                                        <option value="Soils and Sustainable Crop Systems">Soils and Sustainable Crop Systems</option>
                                        <option value="Special Education">Special Education</option>
                                        <option value="Teaching and Learning">Teaching and Learning</option>
                                        <option value="Turfgrass">Turfgrass</option>
                                        <option value="Wildlife and Fisheries Biology">Wildlife and Fisheries Biology</option>
                                        <option value="Youth Development Leadership">Youth Development Leadership</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>Degree Program</strong></td>
                                <td>
                                	<select class="offset2 required" name="degree_program">
                                    	<option value="0" <?php if($student_info[0]['degree_program']==0) echo 'selected="selected"'; ?>>Undergraduate</option>
                                        <option value="1" <?php if($student_info[0]['degree_program']==1) echo 'selected="selected"'; ?>>Masters</option>
                                        <option value="2" <?php if($student_info[0]['degree_program']==2) echo 'selected="selected"'; ?>>PH.D.</option>
                                        <option value="3" <?php if($student_info[0]['degree_program']==3) echo 'selected="selected"'; ?>>Post Doc.</option>
                                        <option value="4" <?php if($student_info[0]['degree_program']==4) echo 'selected="selected"'; ?>>Visiting Scholar</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>Marital Status</strong></td>
                                <td>
                                	<select class="offset2 required" name="marital_status">
                                    	<option value="0" <?php if($student_info[0]['marital_status']==0) echo 'selected="selected"'; ?>>Single</option>
                                        <option value="1" <?php if($student_info[0]['marital_status']==1) echo 'selected="selected"'; ?>>Married</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>If Married, is your Spouse in the US with you?</strong></td>	
                                <td>
                                	<select class="offset2 required" name="spouse_here">
                                    	<option value="0" <?php if($student_info[0]['spouse_here']==0) echo 'selected="selected"'; ?>>No</option>
                                        <option value="1" <?php if($student_info[0]['spouse_here']==1) echo 'selected="selected"'; ?>>Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><strong>If Married, what is your spouse's name?</strong></td>
                                <td><input class="offset2" type="text" name="spouse_name" value="<?php echo $student_info[0]['spouse_name']; ?>" /></td>
                            </tr>
                            <tr>
                            	<td><strong>Do you smoke?</strong></td>
                                <td>
                                	<select class="offset2 required" name="smoke">
                                    	<option value="0" <?php if($student_info[0]['smoke']==0) echo 'selected="selected"'; ?>>No</option>
                                        <option value="1" <?php if($student_info[0]['smoke']==1) echo 'selected="selected"'; ?>>Yes</option>
                                    </select>
                                </td>
                            </tr>
                             <tr>
                            	<td><strong>Do you have a car here you can drive?</strong></td>
                                <td>
                                	<select class="offset2 required" name="car">
                                    	<option value="0" <?php if($student_info[0]['car']==0) echo 'selected="selected"'; ?>>No</option>
                                        <option value="1" <?php if($student_info[0]['car']==1) echo 'selected="selected"'; ?>>Yes</option>
                                    </select>
                                </td>
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
                            	<td><strong>List all allergies you have.</strong><br />
                                <textarea class="required span12" rows="8" name="allergies"><?php echo $student_info[0]['allergies']; ?></textarea></td>
                            </tr>
                            <tr>
                            	<td><strong>List all foods you do not eat.</strong><br />
                                <textarea class="required span12" rows="8" name="DNE_foods"><?php echo $student_info[0]['DNE_foods']; ?></textarea></td>
                            </tr>
                            <tr>
                            	<td><strong>List activities you enjoy.</strong><br />
                                <textarea class="required span12" rows="8" name="activities"><?php echo $student_info[0]['activities']; ?></textarea></td>
                            </tr>
                            <tr>
                            	<td><strong>List languages you speak.</strong><br />
                                <textarea class="required span12" rows="8" name="languages"><?php echo $student_info[0]['languages']; ?></textarea></td>
                            </tr>
                            <tr>
                            	<td><strong>List places you have traveled.</strong><br />
                                <textarea class="required span12" rows="8" name="travel"><?php echo $student_info[0]['travel']; ?></textarea></td>
                            </tr>
                            <tr>
                            	<td><strong>Do you have children?</strong><br />
                                	<input class="offset1" name="kids" type="radio" value="0" <?php if($student_info[0]['kids']==0) echo 'checked="checked"';?>> No</input>
                                    <input class="offset1" name="kids" type="radio" value="1" <?php if($student_info[0]['kids']==1) echo 'checked="checked"';?>> Yes</input>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>If yes,are your children in the US with you?</strong><br />
                                	<input class="offset1" name="kids_here" type="radio" value="0" <?php if($student_info[0]['kids_here']==0) echo 'checked="checked"';?>> No</input>
                                    <input class="offset1" name="kids_here" type="radio" value="1" <?php if($student_info[0]['kids_here']==1) echo 'checked="checked"';?>> Yes</input>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                            	<td><strong>If possible, could you upload a profile picture?</strong>
                                	<input class="offset1" type="file" name="file" id="file" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <br />
                <input class="btn btn-large" type="submit" value="Submit Student Form" />
            </form>
        </div>
        <div class="well-small span4">
            <ul class="nav nav-list">
                <li class="nav-header">Administrative Tools</li>
                <li><h5><a href="<?php echo base_url().'manage/photos'; ?>">Manage Photos</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/events'; ?>">Manage Events</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'manage/newsletters'; ?>">Manage Newsletters</a></h5></li>
                <li><h5><a href="#">Manage Members</a></h5></li>
                <li><h5><a href="#">Pair Student-Host</a></h5></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>