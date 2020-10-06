<?php 
include 'db/config.php';
session_start();

if ($_SESSION['idNumber']!='') 
  {
     $result['id_number'] =   $_SESSION['idNumber']; 
     $result['name'] =   $_SESSION['name'];
     $result['position'] =   $_SESSION['position'];
     $result['department'] =   $_SESSION['department'];
  }  
else
{
  header('location:index.php?msg=1');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Recruitment Monitoring System</title>
</head>
  <link rel="stylesheet" href="plugins/iziModal/css/iziModal.css">
  <link rel="stylesheet" href="plugins/iziModal/css/iziModal.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="bootstrap/jquery.min.js"></script>
  <?php
  	include 'src/link.php';

  ?>
<body class="fixed-sn light-blue-skin">
  <style>
    table{
      zoom:80%;
      size: 15px;
   
  </style>


<!-- Navbar -->
   
<style type="text/css">
  .navbar {
    background-image: linear-gradient(to right, #5DBCD2, #89AEb2,#5DBCD2);
    

  }
</style>



    <nav id="navbar" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><img src="img/fas.png" style="width: 70px;"> </i></a>
      </div>
      <!-- Breadcrumb-->
      
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Message</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['name']; ?></span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="interviewResult.php" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Interview Result
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="summaryofapplicant.php">Summary of Applicant</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </nav>



<!-- nav var end here -->




<?php
if (isset($_POST['btnSubmit'])) 
{
	$applicant_name = $_POST['applicant_name'];

	$sql = "SELECT * FROM tbl_applicant where applicant_name like '$applicant_name%' limit 1";
	$query = $db->query($sql);
	while ($res = $query->fetch_assoc()) {
	
		$applied_position = $res['applied_position'];




	}
}





?>









  <br><br>
  <div class="container-fluid">
    <div class="row">
<div class="card">
	<div class="card-title">
		
	</div>

	<div class="card-body">

<form action="sql/addingInterviewResultProcess.php" method="post">
<!-- for applicant details only xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div class="card" style="width: 1300px; ">
		<div class="card-title">
			<br>
		<center>	<label class="h3">&nbsp;&nbsp;&nbsp;<?php echo $applicant_name; ?></label></center>
		</div>
	      <div class="modal-body mx-3">
	      	
	        <div class="md-form mb-5" style="width: 150px;margin-left: 515px;margin-top: -17px;">
	        	 <label style="margin-left: 35px;">Position</label>
	          <i class="fas fa-map-marked prefix grey-text"></i>
	          <input type="text" id="applicant_position" name="applicant_position" style="text-align: center;" class="form-control validate" value="<?php echo $applied_position;?>">
	          <input type="text" hidden name="applicant_name" value="<?php echo $applicant_name;?>">
	         
	        </div>
	      <br><br><br>
	        <div style="margin-left: -22px;width: 415px;height:200px;  margin-top: -100px;border: 1px solid;box-shadow: 1px 1px 10px 5px #888888">
		        <table class="table table-bordered">
		        	<thead class="text-white" style="background-image: linear-gradient(to right, #5DBCD2, #89AEb2,#5DBCD2);text-align: center;font-weight: 900;vertical-align: middle;">
		        	<th colspan="3" style="width: 1250px;font-weight: bold;">Initial Interview</th>
		        	<tr>
		        	<th style="width: 160px;">Person who conduct Interview</th>
		        	<th style="width: 45px;">Passed or Failed</th>
		        	<th style="width: 200px;">Date of Interview</th>
		        	</thead>
		        	<tr>
		        <tbody>
		        	<td><input type="text" id="interviewerInitial" name="interviewerInitial" class="form-control validate" value="">
	        			</td>
		        	<td><select name="resultInitial" class="browser-default custom-select">
		        			<option selected value=" ">P or F</option>
			        		<option value="p">Passed</option>
			        		<option value="f">Failed</option>
		        		</select>
	         			</td>
		        	<td><input type="date" id="dateInitial" name="dateInitial" class="form-control validate" value="">
	         			</td>
		        </tbody>



		        </table>
	    	</div>



	    	 <div style="margin-left: 410px;width: 415px;height:200px; margin-top: -200px;border: 1px solid;box-shadow: 1px 1px 10px 5px #888888">
		        <table class="table table-bordered">
		        	<thead class="text-white" style="background-image: linear-gradient(to right, #5DBCD2, #89AEb2,#5DBCD2);text-align: center;font-weight: 900;vertical-align: middle;">
		        	<th colspan="4" style="width: 1250px;font-weight: bold;">Final Interview</th>
		        	<tr>
		        	<th>Department</th>
		        	<th style="width: 160px;">Person who conduct Interview</th>
		        	<th style="width: 45px;">Passed or Failed</th>
		        	<th style="width: 200px;">Date of Interview</th>
		        	</thead>
		        	<tr>
		        <tbody>
		        	<td><select name="department" class="browser-default custom-select">
		        			<option selected value=" ">Department</option>
			        		<option value="IT">IT</option>
			        		<option value="HR">HR</option>
		        		</select>
	         			</td>
		        	<td><input type="text" id="interviewerFinal" name="interviewerFinal" class="form-control validate" value="">
	        			</td>
		        	<td><select name="resultFinal" class="browser-default custom-select">
		        			<option selected value=" ">P or F</option>
			        		<option value="p">Passed</option>
			        		<option value="f">Failed</option>
		        		</select>
	         			</td>
		        	<td><input type="date" id="dateFinal" name="dateFinal" class="form-control validate" value="">
	         			</td>
		        </tbody>



		        </table>
	    	</div>

	    	<div style="margin-left: 840px;width: 415px;height:200px; margin-top: -200px;border: 1px solid;box-shadow: 1px 1px 10px 5px #888888">
		        <table class="table table-bordered">
		        	<thead class="text-white" style="background-image: linear-gradient(to right, #5DBCD2, #89AEb2,#5DBCD2);text-align: center;font-weight: 900;vertical-align: middle;">
		        	<th colspan="3" style="width: 1250px;font-weight: bold;">Job Order</th>
		        	<tr>
		        	<th style="width: 160px;">Person who conduct Interview</th>
		        	<th style="width: 45px;">Accepted or Not Accepted</th>
		        	<th style="width: 200px;">Date of Interview</th>
		        	</thead>
		        	<tr>
		        <tbody>
		        	<td><input type="text" id="interviewerJO" name="interviewerJO" class="form-control validate" value="">
	        			</td>
		        	<td><select name="resultJO" class="browser-default custom-select">
		        			<option selected value=" ">P or F</option>
			        		<option value="p">Passed</option>
			        		<option value="f">Failed</option>
		        		</select>
		        	<td><input type="date" id="dateJO" name="dateJO" class="form-control validate" value="">
	         			</td>
		        </tbody>



		        </table>
	    	</div>

	    	<!--Textarea with icon prefix-->
<div class="md-form" style="width: 413px;margin-left: -20px; border: 1px solid;box-shadow: 1px 1px 10px 5px #888888">
  <i style="margin-top: 15px;" class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" name="remarks" class="md-textarea form-control" rows="2"></textarea>
  <label style="margin-top: 25px;" for="form10">Remarks</label>
</div>








<!-- this the button group for adding and cancel -->	        
	        	<input type="submit" name="add" class="btn blue-gradient" value="Save">
	        
</form>
	      </div>
	      
	</div>












</body>









<?php
  include 'src/script.php';
?>








</body>
<?php

if(isset($_GET['msg'])) 
{
    echo "<script> 
Swal.fire({
  position: 'top-center',
  type: 'success',
  title: 'Success',
  showConfirmButton: false,
  timer: 1500
})
</script>";
}

if (isset($_GET['msg1'])) 
{
  
  echo "<script> 
Swal.fire({
  position: 'top-center',
  type: 'success',
  title: 'Update',
  showConfirmButton: false,
  timer: 1500
})
</script>";
}




?>
</html>

