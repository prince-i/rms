<?php
include '../db/config.php';
session_start();
 $search = $_POST['search'];
 $column = $_POST['column'];
?>





<center>
              <table class="table table-bordered table-hover" >
          <!--      <thead class="text-dark" style="background-color: #88A0B9;text-align: center;font-weight: 900;">
                <th class="h6" colspan="1" rowspan="2"><center>PRF No. &nbsp;&nbsp;&nbsp;<a id="desc" href="#"><i class="fas fa-angle-up"></i></a></center></th>
                <th class="h6" colspan="1" rowspan="2"><center>Date Request</center></th>
                <th class="h6" colspan="1" rowspan="2"><center>Requesting Department</center></th>
                <th class="h6" colspan="1" rowspan="2"><center>Request Date of Deployment</center></th>
                <th class="h6" colspan="1" rowspan="2"><center>Position</center></th>        
                <th class="h6" colspan="1" rowspan="2"><center></center></th>
                <th class="h6" colspan="3" rowspan="1"><center>Total No. of request</center></th>
                <th class="h6" colspan="1" rowspan="2"><center>Names<br>(for medical & requirements)</center></th>
                <tr>
                  <th colspan="1">Male</th>
                  <th colspan="1">Female</th>
                  <th colspan="1">both</th>
              </thead>
                <tr class="h6">
 -->

<?php
   $sql = "SELECT control_number from tbl_manpowerrequest  where $column like '%$search%' ";
   $query = $db->query($sql);
   while ($res = $query->fetch_assoc()) 
  {
     $control = $res['control_number'];  
       $sql1 = "SELECT control_number,date_request,date_received_by_recruitment,requesting_department,position,contract_status,request_date_of_deployment,remarks,male,female,both_maleandfemale,(male + female + both_maleandfemale) as total from tbl_manpowerrequest where control_number ='$control'limit 1";
       $query1 = $db->query($sql1);
       while ($res1 = $query1->fetch_assoc()) 
      {
        $sqlForme = "SELECT count(control_number) as total from tbl_deployedlist where control_number = '$control' and gender like 'Male'";
        $bilang = $db->query($sqlForme);
        $bilang = $bilang->fetch_array();
        $sqlForme = "SELECT count(control_number) as total from tbl_deployedlist where control_number = '$control' and gender like 'female'";
        $bilang1 = $db->query($sqlForme);
        $bilang1 = $bilang1->fetch_array();

         $p = $res1['requesting_department'];
         $pe = $res1['position'];
         $b = $res1['total'];
         $a = $bilang['total']+$bilang1['total'];
		if ($res1['remarks']=='Cancel'){
		}
		else
		{
				 if ($b <= $a) {
				 }
				 elseif (($p == 'Production')&&($pe == 'Associate')) {
				   # code...
				 }
				 else
				 {
				  $arr[] = $a;
				  $brr[] = $b;
				  $kulang[] = $b - $a;
				  $depart[] = $p;
				  $pos[] = $pe;
				  $stat[] = $res1['contract_status'];
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'><a class='tdresult' href='".$res1['control_number']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'>".$res1['control_number']."</td>";
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'>".$res1['date_request']."</td>";
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'>".$res1['requesting_department']."</td>"; 
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'>".$res1['request_date_of_deployment']."</td>"; 
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'>".$res1['position']."</td>"; 
				 echo "<td style='vertical-align: middle;width:130px;' rowspan='2'>".$res1['contract_status']."</td>"; 
				 echo "<td style='vertical-align: middle; background-color:gray;color:white;width:130px;' rowspan='1'>No. of Request</td>";
				 echo "<td style='vertical-align: middle; background-color:gray;color:white;width:100px;' rowspan='1'>".$res1['male']."</td> ";
				 echo "<td style='vertical-align: middle; background-color:gray;color:white;width:100px;' rowspan='1'>".$res1['female']."</td>";
				 echo "<td style='vertical-align: middle; background-color:gray;color:white;width:100px;' rowspan='1'>".$res1['both_maleandfemale']."</td>";
				 
				 //remarks
				  echo "<td  style='vertical-align: middle;' rowspan='2'><a class='tdremarks' href='".$res1['control_number']."+".$res1['remarks']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><i class='fas fa-pen-square'></i></a><text area style='border:none;' class='form-control' autocomplete='off' rows='5'>".str_replace(',','<br>',$res1['remarks'] ) ."</texta</td>
				  <tr>";
				  //  echo "<td  style='vertical-align: middle;' rowspan='2'><a class='tdremarks' href='".$res1['control_number']."+".$res1['remarks']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><i class='fas fa-pen-square'></i> ".$res1['remarks']."</a></td>
				  // <tr>";
				  //

				 echo "<td style='vertical-align: middle;' rowspan='1'>Deployed</td>";
				 echo "<td style='vertical-align: middle;' rowspan='1'>".$bilang['total']."</td>";
				 echo "<td style='vertical-align: middle;' rowspan='1'>".$bilang1['total']."</td>";
				 echo "<td style='vertical-align: middle;' rowspan='1'></td><tr>";
			 
			   
				 
				 
				   //echo "<tr>";
				  }
		}
    }
  }
?>
              </table>


<script>




$('#desc').click(function(){

$('.divSearch').load("ajax/pendingDesc.php");


});

$('.tdremarks').click(function(){
  

         var controlNumber1 = $(this).attr('href');
         control_number1 = controlNumber1.split('+');

         var controlNumber = control_number1[0];
         var name = control_number1[1];
        
        // if (name='') {
        //   name = 'insert text'
        // }

        // alert(controlNumber);
        $("#modal").iziModal(
        { 
         title: "Update Pending PRF"
        });
         
        $('.ajax').load("ajax/changeremarks.php",{
          controlNumber:controlNumber, 
          name: name
        }); 
          

});


</script>
