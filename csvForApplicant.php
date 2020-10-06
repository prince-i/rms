<html>
<meta charset="UTF-8">
<?php
include 'db/config.php';
 $search=isset($_GET['search'])?$_GET['search']:'';
 $column=isset($_GET['column'])?$_GET['column']:'applicant_name';
$datenow = date('M-d');

    $filename = "ApplicantSummary".$datenow.".xls";
    // header("Content-Type: application/vnd.ms-excel");
    header('Content-Type: text/csv; charset=UTF-8');
    header("Content-Disposition:attachment ; filename=\"$filename\"");
    header("Pragma: no-cache");
?>
    <table id="table" border="1" >
            <thead bgcolor="red">
              <th colspan="16"><font size="20">Summary of Applicant</font></th><tr>
              <th bgcolor="#290414" class="h6"><font color="white">Name</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Contact No.</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">School/University</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Course</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Department</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Applied Position</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">TOEIC Result</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Aptitude Result</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Part I</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Part II</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Part III</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Assessment<br>Result</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Date Applied</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Status</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Date of Orientation</font></th>
              <th bgcolor="#290414" class="h6"><font color="white">Remarks</font></th>

            </thead>
        <tr>
      <?php
        $sql = "SELECT * FROM tbl_applicant where $column like '%".$search."%' ";
        $query = $db->query($sql);
        while ($result = $query->fetch_assoc())
        {
          if ($result['assessment_result']=='P') {
            $resultAssessment ='Passed';
          }
          elseif ($result['assessment_result']=='F')
          {
            $resultAssessment = '<font color ="red">Failed</font>' ;
          }
          else
          {
            $resultAssessment='';
          }
          echo "<td>".$result['applicant_name']."</td>";
          echo "<td>".$result['contact_no']."</td>";
          echo "<td>".$result['school']."</td>";
          echo "<td>".$result['course']."</td>";
          echo "<td>".$result['department']."</td>";
          echo "<td>".$result['applied_position']."</td>";
          echo "<td>".$result['TOEIC_result']."</td>";
          echo "<td>".$result['aptitude_result']."</td>";
          echo "<td>".$result['p1']."</td>";
          echo "<td>".$result['p2']."</td>";
          echo "<td>".$result['p3']."</td>";
          echo "<td>".$resultAssessment."</td>";
          echo "<td>".$result['date_applied']."</td>";
          echo "<td>".$result['status']."</td>";
          echo "<td>".$result['date_of_orientation']."</td>";
          echo "<td>".$result['remarks']."</td>";

          echo "<tr>";
        }

      ?>
      </div>
<!-- END OF DIV FOR AJAX -->
      </table>


    <?php

    //header('location:summaryofapplicant.php')
    ?>

  </html>
