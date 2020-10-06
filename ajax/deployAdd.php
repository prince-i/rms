


<?php
include '../db/config.php';







$control_number = $_POST['controlNumber'];

$sql = "SELECT * FROM tbl_manpowerrequest where control_number like '$control_number' limit 1 ";
$query = $db->query($sql);
while ($res=$query->fetch_assoc()) 
{
	 $department = $res['requesting_department'];
	$position = $res['position'];
	$status = $res['contract_status'];
}
?>














<div class="card">
	<div class="card-title">
		
	</div>

	<div class="card-body" >

<form action="sql/addingdeployProcess.php" method="post">
<!-- for applicant details only xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div class="card"  >
		<div class="card-title">
			<br>
			<label class="h3">&nbsp;&nbsp;&nbsp;Employee's Details</label>
		</div>
		<input type="text" name="control_number" value="<?php echo $control_number;?>" hidden>
		<input type="text" name="department" value="<?php echo $department;?>" hidden>
		<input type="text" name="position" value="<?php echo $position;?>" hidden>
		<input type="text" name="status" value="<?php echo $status;?>"  hidden>




	      <div class="modal-body mx-3">
	        <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fa-user prefix grey-text"></i>
	          <input list="browsers1" id="emp_name" name="emp_name" class="form-control validate" required="">
	          <label style="margin-top: -35px;" for="applicant_name">Employee's Name</label> 
	            <datalist id="browsers1">
	            	<?php

	           			$sel = "SELECT applicant_name,listId from tbl_applicant where assessment_result ='Passed'";
	           			$que = $db->query($sel);
	           			while ($res=$que->fetch_assoc()) 
	           			{
	           				echo "<option value='".$res['applicant_name']."'></option>";
	           			}
	            	?>
		  		    <!-- <option value="P"></option>
		  		    <option value="F"></option> -->
		  		</datalist>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	         <label style="margin-top: -30px;" ">Date of Deployment</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="dateApplied" name="dateDeploy" class="form-control validate" placeholder="Date" >
	        </div>

	     

	         <div class="md-form mb-5" style="width: 250px; margin-top: -225px;margin-left: 380px;">
	          <i class="fas fas fa-list-ol prefix grey-text"></i>
	          <input type="text" id="course" name="batch"  class="form-control validate">
	          <label for="form32">Batch Number</label>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;margin-left: 380px;"">
			<label for="form32" style="margin-top: -35px;">Employee's Gender</label>
         	<i class="fas fa-male prefix grey-text"></i>&nbsp;&nbsp;&nbsp;<i class="fas fa-female prefix grey-text"></i>
         	<select style="margin-left: 40px;margin-top: -25px;" class="browser-default custom-select" name="gender">
	       	<option value="" disabled selected> Choose Gender </option>
	       	<option value="Male">Male</option>
	      	<option value="Female">Female</option>
	      	</select>
       		</div>



			<div class="md-form mb-5" style="width: 250px;margin-left: 380px;">
		        <i class="fas fa-pencil-alt prefix grey-text"></i>
		        <input type="text" id="remarks" name="remarks" class="form-control validate">
		        <label for="remarks">Remarks</label>
	        </div>


<!-- this the button group for adding and cancel -->	        
	        	<input type="submit"  name="add" class="btn blue-gradient" value="Save">
	        
		</form>
	      </div>












      
</div>

<script type="text/javascript">
	$(document).on('keypress',function(e) {
    if(e.which == 13) {
       event.preventDefault();

    }


	});
	$('#emp_name').change(function(){
		$(id)
	});


		




</script>