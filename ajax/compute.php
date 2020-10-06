<?php
include '../db/config.php';


echo $depart =mysqli_escape_string($db,$_GET['depart']);
  $pos =$_GET['pos'];
  $stat =$_GET['stat'];
  $kulang =$_GET['kulang'];
 echo $remama = mysqli_escape_string($db,$_GET['remama']);

$departArray = explode(",", $depart); 
$posArray = explode(",", $pos);
$statArray = explode(",", $stat);
$kulangArray = explode(",", $kulang);
$remamaArray = explode(",", $remama);


  $count = count($departArray);
 
$tr = "TRUNCATE `tbl_temp";
$q = $db->query($tr);

for ($i=0; $i < $count ; $i++) { 
	$department = str_replace('^','&', $departArray[$i]);
	$remarks = str_replace('^',',', $remamaArray[$i]);
	
 $sql = "INSERT INTO tbl_temp (`department`,`position`,`status`,`lacking`,`remarks`) VALUES ('$department','$posArray[$i]','$statArray[$i]','$kulangArray[$i]','$remarks')";
$query = $db->query($sql);

}

header('location:../lacking.php');

?>


