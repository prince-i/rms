<?php

include '../db/config.php';
session_start();



if (isset($_POST['submit'])) {
	

	$id_number = $_POST['id_number'];
	$name = $_POST['fname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$position = $_POST['position'];
	$department = $_POST['department'];


 $sql = "INSERT INTO user (`id_number`,`username`,`password`,`name`,`position`,`department`) VALUES ('$id_number','$username','$password','$name','$position','$department')";
$query = $db->query($sql);


header('location:../index.php?msg1="successfully"');
}





?>