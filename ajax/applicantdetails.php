<?php 
include '../db/config.php';

   
?>




	<table class="table table-bordered table-hover">
	<thead>
		<th rowspan="2">Name</th><th><center>Contact Number</center></th><th><center>Gender</center><th><center>School / University</center></th>
		<th><center>Course</center></th><th><center>Employee's Status</center></th>
	</thead>
	<tr>



<?php

       $search=isset($_POST['fname'])?$_POST['fname']:'not yet';
      
     //echo '<table class="table table-bordered" >';
	 $sql = "SELECT * FROM tbl_applicant where listId = ".$search." limit 1";
		//$sql = "SELECT * FROM tbl_applicant limit 10";
  		$query = $db->query($sql);
    
  	    while ($result = $query->fetch_assoc()) {
       
      
        echo "<td>".$result['applicant_name']."</td>";
   
        // echo "<td>".$result['applied_position']."</td>";
         echo "<td>".$result['contact_no']."</td>";
         echo "<td>".$result['gender']."</td>";
        echo "<td>".$result['school']."</td>";
        echo "<td>".$result['course']."</td>";
        echo "<td>".$result['emp_status']."</td>";
        
        echo "<tr>";
?>


	


<?php
      }
    


  	 ?>    