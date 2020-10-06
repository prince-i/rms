<?php


include '../db/config.php';
session_start();

	 $listId = $_POST['id'];
	 $name = $_POST['applicant_name'];
	 $school = $_POST['school'];
	 $contact_no = $_POST['contact_no'];
	 $course = $_POST['course'];
	 $department = $_POST['department'];
	 $applied_position = $_POST['applied_position'];
	 $date_applied = $_POST['dateApplied'];
	 $toeic = $_POST['toeic'];
	 // $status = $_POST['status'];
	 $assessment_result = $_POST['assessment_result'];
	 $part1 = $_POST['part1'];
	 $part2 = $_POST['part2'];
	 $part3 = $_POST['part3'];
	 $total_aptitude = $part1+$part2+$part3;
	 $date_of_orientation = $_POST['date_of_orientation'];
	 $remarks = $_POST['remarks'];
	 $empStatus = $_POST['empStatus'];
	 $gender = $_POST['gender'];
	 $interviewerInitial = $_POST['interviewerInitial'];
	$resultInitial = $_POST['resultInitial'];
	$dateInitial = $_POST['dateInitial'];
	$interviewerFinal = $_POST['interviewerFinal'];
	$resultFinal = $_POST['resultFinal'];
	$dateFinal = $_POST['dateFinal'];
	$interviewerJO = $_POST['interviewerJO'];
	$resultJO = $_POST['resultJO'];
	$dateJO = $_POST['dateJO'];
	$interview_remarks = $_POST['interview_remarks'];
	


	if (($resultFinal =='p')||($resultFinal =='f')) {
	


		echo $sqlFinal = "INSERT INTO tbl_finalhistory (`applicant_id`,`applicant_name`,`applied_position`,`final_department`,`final_interviewer`,`final_result`,`date`) VALUES  ('$listId','$name','$applied_position','$department','$interviewerFinal','$resultFinal','$dateFinal')";
		 $queryFinal = $db->query($sqlFinal);

		}



		 echo $sql = "UPDATE tbl_applicant set applicant_name = '$name', contact_no = '$contact_no', school = '$school', course = '$course', department = '$department', applied_position = '$applied_position', TOEIC_result = '$toeic', aptitude_result = '$total_aptitude', p1 = '$part1', p2 = '$part2', p3 = '$part3', assessment_result = '$assessment_result', date_applied = '$date_applied', interview_remarks = '$interview_remarks', date_of_orientation = '$date_of_orientation', remarks = '$remarks',initial_interviewer='$interviewerInitial',initial_result='$resultInitial',initial_date = '$dateInitial',final_interviewer='$interviewerFinal',final_result='$resultFinal',final_date='$dateFinal',jo_interviewer='$interviewerJO',jo_result='$resultJO',jo_date='$dateJO',emp_status = '$empStatus',gender='$gender' where listId = $listId limit 1";

		$query = $db->query($sql);


		 header('location:../summaryofapplicant.php?msg1="UpdateSuccess"');




?>