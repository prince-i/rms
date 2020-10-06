<?php
include '../db/config.php';

$value= $_GET['value'];
$control_number = $_GET['control'];




echo $sql = "UPDATE tbl_manpowerrequest SET remarks = '$value' where control_number = '$control_number'";
$q = $db->query($sql);

header('location:../manpowerRequestDataSummary.php?msg=1')
?>