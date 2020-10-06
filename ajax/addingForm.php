
<?php
include '../db/config.php';

?>
<div class="card">
	<div class="card-title">

	</div>

	<div class="card-body">

<form action="	sql/addingProcess.php" method="post">
<!-- for applicant details only xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<div class="card" style="width: 400px; ">
		<div class="card-title">
			<br>
			<label class="h3">&nbsp;&nbsp;&nbsp;Applicant Details</label>
		</div>
	      <div class="modal-body mx-3">
	        <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fa-user prefix grey-text"></i>
	          <input type="text" id="applicant_name" name="applicant_name" class="form-control validate" required="">
	          <label for="applicant_name">Applicant Name</label>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	         <i class="fas fa-mobile-alt prefix grey-text"></i>
	          <input type="text" id="contact_no" name="contact_no" class="form-control validate" required="">
	          <label for="form29">Contact No.</label>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fas fa-university prefix grey-text"></i>
	          <input type="text" id="school" name="school" class="form-control validate" required="">
	          <label for="form32">School / University</label>
	        </div>

	          <div class="md-form mb-5" style="width: 250px;">
	          <i class="fas fas fa-graduation-cap prefix grey-text"></i>
	          <input type="text" id="course" name="course"  class="form-control validate" required="">
	          <label for="form32">Course</label>
	        </div>


 			<div class="md-form mb-5" style="width: 250px;">
			<label for="form32" style="margin-top: -35px;">Employee's Gender</label>
         	<i class="fas fa-male prefix grey-text"></i>&nbsp;&nbsp;&nbsp;<i class="fas fa-female prefix grey-text"></i>
         	<select style="margin-left: 40px;margin-top: -25px;" class="browser-default custom-select" name="gender">
	       	<option value="" disabled selected> Choose Gender </option>
	       	<option value="Male">Male</option>
	      	<option value="Female">Female</option>
	      	<option value="Male&Female">Male and Female</option>
	      	</select>
       		</div>



	        <div class="md-form mb-5" style="width: 250px;">
			  <label for="form32" style="margin-top: -35px;">Employee's Status</label>
         	<i class="fas fa-map-marked prefix grey-text"></i>
         	 	<select style="margin-left: 40px;" class="browser-default custom-select" name="empStatus">
	       	<!-- <option value="" disabled selected> Choose Status </option> -->
	       <!-- 	<option value="Contractual">Contractual</option> -->
	      	<option value="Probationary">Probationary</option>
	      	</select>
       		</div>

<!-- this the button group for adding and cancel -->


	      </div>

	</div>



<!--    EMPLOYEMENT DETAILS          -->

