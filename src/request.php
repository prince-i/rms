<?php header("Access-Control-Allow-Origin: *");	?>
<?php 
include '../db/config.php';
session_start();
//ADMIN
if(isset($_POST['loginadmin'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	

		$adminLogin = "SELECT * FROM user where username = '$username' and password = '$password' limit 1 ";
		$query = $db->query($adminLogin);
		echo $row = mysqli_num_rows($query);

		if ($row > 0) 
		{
			while ($result = $query->fetch_assoc()) 
			{
				$_SESSION['idNumber'] = $result['id_number'];
				$_SESSION['name'] = $result['name'];
				$_SESSION['position'] = $result['position'];
				$_SESSION['department'] = $result['department'];

				header("location:../manpowerRequestDataSummary.php");

			}
			
		}

		else
			{
				echo "123";
				header("location:../index.php?msg=1");
			}



	
	

}
//LOGIN
?>