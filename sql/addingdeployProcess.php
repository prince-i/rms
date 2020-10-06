
<?php 
include '../db/config.php';




if (isset($_POST['add'])) 
{
 	$control_number = $_POST['control_number'];
 	$department = $_POST['department'];
 	$position = $_POST['position'];
 	$status = $_POST['status'];	
 	$names = $_POST['emp_name'];
 	$date_deployed = $_POST['dateDeploy'];
 	$gender = $_POST['gender'];
 	$batch_no = $_POST['batch'];
 	$remarks = $_POST['remarks'];
 	//$applicant_status = $_POST['applicant_status'];

	echo $add = "INSERT INTO tbl_deployedlist (`control_number`,`department_section`,`position`,`status`,`names`,`date_deployed`,`batch_no`,`remarks`,`gender`) VALUES ('$control_number','$department','$position','$status','$names','$date_deployed','$batch_no','$remarks','$gender')";
	$query= $db->query($add);


	header('location:../manpowerRequestDataSummary.php?msg="success"');

}









 ?>




