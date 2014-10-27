<?php 
	header('Content-Type: application/x-excel');
	header('Content-Disposition: attachment; filename="StudentList.csv"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	$headers=array('Username','Host Family Name','Name','American Name','Gender','Country','Birthday','Phone','Apt Complex','Apt Number','Mailing Address','City','Zip Code','Email','Area of Study','Degree Program','Allergies','Languages','Travel','Activities','Marital Status','Is Spouse Here','Spouse Name','Kids','Are Kids Here','Smoking Pref.','Have A Car','Does Not Eat');

	$row = array($username,$host_fam_name,$name,$american_name,$gender,$country,$birthday,$phone,$apt_complex,$apt_num,$mail_addr,$city,$zip,$email,$area_of_study,$deg_pro,$allergies,$languages,$travel,$activities,$marital_status,$spouse_here,$spouse_name,$kids,$kids_here,$smoke,$car,$DNE);
	
	if ($no_header == 0)
	{
		echo (implode (',',$headers));
		echo ("\n");	
	}
	
	echo (implode (',',$row));
	echo ("\n");	

?>