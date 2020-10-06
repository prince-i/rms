<html>
<meta charset="UTF-8">


<?php
include 'db/config.php';
$search=isset($_GET['search'])?$_GET['search']:'';
$column=isset($_GET['column'])?$_GET['column']:'control_number';
$datenow = date('M-d');

    $filename = "ManpowerRequest".$datenow.".xls";
    // header("Content-Type: application/vnd.ms-excel");
       header('Content-Type: text/csv; charset=utf-8');  
    header("Content-Disposition: ; filename=\"$filename\"");

?>



    <table id="table" border="1" >
            <thead bgcolor="red">
              <th colspan="11"><font size="20">Manpower Request Data Summary</font></th><tr>
              <th bgcolor="#290414" class="h6" style="width: 200px;"><font color="white">Control number</font></th>
              <th bgcolor="#290414" class="h6" style="width: 110px;"><font color="white">Date Request</font></th>
              <th bgcolor="#290414" class="h6" style="width: 150px;"><font color="white">Date received by recruitment</font></th>
              <th bgcolor="#290414" class="h6" style="width: 110px;"><font color="white">Requesting Department</font></th>
              <th bgcolor="#290414" class="h6" style="width: 115px;"><font color="white">Position</font></th>
              <th bgcolor="#290414" class="h6" style="width: 200px;"><font color="white">Contract Status</font></th>
              <th bgcolor="#290414" class="h6" style="width: 110px;"><font color="white">Request Date of Deployment</font></th>
              
              <th bgcolor="#290414" class="h6" style="width: 185px;"><font color="white">No. of Manpower request</font></th>
              <th bgcolor="#290414" class="h6" style="width: 185px;"><font color="white">Actual Number deployed</font></th>
              <th bgcolor="#290414" class="h6" style="width: 185px;"><font color="white">Date Deployed</font></th>
              <th bgcolor="#290414" class="h6" style="width: 185px;"><font color="white">PRF Status</font></th>
              <!-- <th bgcolor="#290414" class="h6" style="width: 185px;"><font color="white">Remarks</font></th> -->
            </thead>
       
                <tr class="h6">


<?php
     $sql = "SELECT control_number from tbl_manpowerrequest where $column like '%$search%'";
   $query = $db->query($sql);
   while ($res = $query->fetch_assoc()) 
  {
    $control = $res['control_number'];
    

    $sqlForDate = "SELECT distinct date_deployed from tbl_deployedlist where control_number='$control'";
    $queryForDate = $db->query($sqlForDate);
    //while ($resDate = $queryForDate->fetch_assoc()) 
    //{//date query start here
      
      //$date = $resDate['date_deployed'];
       $count = $queryForDate->num_rows;
       $sql1 = "SELECT list_Id, control_number,date_request,date_received_by_recruitment,requesting_department,position,contract_status,request_date_of_deployment,(male+female+both_maleandfemale) as No_of_manpower_request, remarks from tbl_manpowerrequest where control_number ='$control'limit 1";
       $query1 = $db->query($sql1);
       while ($res1 = $query1->fetch_assoc()) 
       {
           if ($count =='0') {
             $count = 1;
           }
			
           if ($res1['remarks']=='Cancel') {
              $remarks = '<font color="red"> CANCELLED</font>';
           }
           else
           {
            $ctrl = $res1['control_number'];
           $kiss = "SELECT tbl_manpowerrequest.control_number,(tbl_manpowerrequest.male+tbl_manpowerrequest.female+tbl_manpowerrequest.both_maleandfemale) as totalsum, count(tbl_deployedlist.control_number) as total FROM `tbl_manpowerrequest` LEFT JOIN `tbl_deployedlist` ON tbl_manpowerrequest.control_number = tbl_deployedlist.control_number where tbl_manpowerrequest.control_number = '$ctrl'";
                  $kissq = $db->query($kiss);
                  $kissres = $kissq->fetch_assoc();
                  $a = $kissres['total'];
                  $b = $kissres['totalsum'];
                  $p = $res1['requesting_department'];
                  $pe = $res1['position'];
                  if ($a == $b) {
                    $remarks = '<font color="#00008B">CLOSED</font>';
                  }
                 
                  elseif ($a < $b) 
                  {
                    if ($a == 0) {
                       $remarks = '<font color="red" >OPEN</font>';
                    }
                    else{
                    // if (($p == 'Production')&&($pe == 'Associate')) {
                      $remarks = '<font color="#red">LACKING</font>';
                    // }
                    //  else
                    //  {
                    //   $remarks = '<font color="red" >OPEN</font>';
                    //  }
                    }
                  }
                  elseif ($a > $b) 
                  {   
                    // if (($p == 'Production')&&($pe == 'Associate')) {
                      $remarks = '<font color="#00008B">EXCESS</font>';
                    // }

                    //  else
                    //  {
                    //   $remarks = '<font color="red" >OPEN</font>';
                    //  }
                  }
                  else
                  {
                     $remarks = '<font color="red" >OPEN</font>';
                  }
           }
         echo "<td style='vertical-align: middle;width:125px;' rowspan='".$count."'><a class='tdedit' href='".$res1['list_Id']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><i class='fas fa-edit'></i></a><a class='tdresult' href='".$res1['control_number']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><font size='4'>".$res1['control_number']."</font></td>";
         echo "<td style='vertical-align: middle;width:125px;' rowspan='".$count."'><font size='4'>".$res1['date_request']."</font></td>";
         echo "<td style='vertical-align: middle;width:140px;' rowspan='".$count."'><font size='4'>".$res1['date_received_by_recruitment']."</font></td>";
         echo "<td style='vertical-align: middle;width:135px;' rowspan='".$count."'><font size='4'>".$res1['requesting_department']."</font></td>"; 
         echo "<td style='vertical-align: middle;width:120px;' rowspan='".$count."'><font size='4'>".$res1['position']."</font></td>";
         echo "<td style='vertical-align: middle;width:120px;' rowspan='".$count."'><font size='4'>".$res1['contract_status']."</font></td>";
         echo "<td style='vertical-align: middle;width:130px;' rowspan='".$count."'><font size='4'>".$res1['request_date_of_deployment']."</font></td>";
         echo "<td style='vertical-align: middle;width:125px;' rowspan='".$count."'><font size='4'>".$res1['No_of_manpower_request']."</font></td>";
           $sql2 = "SELECT DISTINCT date_deployed from tbl_deployedlist where control_number = '$control'";
           $query2 = $db->query($sql2);
         if ($query2->num_rows < 1) 
         {
           echo "<td style='width:125px;'> </td>";  
           echo "<td style='width:125px;'> </td>";  
         echo "<td style='vertical-align: middle;font-weight:bold;width:125px; ' rowspan='1'><font size='4'>".$remarks."</font></td>";
            echo "<tr>";
         }
         else
         {
           while ($res2=$query2->fetch_assoc()) 
           {
             $disDate = $res2['date_deployed'];
             $sql3 = "SELECT count(list_Id) as actualNo from tbl_deployedlist where control_number ='$control' and date_deployed= '$disDate' ";
             $query3 = $db->query($sql3);
             while ($res3=$query3->fetch_assoc()) 
             {
              echo "<td style='width:125px;'>".$res3['actualNo']."</td>";
              echo "<td style='width:125px;'>".$disDate."</td>";
             echo "<td style='vertical-align: middle;font-weight:bold;width:125px; ' rowspan='1'><font size='4'>".$remarks."</font></td>";
               echo "<tr>";
             } 
           }        
          }
        }
  }
?>
      </table>
     </center>
   </div>
</html>
