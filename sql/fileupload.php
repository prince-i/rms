<?php

include '../db/config.php';
session_start();

if (isset($_POST['upload'])) 
{	
$applicant_name = $_POST['applicant_name'];
$resume = $_FILES['resume'];
$listId = $_POST['listId'];

 $new = str_replace('.', '', $applicant_name);
 $new = str_replace(',', '', $new);
 $new = str_replace(' ', '', $new);


if (file_exists($new)) {
    
$target = $new."/";

//$target = $target.basename($_FILES['resume']['name']);
echo $filename = move_uploaded_file($_FILES["resume"]["tmp_name"],$target. 'resume'.'.pdf');
$filename1 = move_uploaded_file($_FILES["TOEIC_result"]["tmp_name"],$target. 'TOEIC'.'.pdf');
$filename2 = move_uploaded_file($_FILES["aptitude_result"]["tmp_name"],$target. 'Aptitude'.'.pdf');

$resume_path = "sql/".$target."resume.pdf";
$TOEIC_path = "sql/".$target."TOEIC.pdf";
$aptitude_path = "sql/".$target."Aptitude.pdf";


$sql = "INSERT INTO tbl_files (`listId`,`resume_path`,`TOEIC_path`,`aptitude_path`) VALUES ('$listId','$resume_path','$TOEIC_path','$aptitude_path')";
$query = $db->query($sql);


} else {
   



mkdir($new, 777);

$target = $new."/";
//$target = $target.basename($_FILES['resume']['name']);
$filename = move_uploaded_file($_FILES["resume"]["tmp_name"],$target. 'resume'.'.pdf');
$filename1 = move_uploaded_file($_FILES["TOEIC_result"]["tmp_name"],$target. 'TOEIC'.'.pdf');
$filename2 = move_uploaded_file($_FILES["aptitude_result"]["tmp_name"],$target. 'Aptitude'.'.pdf');

$resume_path = "sql/".$target."resume.pdf";
$TOEIC_path = "sql/".$target."TOEIC.pdf";
$aptitude_path = "sql/".$target."Aptitude.pdf";


$sql = "INSERT INTO tbl_files (`listId`,`resume_path`,`TOEIC_path`,`aptitude_path`) VALUES ('$listId','$resume_path','$TOEIC_path','$aptitude_path')";

$query = $db->query($sql);




}







	 	 header("location:../summaryofapplicant.php?msg='successAdd'"); 
} ?>