<?php
include 'db/config.php';


if (isset($_GET['id'])) {
	# code...

$id = $_GET['id'];
echo $sql = "DELETE FROM tbl_deployedlist where list_id = '$id'";
$query=$db->query($sql);

header('location:manpowerRequestDataSummary.php?msg="success"');
}
?>