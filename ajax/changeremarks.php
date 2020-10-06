<?php



$control_number = $_POST['controlNumber'];
$name = $_POST['name'];
if (isset($_POST['remarks'])) {
include '../db/config.php';	 
	 echo$remarks = $_POST['remarks'];

	echo $sql = "UPDATE tbl_manpowerrequest SET remarks = '$remarks' where control_number = '$control_number'";
	 $query = $db->query($sql);

	 header('location:../pedingManpower.php?msg=$sql');
}



?>

<form action = "ajax/changeremarks.php" method="post">

<input type="hidden" name="controlNumber" value="<?php echo $control_number;?>">
	

<textarea name="remarks" class="form-control" autocomplete="off" rows="5"><?php echo $name;?>
</textarea>
<input type="submit" name="btnsubmit" class="btn btn-info">
</form>


