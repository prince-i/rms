<?php

include '../db/config.php';
session_start();

if (isset($_POST['add'])) 
{	 
	 $name = $_POST['applicant_name'];
	 $school = $_POST['school'];
	 $contact_no = $_POST['contact_no'];
	 $course = $_POST['course'];
	 $department = $_POST['requesting_department'];
	 $applied_position = $_POST['position'];
	 $date_applied = $_POST['dateApplied'];
	 $toeic = $_POST['toeic'];
	 $interview_remarks = $_POST['interview_remarks'];
	 $assessment_result = $_POST['assessment_result'];
	 $part1 = $_POST['part1'];
	 $part2 = $_POST['part2'];
	 $part3 = $_POST['part3'];
	 $total_aptitude = $part1+$part2+$part3;
	 $empStatus = $_POST['empStatus'];
	 $gender = $_POST['gender'];
	 $date_of_orientation = $_POST['date_of_orientation'];
	 $remarks = $_POST['remarks'];





	 //for interviewer details

	$interviewerInitial = $_POST['interviewerInitial'];
	$resultInitial = $_POST['resultInitial'];
	$dateInitial = $_POST['dateInitial'];
	$interviewerFinal = $_POST['interviewerFinal'];
	$resultFinal = $_POST['resultFinal'];
	$dateFinal = $_POST['dateFinal'];
	$interviewerJO = $_POST['interviewerJO'];
	$resultJO = $_POST['resultJO'];
	$dateJO = $_POST['dateJO'];
	
	


	if (($resultFinal =='p')||($resultFinal =='f')) {
		

		$list = "SELECT listId from tbl_applicant order by listId desc limit 1";
		$listquery = $db->query($list);
		$listres = $listquery->fetch_assoc();

		
		$idlist = $listres['listId'] + 1;



		 echo $sqlFinal = "INSERT INTO tbl_finalhistory (`applicant_id`,`applicant_name`,`applied_position`,`final_department`,`final_interviewer`,`final_result`,`date`) VALUES  ('$idlist','$name','$applied_position','$department','$interviewerFinal','$resultFinal','$dateFinal')";
		 $queryFinal = $db->query($sqlFinal);
	}







	echo $sql = "INSERT INTO tbl_applicant (`listId`,`applicant_name`,`contact_no`,`school`,`course`,`emp_status`,`department`,`applied_position`,`TOEIC_result`,`aptitude_result`,`p1`,`p2`,`p3`,`assessment_result`,`date_applied`,`interview_remarks`,`date_of_orientation`,`remarks`,`initial_interviewer`,`initial_result`,`initial_date`,`final_interviewer`,`final_result`,`final_date`,`jO_interviewer`,`jo_result`,`jo_date`,`gender`) 
	 	 VALUES 
	 	 ('','$name','$contact_no','$school','$course','$empStatus','$department','$applied_position','$toeic','$total_aptitude','$part1','$part2','$part3','$assessment_result','$date_applied','$interview_remarks','$date_of_orientation','$remarks','$interviewerInitial','$resultInitial','$dateInitial','$interviewerFinal','$resultFinal','$dateFinal','$interviewerJO','$resultJO','$dateJO','$gender')"; 

	 	$query = $db->query($sql); 







	  header("location:../summaryofapplicant.php?msg='successAdd'"); 
	 	} ?>