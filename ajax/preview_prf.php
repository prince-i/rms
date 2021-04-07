<?php
include '../db/prf_connection.php';
$method = $_POST['method'];
if($method == 'fetch_prf_id'){
	$ctrlNum = $_POST['ctrl'];
	$check = "SELECT prf_req_id FROM hired_list_key WHERE prf_number = '$ctrlNum'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	foreach($stmt->fetchALL() as $x){
		echo $x['prf_req_id'];
	}
}
?>