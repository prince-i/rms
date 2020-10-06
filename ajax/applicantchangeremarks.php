<?php



$listId = $_POST['listId'];
$name = $_POST['name'];
if (isset($_POST['remarks'])) {
include '../db/config.php';	 
	 echo$remarks = $_POST['remarks'];

	echo $sql = "UPDATE tbl_applicant SET remarks = '$remarks' where listId = '$listId'";
	 $query = $db->query($sql);

	 header('location:../summaryofapplicant.php?msg=$sql');
}



?>

<form action = "ajax/applicantchangeremarks.php" method="post">

<input type="hidden" name="listId" value="<?php echo $listId;?>">
	
<input type="text" name="remarks" class="form-control" value="<?php echo $name;?>" autocomplete="off">

</form>


