


<?php
include '../db/config.php';






$list_Id = $_POST['controlNumber'];

$sql = "SELECT * FROM tbl_manpowerrequest WHERE list_Id = '$list_Id'  ";
$query = $db->query($sql);
while ($res=$query->fetch_assoc()) 
{
		$control_number = $res['control_number'];
		$date_request = $res['date_request'];
		$date_received_by_recruitment = $res['date_received_by_recruitment'];
		$requesting_department = $res['requesting_department'];
		$position = $res['position'];
		$contract_status = $res['contract_status'];
		$request_date_of_deployment = $res['request_date_of_deployment'];
		$remarks = $res['remarks'];
		$male = $res['male'];
		$female = $res['female'];
		$both_maleandfemale = $res['both_maleandfemale'];


}		
?>














<div class="card">
	<div class="card-title">
		
	</div>

	<div class="card-body" >

<form action="sql/manpowerEditProcess.php" method="post">
<!-- for applicant details only xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div class="card"  >
		<div class="card-title">
			<br>
			<label class="h3">&nbsp;&nbsp;&nbsp;PRF Details</label>
		</div>


	      <div class="modal-body mx-3">
	        <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fa-user prefix grey-text"></i>
	          <input type="hidden" name="list_Id" value="<?php echo $list_Id;?> ">
	          <input type="text" id="control_number" name="control_number" class="form-control validate" value="<?php echo $control_number;?>" >
	          <label for="applicant_name">Control No.</label>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	         <label style="margin-top: -30px;" ">Date of Request</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="date_request" name="date_request" class="form-control validate" value="<?php echo $date_request; ?>" >
	        </div>

	         <div class="md-form mb-5" style="width: 250px;">
	         <label style="margin-top: -30px;" ">Date of Received</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="date_received" name="date_received" class="form-control validate" value="<?php echo $date_received_by_recruitment; ?>" >
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	    	<label style="margin-top: -35px;">Requesting Department</label>
	        <i class="fas fa-users prefix grey-text"></i>
	   
	       	<select style="margin-left: 40px;" class="browser-default custom-select" name="requesting_department">
	       		<option value="<?php echo $requesting_department;?>"> <?php echo $requesting_department; ?> </option>
	       	<?php
	       	$dep = "SELECT * FROM tbl_department";
	       	$depquery = $db->query($dep);
	       	while ($resDep = $depquery->fetch_assoc()) 
	       	{
	       		echo "<option value='".$resDep['Department']."' >".$resDep['Department']."</option>";
	       	}

	       	?>
	   
	       </select>
  		</div>

  		<div style="margin-left: 400px;margin-top: -340px;">
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


	         <div class="md-form mb-5" style="width: 250px;">
	         <label style="margin-top: -30px;" ">Request Date of deployment</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="request_date_of_deployment" name="request_date_of_deployment" class="form-control validate" value="<?php echo $request_date_of_deployment;?>">
	        </div>

	         <div class="md-form mb-5" style="width: 250px;">
	         	 <label style="margin-top: -30px;">No of Man Power Requesting Male</label>
            <i class="fas fas fa-male prefix grey-text"></i>
            <input type="number" id="No_of_manpower_request" name="No_of_manpower_request_male" class="form-control validate" min="0" value="<?php echo $male;?>">
           
        	</div>


			<div class="md-form mb-5" style="width: 250px;">
				   <label style="margin-top: -30px;">Remarks</label>
		        <i class="fas fa-pencil-alt prefix grey-text"></i>
		        <input type="text" id="remarks" name="remarks" autocomplete="off" class="form-control validate" value="<?php echo $remarks;?>">
		     
	        </div>

	       </div>
	        
	         <div class="md-form mb-5" style="width: 270px;margin-left: 700px;margin-top: -175px;">
	         	<label style="margin-top: -30px;">No of Man Power Requesting Female</label>
            <i class="fas fas fa-female prefix grey-text"></i>
            <input type="number" id="No_of_manpower_request" name="No_of_manpower_request_female" class="form-control validate" min="0" value="<?php echo $female;?>">
            
        	</div>


	        <div class="md-form mb-5" style="width: 250px;margin-left: 700px;margin-top: -195px;">
	        <label style="margin-top: -30px;">No of Man Power Requesting Both</label>
            <i class="fas fas fa-female prefix grey-text"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fas fa-male prefix grey-text"></i>
            <input type="number" id="No_of_manpower_request" name="No_of_manpower_request_both" class="form-control validate" min="0
            " value="<?php echo $both_maleandfemale;?>">
            
        	</div>

	     <div style="margin-top:100px; ">

<!-- this the button group for adding and cancel -->	        
	        	<input type="submit"  name="edit" class="btn blue-gradient" value="Save">
	        
		</form>
	      </div>












      
</div>

<script type="text/javascript">
	$(document).on('keypress',function(e) {
    if(e.which == 13) {
       event.preventDefault();

    }


	});


		




</script>