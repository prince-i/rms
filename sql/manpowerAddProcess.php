
<?php 
include '../db/config.php';




if (isset($_POST['add'])) 
{
 	$control_number = $_POST['control_number'];
 	$date_request = $_POST['date_request'];
 	$date_received = $_POST['date_received'];
 	$requesting_department = $_POST['requesting_department'];	
 	$position = $_POST['position'];
 	$contract_status = $_POST['contract_status'];
 	$request_date_of_deployment = $_POST['request_date_of_deployment'];
 	$No_of_manpower_request_male = $_POST['No_of_manpower_request_male'];
 	$No_of_manpower_request_female = $_POST['No_of_manpower_request_female'];
 	$No_of_manpower_request_both = $_POST['No_of_manpower_request_both'];
 	$remarks = $_POST['remarks'];
	

	echo $add = "INSERT INTO tbl_manpowerrequest (`control_number`,`date_request`,`date_received_by_recruitment`,`requesting_department`,`position`,`contract_status`,`request_date_of_deployment`,`remarks`,`male`,`female`,`both_maleandfemale`) VALUES ('$control_number','$date_request','$date_received','$requesting_department','$position','$contract_status','$request_date_of_deployment','$remarks','$No_of_manpower_request_male','$No_of_manpower_request_female','$No_of_manpower_request_both')";
	$query= $db->query($add);

	header('location:../manpowerRequestDataSummary.php?msg="success"');





}









 ?>