<div class="card" style="width: 910px;height: 735px; margin-left: 410px;margin-top: -650px;">
	<div class="card-title">
		<br>
		<label class="h3">&nbsp;&nbsp;&nbsp;Employment Details
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Test and Interview Result
		</label>
	</div>

    <div class="modal-body mx-3">
	    <div class="md-form mb-5" style="width: 250px;">
	    	  <label for="form32" style="margin-top: -35px;">Department</label>
	        <i class="fas fa-users prefix grey-text"></i>
	        	<select style="margin-left: 40px;" class="browser-default custom-select" name="requesting_department">
	       		<option value="" disabled selected> Choose Department </option>
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



		<div class="md-form mb-5" style="width: 250px;">
			  <label for="form32" style="margin-top: -35px;">Position</label>
         	<i class="fas fa-map-marked prefix grey-text"></i>
         	 	<select style="margin-left: 40px;" class="browser-default custom-select" name="position">
	       	<option value="" disabled selected> Choose Position </option>
	       	<option value="Associate">Associate</option>
	      	<option value="Jr Staff">Jr Staff</option>
	      	<option value="Staff">Staff</option>
	      	<option value="Supervisor">Supervisor</option>
	      	<option value="Assistant Manager">Assistant Manager</option>
	      	<option value="Manager">Manager</option>
	      	</select>

        </div>

        <div class="md-form mb-5" style="width: 250px;">
            <label style="margin-top: -30px;" ">Date Applied</label>
            <i class="fas fas fa-calendar-check prefix grey-text"></i>
            <input type="date" id="dateApplied" name="dateApplied" class="form-control validate" placeholder="Date">
        </div>

       <div class="md-form mb-5" style="width: 250px;">
            <i class="fas fas fa-signal prefix grey-text"></i>
            <label for="form32" style="margin-top: -30px;">Interview Result</label>
	        	<select style="margin-left: 40px;" class="browser-default custom-select" name="interview_remarks">
		       	<option value="N/A"> Choose </option>
		       	<option value="Passed Intial Interview">Passed Intial Interview</option>
		      	<option value="Failed Initial Interview">Failed Initial Interview</option>
	      		<option value="Passed Final Interview">Passed Final Interview</option>
	      		<option value="Failed Final Interview">Failed Final Interview</option>
	      	</select>
        </div>
	</div>
    <div style="margin-left: 350px;margin-top: 75px ;position:absolute;">
      	<div class="modal-body mx-3">
        	<div class="md-form mb-5" style="width: 250px;">
	          	<i class="fas fa-book-open prefix grey-text"></i>
	          	<input type="number" id="toeic" name="toeic" class="form-control validate">
	          	<label for="form34">TOEIC RESULT</label>
       		 </div>

	        <div class="md-form mb-5" style="width: 250px;">
	          <!-- <label for="form29">Aptitude Test Result</label> -->
		        <table class="table table-bordered">
		          	<th colspan="3" class="h5"> </i><center>APTITUDE TEST RESULT</center></th>
		          	<tr>
			          	<th>Part 1</th><th>Part 2</th><th>Part 3</th>
			        </tr>
		          	<tr>
			          	<td><input type="number" min="0" id="part1" name="part1" class="form-control"></td>
			          	<td><input type="number" min="0" id="part2" name="part2" class="form-control"></td>
			          	<td><input type="number" min="0" id="part3" name="part3" class="form-control"></td>
		          	</tr>
		        </table>
	        </div>

	        <div class="md-form mb-5" style="width: 250px;">
	        	<label for="assessment_result" style="margin-top: -30px;">Assessment Result</label>
	            <i class="fas fas fa-list prefix grey-text"></i>
	            <input list="browsers1" id="assessment_result" name="assessment_result" class="form-control validate">

	            <datalist id="browsers1">
		  		    <option value="Passed"></option>
		  		    <option value="Failed"></option>
		  		</datalist>
	        </div>


   		</div>

 	</div>

	<div style="margin-left: 10px;margin-top:450px;z-index:2;position:absolute;">
		<div class="modal-body mx-3">
			<div class="md-form mb-5" style="width: 250px;">
				<label style="margin-top: -30px;" ">Date of Orientation</label>
				<i class="fas fas fa-calendar-check prefix grey-text"></i>
				<input type="date" id="date_of_orientation" name="date_of_orientation" class="form-control " placeholder="Date">
			</div>
			<div class="md-form mb-5" style="width: 250px;">
	            <i class="fas fa-file prefix grey-text"></i>
	            <input type="text" id="remarks" name="remarks" class="form-control validate" autocomplete="off">
	            <label for="remarks">Remarks</label>
			</div>
		</div>
	</div>

</div>



<!-- this for the deployement section -->





<br>



<div class="card">
	<div class="card-title">
		<br>
		<center><label class="h3">
			Interview Result
		</label></center>
	</div>

	<div class="card-body">

	<div class="card" style="width: 1300px; height: 400px; ">

	      <div class="modal-body mx-3">


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
		        	<th colspan="3" style="width: 1250px;font-weight: bold;">Final Interview</th>
		        	<tr>

		        	<th style="width: 160px;">Person who conduct Interview</th>
		        	<th style="width: 45px;">Passed or Failed</th>
		        	<th style="width: 200px;">Date of Interview</th>
		        	</thead>
		        	<tr>
		        <tbody>

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
		        			<option selected value=" ">Accept or Not</option>
			        		<option value="p">Accepted</option>
			        		<option value="f">Not Accepted</option>
		        		</select>
		        	<td><input type="date" id="dateJO" name="dateJO" class="form-control validate" value="">
	         			</td>
		        </tbody>
		        </table>



	    	</div>




	    	<!--Textarea with icon prefix-->
<!-- <div class="md-form" style="width: 413px;margin-left: -20px; border: 1px solid;box-shadow: 1px 1px 10px 5px #888888">
  <i style="margin-top: 15px;" class="fas fa-pencil-alt prefix"></i>
  <textarea id="form10" name="remarksforinterview" class="md-textarea form-control" rows="2"></textarea>
  <label style="margin-top: 25px;" for="form10">Remarks</label>
</div> -->










<!-- this the button group for adding and cancel -->
<br>
	        	<input type="submit" style="" name="add" class="btn blue-gradient" value="Save">

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
