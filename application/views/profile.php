<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(function(){
	$("#state option[value='<?php echo $profile[0]['state']; ?>']").prop("selected",true);
});
</script>
</head>

<body>
<div class="container">
	<div class="row-fluid">
    	<div class="well span8">
        	<h3><?php echo $profile[0]['name']; ?>'s Profile</h3>
            <form action="<?php echo base_url().'profile/update'; ?>" method="post">
            	<legend><h4>Personal Info</h4></legend>
                <table class="table table-striped">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td>Username</td>
                            <td><?php echo $profile[0]['username']; ?><input style="visibility:hidden" name="username" value="<?php echo $profile[0]['username']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Name</td>
                            <td><input class="input-large" type="text" name="name" value="<?php echo $profile[0]['name']; ?>" /></td>
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
                        	<td>Address</td>
                            <td><input class="input-large" type="text" name="address" value="<?php echo $profile[0]['address']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Postal/Zip</td>
                            <td><input class="input-large" type="text" name="zip" value="<?php echo $profile[0]['zip']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Home Phone</td>
                            <td><input class="input-large" type="text" name="home_phone" value="<?php echo $profile[0]['home_phone']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Cell Phone</td>
                            <td><input class="input-large" type="text" name="cell_phone" value="<?php echo $profile[0]['cell_phone']; ?>" /></td>
                        </tr>
                        <tr>
                        	<td>Email</td>
                            <td><input class="input-large" type="text" name="email" value="<?php echo $profile[0]['email']; ?>" /></td>
                        </tr>
                    </tbody>
                </table>
                <input class="btn btn-large" type="submit" value="Save Profile Changes" />
            </form>
            <br />
            <form>
            	<legend><h4>Change Password</h4></legend>
                <table class="table table-striped">
                	<thead>
                    	<th></th>
                        <th></th>
                    </thead>
                    <tbody>
                		<tr>
                        	<td><strong>Current Password</strong></td><td><input class="input" type="password" name="old_pass" /></td>
                        </tr>
                        <tr>
                			<td><strong>New Password</strong></td><td><input class="input" type="password" name="new_pass" /></td>
                		</tr>
                        <tr>
                        	<td><strong>New Again</strong></td><td><input class="input" type="password" name="new_again_pass" /></td>
                        </tr>
                    </tbody>
                </table>
                <input class="btn btn-large" type="submit" value="Change Password" />
            </form>
        </div>
        <div class="well span4">
        	
        </div>
    </div><!-- row-fluid -->
</div>
</body>
</html>