<?php 
	header('Content-Type: application/x-excel');
	header('Content-Disposition: attachment; filename="RSVPList.csv"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Pragma: public');
	$headers=array('Name','Email','Coming');

	$row = array($name,$email,$coming);
	
	if ($no_header == 0)
	{
		echo (implode (',',$headers));
		echo ("\n");	
	}
	
	echo (implode (',',$row));
	echo ("\n");	

?>