<?php 
	header('Content-Type: application/x-excel');
	header('Content-Disposition: attachment; filename="HostList.csv"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	$headers=array('Username','Name','Address','City','State','Zip Code','Mobile Phone','Home Phone','Work Phone','Email','Small Children','Teen Children','College Children','Grown Children','No Children','Pets','Pet Type','Hobbies','Travel','Languages','Hosting Option','Type Student','Country Pref.','Num of Students','ILEP','Student Name(s)','Donation Amount','Contribution Shirt Size1','Contribution Shirt Size2','Ladies','Event Help','Festival','Bake Dessert','Man Booth','English Classes','Fall English Class','Spring English Class','Summer English Class','Apartment Events','Shopping Trips','Group Outing','Provide Meal','Recruitment','t-shirt Order');

	$row = array($username,$name,$address,$city,$state,$zip,$mPhone,$hPhone,$wPhone,$email,$sm_child,$tn_child,$cl_child,$gr_child,$no_child,$pet,$pet_type,$hobbies,$travel,$languages,$host_option,$type_stu,$country,$students,$ILEP,$stu_name,$donation,$con_shirt_size1,$con_shirt_size2,$ladies,$event_help,$festival,$bake_dessert,$man_booth,$english_class,$fall_eng_class,$spring_eng_class,$summer_eng_class,$apt_events,$shopping_trips,$group_outing,$provide_meal,$recruitment,$t_shirt);
	
	if ($no_header == 0)
	{
		echo (implode (',',$headers));
		echo ("\n");	
	}
	
	echo (implode (',',$row));
	echo ("\n");	

?>