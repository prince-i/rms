


<?php
include '../db/config.php';







$control_number = $_POST['controlNumber'];

$sql = "SELECT * FROM tbl_deployedlist where list_id like '$control_number' limit 1 ";
$query = $db->query($sql);
while ($res=$query->fetch_assoc()) 
{
	 $names = $res['names'];
	 $dateDeploy = $res['date_deployed'];
	 $batch = $res['batch_no'];
	 //$status = $res['applicant_status'];
	 $gender = $res['gender'];
	 $position = $res['position'];
	 $contract_status = $res['status'];
	 //$remarks = $res['remarks'];

}
?>














<div class="card">
	<div class="card-title">
		
	</div>

	<div class="card-body" >

<form action="sql/editdeployProcess.php" method="post">
<!-- for applicant details only xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div class="card"  >
		<div class="card-title">
			<br>
			<label class="h3">&nbsp;&nbsp;&nbsp;Employee's Details</label>
		</div>
		<input type="text" name="control_number" value="<?php echo $control_number;?>" hidden>
	      <div class="modal-body mx-3">
	        <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fa-user prefix grey-text"></i>
	          <input list="browsers1" id="emp_name" name="emp_name" class="form-control validate" value="<?php echo $names;?>" required="">
	          <label style="margin-top: -35px;" for="applicant_name">Employee's Name</label> 
	            
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	         <label style="margin-top: -30px;" ">Date of Deployment</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="dateApplied" name="dateDeploy" class="form-control validate" value="<?php echo $dateDeploy; ?>" >
	        </div>

	     







	         <div class="md-form mb-5" style="width: 250px; margin-top: -170px;margin-left: 380px;">
	          <i class="fas fas fa-list-ol prefix grey-text"></i>
	          <input type="text" id="course" name="batch"  class="form-control validate" value="<?php echo $batch;?>">
	          <label style="margin-top: -35px;" for="form32">Batch Number</label>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;margin-left: 380px;"">
			<label for="form32" style="margin-top: -35px;">Employee's Gender</label>
         	<i class="fas fa-male prefix grey-text"></i>&nbsp;&nbsp;&nbsp;<i class="fas fa-female prefix grey-text"></i>
         	<select style="margin-left: 40px;margin-top: -25px;" class="browser-default custom-select" name="gender">
	       	<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
	       	<option value="Male">Male</option>
	      	<option value="Female">Female</option>
	      	</select>
       		</div>


			<div style="margin-left: 800px;margin-top: -170px;">
	           <div class="md-form mb-5" style="width: 250px;">
	    	    <label for="form32" style="margin-top: -35px;">Position</label>
	        <i class="fas fa-users prefix grey-text"></i>
	   
	       	<select style="margin-left: 40px;" class="browser-default custom-select" name="position">
	       	<option value="<?php echo $position;?>"> <?php echo $position;?> </option>
	       	<option value="Associate">Associate</option>

	      	<option value="Jr Staff">Jr Staff</option>
	      	<option value="Staff">Staff</option>
	      	<option value="Supervisor">Supervisor</option>
	      	<option value="Assistant Manager">Assistant Manager</option>
	      	<option value="Manager">Manager</option>
	      	</select>
	        </div>

	         <div class="md-form mb-5" style="width: 250px;">
	    	    <label for="form32" style="margin-top: -35px;">Contract Status</label>
	        <i class="fas fa-users prefix grey-text"></i>
	   
	       	<select style="margin-left: 40px;" class="browser-default custom-select" name="contract_status">
	       	<option value="<?php echo $contract_status;?>"><?php echo $contract_status;?> </option>
	       	<option value="Contractual">Contractual</option>
	      	<option value="Probationary">Probationary</option>
	      	 	<option value="SPE">SPE</option>
	      	</select>
	        </div>

<!-- this the button group for adding and cancel -->	        
	        	<input type="submit"  name="edit" class="btn blue-gradient" value="Update">
	        
		</form>
	      </div>












      
</div>

<script type="text/javascript">
	$(document).on('keypress',function(e) {
    if(e.which == 13) {
       event.preventDefault();

    }


	});
	// $('#emp_name').change(function(){
	// 	$(';id)
	// });


		




</script>