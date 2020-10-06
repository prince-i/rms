
<?php 
include '../db/config.php';




if (isset($_POST['edit'])) 
{
	$list_Id = $_POST['list_Id'];
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
	

	// echo $update = "INSERT INTO tbl_manpowerrequest (`control_number`,`date_request`,`date_received_by_recruitment`,`requesting_department`,`position`,`contract_status`,`request_date_of_deployment`,`remarks`,`male`,`female`,`both_maleandfemale`) VALUES ('$control_number','$date_request','$date_received','$requesting_department','$position','$contract_status','$request_date_of_deployment','$remarks','$No_of_manpower_request_male','$No_of_manpower_request_female','$No_of_manpower_request_both')";

 	$update = "UPDATE tbl_manpowerrequest set  control_number ='$control_number',date_request = '$date_request', date_received_by_recruitment = '$date_received', requesting_department = '$requesting_department', position = '$position', contract_status = '$contract_status', request_date_of_deployment = '$request_date_of_deployment', remarks = '$remarks',male = '$No_of_manpower_request_male', female = '$No_of_manpower_request_female', both_maleandfemale = '$No_of_manpower_request_both' WHERE list_Id ='$list_Id' ";

	$query= $db->query($update);

	header('location:../manpowerRequestDataSummary.php?msg="success"');





}









 ?>




