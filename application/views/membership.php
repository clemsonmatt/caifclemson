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
        	<h3>Become a CAIF Community Member</h3>
            <div class="span11">
            	<legend><h4>Membership Duties</h4></legend>
                Becoming a CAIF member does not automatically commit you to hosting a student.  There are a variety of ways to be involved, such as funding 
                support for operations and events, helping with ladies' luncheons, assisting at welcome receptions, potlucks and apartment events or opening 
                your home for a meal.  We ask that all members pay an annual due of $25.00 (more is welcome) and share in some aspect of the organization as 
                we seek to get to know and serve the internationals in our community. 
            </div>
            <div class="span11"></div>
            <div class="span11">
            	<legend><h4>Personal Information</h4></legend>
                <form action="<?php echo base_url().'host/add_member'; ?>" method="post">
                	<table class="table">
                    	<thead>
                        	<th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>Full Name</td>
                                <td><input class="span8" type="text" name="name" /></td>
                            </tr>
                            <tr>
                            	<td>State/Providence</td>
                                <td>
                                	<select name="state">
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
                            	<td>Address</td>
                                <td><input class="span8" type="text" name="address" /></td>
                            </tr>
                            <tr>
                            	<td>Postal/Zip Code</td>
                                <td><input class="span8" type="text" name="zip" /></td>
                            </tr>
                            <tr>
                            	<td>Home Phone</td>
                                <td><input class="span8" type="text" name="home_phone" /></td>
                            </tr>
                            <tr>
                            	<td>Cell Phone</td>
                                <td><input class="span8" type="text" name="cell_phone" /></td>
                            </tr>
                            <tr>
                            	<td>Email</td>
                                <td><input class="span8" type="text" name="email" /></td>
                            </tr>
                        </tbody>
                    </table>	
                    <legend><h4>Login Information</h4></legend>
                    <small>** This login information will be used inorder for you to keep your information up to date.</small>
                    <table class="table">
                    	<thead>
                        	<th></th>
                            <th></th>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>Username</td>
                                <td><input class="span8" type="text" name="username" id="username"/><br />
                                	<span class="checkUser"></span>
                                    <input type="hidden" class="hiddenUrl" />
                                	<!--a href="<?php echo base_url().'host/check_username'; ?>"><button class="btn btn-mini" id="check_username_availability">Check Avaliability</button></a-->
                                </td>
                            </tr>
                            <tr>
                            	<td>Password</td>
                                <td><input class="span8" type="password" name="password" /></td>
                            </tr>
                            <tr>
                            	<td>Password Again</td>
                                <td><input class="span8" type="password" name="password_again" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <small>You will become an active member when your membership dues are in. You may use a PayPal account or make a check payable to CAIF and mail to <a href="<?php echo base_url().'host/officers'; ?>">Elaine Laiewski</a>, 139 Todd's Creek, Central, SC 29630.</small>
                    <br /><br />
                    <input class="btn btn-large" type="submit" value="Become A Member" />
                </form>
            </div>
        </div><!-- span8 -->
        <div class="span4">
        	<ul class="nav nav-list">
                <li class="nav-header">Welcome Navigation</li>
                <li><h5><a href="<?php echo base_url(); ?>">Home</a></h5></li>
                <li><h5><a href="<?php echo base_url().'host/officers'; ?>">Officers</a></h5></li> 
                <li><h5><a href="#">Testimonials</a></h5></li> 
                <li><h5><a href="<?php echo base_url().'host/contact_us'; ?>">Contact Us</a></h5></li>
            </ul>
        </div><!-- span4 -->
    </div><!-- row-fluid -->
    <!--script type="text/javascript" src="<?=base_url()?>js/jquery-1.6.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/check.js"></script-->
    
</div>
</body>
</html>