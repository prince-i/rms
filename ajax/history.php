<?php 
include '../db/config.php';

 $search=isset($_POST['listId'])?$_POST['listId']:'not yet';   
?>

<table class="table table-bordered table-hover">
      <thead style="text-align: center;" class="h5">
      <th colspan="9" class="h2" style="background-color: #6d7d8d;color: white;" ><center>Final Interview History</center></th>
      <tr>
      	<th class="h5" colspan="1"><center>Department</center></th>
        <th class="h5" colspan="1"><center>Interviewer</center></th>
        <th class="h5" colspan="1"><center>Result</center></th>
        <th class="h5" colspan="1"><center>Date</center></th>
        <tr>
        <?php
        $sql = "SELECT * From tbl_finalhistory where applicant_id ='$search'";
        $query= $db->query($sql);
        while ($res=$query->fetch_assoc()) {
        	
         if ($res['final_result']=='p') {
            $resultAssessment ='Passed';
          }
          elseif ($res['final_result']=='f') 
          {
            $resultAssessment = '<font color ="red">Failed</font>' ;
          }
          else
          {
            $resultAssessment='';
          }


        	echo "<td>".$res['final_Department']."</td>";
        	echo "<td>".$res['final_interviewer']."</td>";
        	echo "<td>".$resultAssessment."</td>";
        	echo "<td>".$res['date']."</td><tr>" ;
        }

        ?>
    </table>