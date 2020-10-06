<?php

include '../db/config.php';
session_start();



if (isset($_POST['add'])) 
{

  $applicant_name = $_POST['applicant_name'];
  $applied_position = $_POST['applicant_position'];
  $interviewerInitial = $_POST['interviewerInitial'];
  $resultInitial = $_POST['resultInitial'];
  $dateInitial = $_POST['dateInitial'];
  $interviewerFinal = $_POST['interviewerFinal'];
  $resultFinal = $_POST['resultFinal'];
  $dateFinal = $_POST['dateFinal'];
  $interviewerJO = $_POST['interviewerJO'];
  $resultJO = $_POST['resultJO'];
  $dateJO = $_POST['dateJO'];
  $remarks = $_POST['remarks'];




 echo $sql = "INSERT INTO tbl_interviewresult (`applicant_name`,`applied_position`,`initial_interviewer`,`initial_result`,`initial_date`,`final_Department`,`final_interviewer`,`final_result`,`final_date`,`jobOffer_interviewer`,`jobOffer_accept`,`jobOffer_date`,`remarks`) VALUES ('$applicant_name','$applied_position','$interviewerInitial','$resultInitial','$dateInitial','$department','$interviewerFinal','$resultFinal','$dateFinal','$interviewerJO','$resultJO','$dateJO','$remarks')";

$query = $db->query($sql);


// header("location:../interviewResult.php");







}












?>