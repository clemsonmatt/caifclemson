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
                    <li class="nav-header">Navigation</li>
                    <li><h5><a href="<?php echo base_url().'profile'; ?>">Mange Profile</a></h5></li>
                    <?php if(isset($students)): ?>
                    	<?php foreach($students as $stu): if($stu['id'] != $student_info[0]['id']): ?>
                    	<li><h5><a href="<?php echo base_url().'profile/view_stu/'.$stu['id']; ?>"><?php echo $stu['first_name'].' '.$stu['last_name']; ?></a></h5></li>	
                        <?php endif; endforeach; ?>
                    <?php endif; ?>
                </ul>
                <?php } ?>
            </div>
        </div><!-- span3 -->
        <div class="well span9">
        	<h3>Student Information</h3>
            <?php if($admin==1): ?>
            	<a href="<?php echo base_url().'manage/edit_stu/'.$student_info[0]['id']; ?>">
                	<button class="btn btn-info">Edit Student</button>
                </a>
                <a href="<?php echo base_url().'manage/archive/'.$student_info[0]['id']; ?>">
                	<button class="btn btn-warning">Archive Student</button>
                </a>
            <?php endif; ?>
            <hr />
            <?php if($student_info[0]['pic']!=NULL): ?>
            	<img src="<?php echo base_url().'/photos/'.$student_info[0]['pic']; ?>" style="max-height:400px; max-width:400px;"></img>
        	<?php endif; ?>
        	<table class="table table-striped">
            	<thead>
                	<th>Description</th>
                    <th>Student's Response</th>
                </thead>
                <tbody>
                	<?php if($admin==1){ ?>
                	<tr>
                    	<td>Username</td>
                        <td><?php echo $student_info[0]['username']; ?></td>
                    </tr>
                    <tr>
                    	<td>Password</td>
                        <td><?php echo $pass[0]['password']; ?></td>
                    </tr>
                    <?php } ?>
                	<tr>
                		<td>First Name</td>
                    	<td><?php echo $student_info[0]['first_name']; ?></td>
                    </tr>
                    <tr>
                		<td>Last Name</td>
                    	<td><?php echo $student_info[0]['last_name']; ?></td>
                    </tr>
                    <tr>
                		<td>American Name</td>
                    	<td><?php echo $student_info[0]['american_name']; ?></td>
                    </tr>
                    <tr>
                		<td>Gender</td>
                    	<td><?php if($student_info[0]['gender']==0){ echo "Male"; } else{ echo "Female"; }; ?></td>
                    </tr>
                    <tr>
                        <td>Birthday</td>
                        <td><?php echo $student_info[0]['birthday']; ?></td>
                    </tr>
                    <tr>
                		<td>Phone</td>
                    	<td><?php echo $student_info[0]['phone']; ?></td>
                    </tr>
                    <tr>
                		<td>Email</td>
                    	<td><?php echo $student_info[0]['email']; ?></td>
                    </tr>
                   	<tr>
                		<td>Apartment Complex</td>
                    	<td><?php echo $student_info[0]['apartment_complex']; ?></td>
                    </tr>
                    <tr>
                		<td>Apartment Number</td>
                    	<td><?php echo $student_info[0]['apartment_number']; ?></td>
                    </tr>
                    <tr>
                		<td>Mailing Address</td>
                    	<td><?php echo $student_info[0]['mailing_address']; ?></td>
                    </tr>
                    <tr>
                		<td>City</td>
                    	<td><?php echo $student_info[0]['city']; ?></td>
                    </tr>
                    <tr>
                		<td>Zip</td>
                    	<td><?php echo $student_info[0]['zip']; ?></td>
                    </tr>
                    <tr>
                            <td>Country</td>
                            <td>
								<ul class="span12" name="country" style="list-style:none;">
                                   <li style=" <?php if($student_info[0]['home_country']!=" "){ echo 'display:none;'; } ?>" value=" " selected>(please select a country preference)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="any"){ echo 'display:none;'; } ?>" value="any">Any</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AF"){ echo 'display:none;'; } ?>" value="AF">Afghanistan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AL"){ echo 'display:none;'; } ?>" value="AL">Albania</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DZ"){ echo 'display:none;'; } ?>" value="DZ">Algeria</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AS"){ echo 'display:none;'; } ?>" value="AS">American Samoa</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AD"){ echo 'display:none;'; } ?>" value="AD">Andorra</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AO"){ echo 'display:none;'; } ?>" value="AO">Angola</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AI"){ echo 'display:none;'; } ?>" value="AI">Anguilla</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AQ"){ echo 'display:none;'; } ?>" value="AQ">Antarctica</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AG"){ echo 'display:none;'; } ?>" value="AG">Antigua and Barbuda</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AR"){ echo 'display:none;'; } ?>" value="AR">Argentina</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AM"){ echo 'display:none;'; } ?>" value="AM">Armenia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AW"){ echo 'display:none;'; } ?>" value="AW">Aruba</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AU"){ echo 'display:none;'; } ?>" value="AU">Australia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AT"){ echo 'display:none;'; } ?>" value="AT">Austria</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AZ"){ echo 'display:none;'; } ?>" value="AZ">Azerbaijan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BS"){ echo 'display:none;'; } ?>" value="BS">Bahamas</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BH"){ echo 'display:none;'; } ?>" value="BH">Bahrain</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BD"){ echo 'display:none;'; } ?>" value="BD">Bangladesh</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BB"){ echo 'display:none;'; } ?>" value="BB">Barbados</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BY"){ echo 'display:none;'; } ?>" value="BY">Belarus</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BE"){ echo 'display:none;'; } ?>" value="BE">Belgium</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BZ"){ echo 'display:none;'; } ?>" value="BZ">Belize</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BJ"){ echo 'display:none;'; } ?>" value="BJ">Benin</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BM"){ echo 'display:none;'; } ?>" value="BM">Bermuda</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BT"){ echo 'display:none;'; } ?>" value="BT">Bhutan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BO"){ echo 'display:none;'; } ?>" value="BO">Bolivia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BA"){ echo 'display:none;'; } ?>" value="BA">Bosnia and Herzegowina</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BW"){ echo 'display:none;'; } ?>" value="BW">Botswana</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BV"){ echo 'display:none;'; } ?>" value="BV">Bouvet Island</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BR"){ echo 'display:none;'; } ?>" value="BR">Brazil</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IO"){ echo 'display:none;'; } ?>" value="IO">British Indian Ocean Territory</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BN"){ echo 'display:none;'; } ?>" value="BN">Brunei Darussalam</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BG"){ echo 'display:none;'; } ?>" value="BG">Bulgaria</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BF"){ echo 'display:none;'; } ?>" value="BF">Burkina Faso</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="BI"){ echo 'display:none;'; } ?>" value="BI">Burundi</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KH"){ echo 'display:none;'; } ?>" value="KH">Cambodia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CM"){ echo 'display:none;'; } ?>" value="CM">Cameroon</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CA"){ echo 'display:none;'; } ?>" value="CA">Canada</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CV"){ echo 'display:none;'; } ?>" value="CV">Cape Verde</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KY"){ echo 'display:none;'; } ?>" value="KY">Cayman Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CF"){ echo 'display:none;'; } ?>" value="CF">Central African Republic</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TD"){ echo 'display:none;'; } ?>" value="TD">Chad</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CL"){ echo 'display:none;'; } ?>" value="CL">Chile</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CN"){ echo 'display:none;'; } ?>" value="CN">China</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CX"){ echo 'display:none;'; } ?>" value="CX">Christmas Island</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CC"){ echo 'display:none;'; } ?>" value="CC">Cocos (Keeling) Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CO"){ echo 'display:none;'; } ?>" value="CO">Colombia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KM"){ echo 'display:none;'; } ?>" value="KM">Comoros</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CG"){ echo 'display:none;'; } ?>" value="CG">Congo</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CD"){ echo 'display:none;'; } ?>" value="CD">Congo, the Democratic Republic of the</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CK"){ echo 'display:none;'; } ?>" value="CK">Cook Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CR"){ echo 'display:none;'; } ?>" value="CR">Costa Rica</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CI"){ echo 'display:none;'; } ?>" value="CI">Cote d'Ivoire</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HR"){ echo 'display:none;'; } ?>" value="HR">Croatia (Hrvatska)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CU"){ echo 'display:none;'; } ?>" value="CU">Cuba</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CY"){ echo 'display:none;'; } ?>" value="CY">Cyprus</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CZ"){ echo 'display:none;'; } ?>" value="CZ">Czech Republic</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DK"){ echo 'display:none;'; } ?>" value="DK">Denmark</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DJ"){ echo 'display:none;'; } ?>" value="DJ">Djibouti</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DM"){ echo 'display:none;'; } ?>" value="DM">Dominica</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DO"){ echo 'display:none;'; } ?>" value="DO">Dominican Republic</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TP"){ echo 'display:none;'; } ?>" value="TP">East Timor</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="EC"){ echo 'display:none;'; } ?>" value="EC">Ecuador</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="EG"){ echo 'display:none;'; } ?>" value="EG">Egypt</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SV"){ echo 'display:none;'; } ?>" value="SV">El Salvador</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GQ"){ echo 'display:none;'; } ?>" value="GQ">Equatorial Guinea</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ER"){ echo 'display:none;'; } ?>" value="ER">Eritrea</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="EE"){ echo 'display:none;'; } ?>" value="EE">Estonia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ET"){ echo 'display:none;'; } ?>" value="ET">Ethiopia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FK"){ echo 'display:none;'; } ?>" value="FK">Falkland Islands (Malvinas)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FO"){ echo 'display:none;'; } ?>" value="FO">Faroe Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FJ"){ echo 'display:none;'; } ?>" value="FJ">Fiji</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FI"){ echo 'display:none;'; } ?>" value="FI">Finland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FR"){ echo 'display:none;'; } ?>" value="FR">France</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FX"){ echo 'display:none;'; } ?>" value="FX">France, Metropolitan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GF"){ echo 'display:none;'; } ?>" value="GF">French Guiana</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PF"){ echo 'display:none;'; } ?>" value="PF">French Polynesia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TF"){ echo 'display:none;'; } ?>" value="TF">French Southern Territories</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GA"){ echo 'display:none;'; } ?>" value="GA">Gabon</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GM"){ echo 'display:none;'; } ?>" value="GM">Gambia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GE"){ echo 'display:none;'; } ?>" value="GE">Georgia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="DE"){ echo 'display:none;'; } ?>" value="DE">Germany</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GH"){ echo 'display:none;'; } ?>" value="GH">Ghana</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GI"){ echo 'display:none;'; } ?>" value="GI">Gibraltar</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GR"){ echo 'display:none;'; } ?>" value="GR">Greece</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GL"){ echo 'display:none;'; } ?>" value="GL">Greenland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GD"){ echo 'display:none;'; } ?>" value="GD">Grenada</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GP"){ echo 'display:none;'; } ?>" value="GP">Guadeloupe</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GU"){ echo 'display:none;'; } ?>" value="GU">Guam</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GT"){ echo 'display:none;'; } ?>" value="GT">Guatemala</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GN"){ echo 'display:none;'; } ?>" value="GN">Guinea</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GW"){ echo 'display:none;'; } ?>" value="GW">Guinea-Bissau</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GY"){ echo 'display:none;'; } ?>" value="GY">Guyana</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HT"){ echo 'display:none;'; } ?>" value="HT">Haiti</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HM"){ echo 'display:none;'; } ?>" value="HM">Heard and Mc Donald Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VA"){ echo 'display:none;'; } ?>" value="VA">Holy See (Vatican City State)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HN"){ echo 'display:none;'; } ?>" value="HN">Honduras</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HK"){ echo 'display:none;'; } ?>" value="HK">Hong Kong</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="HU"){ echo 'display:none;'; } ?>" value="HU">Hungary</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IS"){ echo 'display:none;'; } ?>" value="IS">Iceland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IN"){ echo 'display:none;'; } ?>" value="IN">India</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ID"){ echo 'display:none;'; } ?>" value="ID">Indonesia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IR"){ echo 'display:none;'; } ?>" value="IR">Iran (Islamic Republic of)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IQ"){ echo 'display:none;'; } ?>" value="IQ">Iraq</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IE"){ echo 'display:none;'; } ?>" value="IE">Ireland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IL"){ echo 'display:none;'; } ?>" value="IL">Israel</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="IT"){ echo 'display:none;'; } ?>" value="IT">Italy</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="JM"){ echo 'display:none;'; } ?>" value="JM">Jamaica</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="JP"){ echo 'display:none;'; } ?>" value="JP">Japan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="JO"){ echo 'display:none;'; } ?>" value="JO">Jordan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KZ"){ echo 'display:none;'; } ?>" value="KZ">Kazakhstan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KE"){ echo 'display:none;'; } ?>" value="KE">Kenya</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KI"){ echo 'display:none;'; } ?>" value="KI">Kiribati</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KP"){ echo 'display:none;'; } ?>" value="KP">Korea, Democratic People's Republic of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KR"){ echo 'display:none;'; } ?>" value="KR">Korea, Republic of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KW"){ echo 'display:none;'; } ?>" value="KW">Kuwait</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KG"){ echo 'display:none;'; } ?>" value="KG">Kyrgyzstan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LA"){ echo 'display:none;'; } ?>" value="LA">Lao People's Democratic Republic</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LV"){ echo 'display:none;'; } ?>" value="LV">Latvia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LB"){ echo 'display:none;'; } ?>" value="LB">Lebanon</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LS "){ echo 'display:none;'; } ?>" value="LS">Lesotho</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LR"){ echo 'display:none;'; } ?>" value="LR">Liberia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LY"){ echo 'display:none;'; } ?>" value="LY">Libyan Arab Jamahiriya</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LI"){ echo 'display:none;'; } ?>" value="LI">Liechtenstein</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LT"){ echo 'display:none;'; } ?>" value="LT">Lithuania</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LU"){ echo 'display:none;'; } ?>" value="LU">Luxembourg</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MO"){ echo 'display:none;'; } ?>" value="MO">Macau</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MK"){ echo 'display:none;'; } ?>" value="MK">Macedonia, The Former Yugoslav Republic of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MG"){ echo 'display:none;'; } ?>" value="MG">Madagascar</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MW"){ echo 'display:none;'; } ?>" value="MW">Malawi</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MY"){ echo 'display:none;'; } ?>" value="MY">Malaysia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MV"){ echo 'display:none;'; } ?>" value="MV">Maldives</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ML"){ echo 'display:none;'; } ?>" value="ML">Mali</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MT"){ echo 'display:none;'; } ?>" value="MT">Malta</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MH"){ echo 'display:none;'; } ?>" value="MH">Marshall Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MQ"){ echo 'display:none;'; } ?>" value="MQ">Martinique</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MR"){ echo 'display:none;'; } ?>" value="MR">Mauritania</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MU"){ echo 'display:none;'; } ?>" value="MU">Mauritius</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="YT"){ echo 'display:none;'; } ?>" value="YT">Mayotte</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MX"){ echo 'display:none;'; } ?>" value="MX">Mexico</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="FM"){ echo 'display:none;'; } ?>" value="FM">Micronesia, Federated States of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MD"){ echo 'display:none;'; } ?>" value="MD">Moldova, Republic of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MC"){ echo 'display:none;'; } ?>" value="MC">Monaco</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MN"){ echo 'display:none;'; } ?>" value="MN">Mongolia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MS"){ echo 'display:none;'; } ?>" value="MS">Montserrat</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MA"){ echo 'display:none;'; } ?>" value="MA">Morocco</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MZ"){ echo 'display:none;'; } ?>" value="MZ">Mozambique</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MM"){ echo 'display:none;'; } ?>" value="MM">Myanmar</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NA"){ echo 'display:none;'; } ?>" value="NA">Namibia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NR"){ echo 'display:none;'; } ?>" value="NR">Nauru</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NP"){ echo 'display:none;'; } ?>" value="NP">Nepal</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NL"){ echo 'display:none;'; } ?>" value="NL">Netherlands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AN"){ echo 'display:none;'; } ?>" value="AN">Netherlands Antilles</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NC"){ echo 'display:none;'; } ?>" value="NC">New Caledonia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NZ"){ echo 'display:none;'; } ?>" value="NZ">New Zealand</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NI"){ echo 'display:none;'; } ?>" value="NI">Nicaragua</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NE"){ echo 'display:none;'; } ?>" value="NE">Niger</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NG"){ echo 'display:none;'; } ?>" value="NG">Nigeria</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NU"){ echo 'display:none;'; } ?>" value="NU">Niue</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NF"){ echo 'display:none;'; } ?>" value="NF">Norfolk Island</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="MP"){ echo 'display:none;'; } ?>" value="MP">Northern Mariana Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="NO"){ echo 'display:none;'; } ?>" value="NO">Norway</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="OM"){ echo 'display:none;'; } ?>" value="OM">Oman</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PK"){ echo 'display:none;'; } ?>" value="PK">Pakistan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PW"){ echo 'display:none;'; } ?>" value="PW">Palau</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PA"){ echo 'display:none;'; } ?>" value="PA">Panama</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PG"){ echo 'display:none;'; } ?>" value="PG">Papua New Guinea</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PY"){ echo 'display:none;'; } ?>" value="PY">Paraguay</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PE"){ echo 'display:none;'; } ?>" value="PE">Peru</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PH"){ echo 'display:none;'; } ?>" value="PH">Philippines</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PN"){ echo 'display:none;'; } ?>" value="PN">Pitcairn</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PL"){ echo 'display:none;'; } ?>" value="PL">Poland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PT"){ echo 'display:none;'; } ?>" value="PT">Portugal</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PR"){ echo 'display:none;'; } ?>" value="PR">Puerto Rico</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="QA"){ echo 'display:none;'; } ?>" value="QA">Qatar</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="RE"){ echo 'display:none;'; } ?>" value="RE">Reunion</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="RO"){ echo 'display:none;'; } ?>" value="RO">Romania</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="RU"){ echo 'display:none;'; } ?>" value="RU">Russian Federation</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="RW"){ echo 'display:none;'; } ?>" value="RW">Rwanda</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="KN"){ echo 'display:none;'; } ?>" value="KN">Saint Kitts and Nevis</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LC"){ echo 'display:none;'; } ?>" value="LC">Saint LUCIA</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VC"){ echo 'display:none;'; } ?>" value="VC">Saint Vincent and the Grenadines</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="WS"){ echo 'display:none;'; } ?>" value="WS">Samoa</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SM"){ echo 'display:none;'; } ?>" value="SM">San Marino</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ST"){ echo 'display:none;'; } ?>" value="ST">Sao Tome and Principe</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SA"){ echo 'display:none;'; } ?>" value="SA">Saudi Arabia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SN"){ echo 'display:none;'; } ?>" value="SN">Senegal</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SC"){ echo 'display:none;'; } ?>" value="SC">Seychelles</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SL"){ echo 'display:none;'; } ?>" value="SL">Sierra Leone</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SG"){ echo 'display:none;'; } ?>" value="SG">Singapore</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SK"){ echo 'display:none;'; } ?>" value="SK">Slovakia (Slovak Republic)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SI"){ echo 'display:none;'; } ?>" value="SI">Slovenia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SB"){ echo 'display:none;'; } ?>" value="SB">Solomon Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SO"){ echo 'display:none;'; } ?>" value="SO">Somalia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ZA"){ echo 'display:none;'; } ?>" value="ZA">South Africa</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GS"){ echo 'display:none;'; } ?>" value="GS">South Georgia and the South Sandwich Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ES"){ echo 'display:none;'; } ?>" value="ES">Spain</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="LK"){ echo 'display:none;'; } ?>" value="LK">Sri Lanka</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SH"){ echo 'display:none;'; } ?>" value="SH">St. Helena</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="PM"){ echo 'display:none;'; } ?>" value="PM">St. Pierre and Miquelon</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SD"){ echo 'display:none;'; } ?>" value="SD">Sudan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SR"){ echo 'display:none;'; } ?>" value="SR">Suriname</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SJ"){ echo 'display:none;'; } ?>" value="SJ">Svalbard and Jan Mayen Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SZ"){ echo 'display:none;'; } ?>" value="SZ">Swaziland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SE"){ echo 'display:none;'; } ?>" value="SE">Sweden</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="CH"){ echo 'display:none;'; } ?>" value="CH">Switzerland</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="SY"){ echo 'display:none;'; } ?>" value="SY">Syrian Arab Republic</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TW"){ echo 'display:none;'; } ?>" value="TW">Taiwan, Province of China</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TJ"){ echo 'display:none;'; } ?>" value="TJ">Tajikistan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TZ"){ echo 'display:none;'; } ?>" value="TZ">Tanzania, United Republic of</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TH"){ echo 'display:none;'; } ?>" value="TH">Thailand</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TG"){ echo 'display:none;'; } ?>" value="TG">Togo</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TK"){ echo 'display:none;'; } ?>" value="TK">Tokelau</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TO"){ echo 'display:none;'; } ?>" value="TO">Tonga</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TT"){ echo 'display:none;'; } ?>" value="TT">Trinidad and Tobago</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TN"){ echo 'display:none;'; } ?>" value="TN">Tunisia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TR"){ echo 'display:none;'; } ?>" value="TR">Turkey</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TM"){ echo 'display:none;'; } ?>" value="TM">Turkmenistan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TC"){ echo 'display:none;'; } ?>" value="TC">Turks and Caicos Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="TV"){ echo 'display:none;'; } ?>" value="TV">Tuvalu</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="UG"){ echo 'display:none;'; } ?>" value="UG">Uganda</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="UA"){ echo 'display:none;'; } ?>" value="UA">Ukraine</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="AE"){ echo 'display:none;'; } ?>" value="AE">United Arab Emirates</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="GB"){ echo 'display:none;'; } ?>" value="GB">United Kingdom</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="US"){ echo 'display:none;'; } ?>" value="US">United States</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="UM"){ echo 'display:none;'; } ?>" value="UM">United States Minor Outlying Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="UY"){ echo 'display:none;'; } ?>" value="UY">Uruguay</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="UZ"){ echo 'display:none;'; } ?>" value="UZ">Uzbekistan</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VU"){ echo 'display:none;'; } ?>" value="VU">Vanuatu</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VE"){ echo 'display:none;'; } ?>" value="VE">Venezuela</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VN"){ echo 'display:none;'; } ?>" value="VN">Viet Nam</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VG"){ echo 'display:none;'; } ?>" value="VG">Virgin Islands (British)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="VI"){ echo 'display:none;'; } ?>" value="VI">Virgin Islands (U.S.)</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="WF"){ echo 'display:none;'; } ?>" value="WF">Wallis and Futuna Islands</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="EH"){ echo 'display:none;'; } ?>" value="EH">Western Sahara</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="YE"){ echo 'display:none;'; } ?>" value="YE">Yemen</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="YU"){ echo 'display:none;'; } ?>" value="YU">Yugoslavia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ZM"){ echo 'display:none;'; } ?>" value="ZM">Zambia</li>
                                    <li style=" <?php if($student_info[0]['home_country']!="ZW"){ echo 'display:none;'; } ?>" value="ZW">Zimbabwe</li>
                              </ul>
                            </td>
                        </tr>
                    <tr>
                		<td>Degree Program</td>
                    	<td>
							<?php 
								if($student_info[0]['degree_program']==0)
									echo 'Undergraduate';
								else if($student_info[0]['degree_program']==1)
									echo 'Masters';
								else if($student_info[0]['degree_program']==2)
									echo 'PH.D';
								else if($student_info[0]['degree_program']==3)
									echo 'Post Doc.';
								else
									echo 'Visiting Scholar';
							?>
                        </td>
                    </tr>
                    <tr>
                		<td>Area of Study</td>
                    	<td><?php echo $student_info[0]['area_of_study']; ?></td>
                    </tr>
                    <tr>
                		<td>Marital Status</td>
                    	<td>
							<?php 
								if($student_info[0]['marital_status']==0)
									echo 'Single';
								else if($student_info[0]['marital_status']==1)
									echo 'Married';
							?>
                        </td>
                    </tr>
                    <tr>
                		<td>If Married, is spouse in the US with them?</td>
                    	<td><?php if($student_info[0]['spouse_here']==0){ echo 'No'; } else{ echo 'Yes'; } ?></td>
                    </tr>
                    <tr>
                		<td>If Married, what is spouses name?</td>
                    	<td><?php echo $student_info[0]['spouse_name']; ?></td>
                    </tr>
                    <tr>
                		<td>Do they smoke?</td>
                    	<td>
							<?php 
								if($student_info[0]['smoke']==0)
									echo 'No';
								else if($student_info[0]['smoke']==1)
									echo 'Yes';
							?>
                        </td>
                    </tr>
                     <tr>
                		<td>Do they have a car they can drive?</td>
                    	<td>
							<?php 
								if($student_info[0]['car']==0)
									echo 'No';
								else if($student_info[0]['car']==1)
									echo 'Yes';
							?>
                        </td>
                    </tr>
                    <tr>
                		<td>Allergies</td>
                    	<td><?php echo $student_info[0]['allergies']; ?></td>
                    </tr>
                    <tr>
                		<td>Foods they don't eat</td>
                    	<td><?php echo $student_info[0]['DNE_foods']; ?></td>
                    </tr>
                    <tr>
                		<td>Activities</td>
                    	<td><?php echo $student_info[0]['activities']; ?></td>
                    </tr>
                    <tr>
                		<td>Languages</td>
                    	<td><?php echo $student_info[0]['languages']; ?></td>
                    </tr>
                    <tr>
                		<td>Places Traveled</td>
                    	<td><?php echo $student_info[0]['travel']; ?></td>
                    </tr>
                    <tr>
                		<td>Do they have children?</td>
                    	<td>
							<?php 
								if($student_info[0]['kids']==0)
									echo 'No';
								else if($student_info[0]['kids']==1)
									echo 'Yes';
							?>
                        </td>
                    </tr>
                    <tr>
                		<td>If yes, are they here?</td>
                    	<td>
							<?php 
								if($student_info[0]['kids_here']==0)
									echo 'No';
								else if($student_info[0]['kids_here']==1)
									echo 'Yes';
							?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- span9 -->
    </div><!-- row-fluid -->
</div>
</body>
</html>