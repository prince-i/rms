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
<!-- <body class="fixed-sn light-blue-skin">
 -->
<body 
>
<!-- Navbar -->
<style type="text/css">
  .navbar {
        background-color: #1c2541;
  }
    .dropdown:hover .dropdown-menu {display: block;}
    table{
      zoom:85%;
    }
 td{
      font-size: 5;
    }
</style>
    <nav id="navbar" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><img src="img/fas.png" style="width: 70px;"> </i></a>
      </div>
      <!-- Breadcrumb-->
      
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
       <!--  <li class="nav-item">
          <a class="nav-link"><i class="fa fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Message</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link text-light"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['name']; ?></span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Pending Manpower Request
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="manpowerRequestDataSummary.php?year=<?=substr(date('y'),-2)?>"><i class="fas fa-file-powerpoint">&nbsp;Man Power Request Data Summary</i></a>
            <a class="dropdown-item" href="summaryofapplicant.php"><i class="fas fa-file-invoice">&nbsp;Summary of Applicant</i></a>
            <a class="dropdown-item" href="#"><i class="fas fa-file-export">&nbsp;Pending Manpower Request</i></a>
            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt">&nbsp;Logout</i></a>
          </div>
        </li>
      </ul>
    </nav>
  <br><br><br>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
           <div class="card-header" style="background-color: #88A0B9;">
             <p class="h3"> Pending Manpower Request </p> 
            </div>
             <div style="position: absolute;margin-left: 76%;margin-top: 5px;">
             <?php
              echo "<button  class='lacki btn btn-success' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown' >Total Lacking Manpower :&nbsp;</i></button>";
             ?>
            </div>
			<!--  SEARCH SECTION -->
            <div style="position: absolute;margin-top: 108px;margin-left: 18px;">
             
            </div>
            <div class="md-form" style="width: 250px;margin-left: 40px;">
              <input type="text" name="search" id="md" class="search form-control">
              <label for="md"><i class="fas fa-search-plus">Search</i></label>
            </div>

             <div style="margin-left: 300px;margin-top: -65px;width: 200px;">
               <select class="column browser-default custom-select">
                <option value=" control_number">PRF No</option>
                 <option value="date_request">Date Request</option>
                  <option value="requesting_department">Requesting Department</option>
                   <option value="request_date_of_deployment">Request Date of Deployment</option>
                    <option value="position">Position</option>
  
              </select>
            </div>
<!-- END OF SEARCH SECTION -->
<center>
    <br>
			<div class="card-body" style="margin-top: 15px;">
          <div class="row" style="height: 140px;margin-top: -55px;width: 101%;margin-left: -2.5%;">
              <table id="table1" class="table table-bordered" style="table-layout: fixed;" >
               <thead class="text-dark" style="background-color: #88A0B9;text-align: center;font-weight: 900;">
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>PRF No. &nbsp;&nbsp;&nbsp;<a id="desc" href="#"><i class="fas fa-angle-up"></i></a></th>
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>Date Request</th>
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>Requesting Department</th>
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>Request Date of Deployment</th>
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>Position</th> 
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center>Status</th>    
                <th class="h6" colspan="1" rowspan="2" style="width: 130px;"><center></th>
                <th class="h6" colspan="3" rowspan="1" style="width: 300px;"><center>Total No. of request</th>
                <th class="h6" colspan="1" rowspan="2"><center>Names<br>(for medical & requirements)</th>
                <tr>
                  <th colspan="1" style="width: 100px;">Male</th>
                  <th colspan="1" style="width: 100px;">Female</th>
                  <th colspan="1" style="width: 100px;">both</th>
              </thead>
                <tr class="h6">
                </table>
              </div>
    <div>
      <CENTER>
        <img src="img/loader.gif" alt="" id="loader">
      </CENTER>
    </div>
 <div class="divSearch" style="overflow-y: scroll;height: 450px;margin-top: -35px;margin-left: -1.3%;width: 102%;display:none;">
 <table id="table1" class="table table-bordered"  style="table-layout:fixed;word-wrap: break-word;">
<?php
$px = 0;
$arr = array();
$brr = array();
$depart = array();
$pos = array();
$stat = array();
$kulang = array();
$remama = array();
   $sql = "SELECT control_number from tbl_manpowerrequest order by control_number ASC";
   $query = $db->query($sql);
   while ($res = $query->fetch_assoc()) 
  {
    $control = $res['control_number'];
       $sql1 = "SELECT control_number,date_request,date_received_by_recruitment,requesting_department,position,contract_status,request_date_of_deployment,remarks,male,female,both_maleandfemale,(male + female + both_maleandfemale) as total from tbl_manpowerrequest where control_number ='$control'  limit 1";
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
				 }
				 else
				 {
          $px++;
				  $arr[] = $a;
				  $brr[] = $b;
				  $kulang[] = $b - $a;
				  $depart[] = str_replace('&','^', $p);
          $remama[] = str_replace(',','^', $res1['remarks']);
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
				  echo "<td  style='vertical-align: middle;' rowspan='2'><a class='tdremarks' href='".$res1['control_number']."+".$res1['remarks']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><i class='fas fa-pen-square'></i></a><text area style='border:none;overflow-y: scroll;height:100px;color:red;font-weight:bold;font-style:italic;font-family:Brushstroke;' class='form-control' autocomplete='off' rows='5'>".str_replace(',','<br>',$res1['remarks'] ) ."</textarea></td>
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
              <?php
              $tta = array_sum($arr);
               $ttb = array_sum($brr);
              $sumof = $ttb-$tta;
              //print_r($kulang);
              ?>
            </center>
            </div>
      </div>  
    </div>  
  </div>
</div>
<div class="modal" id="modal" data-izimodal-group="alerts">
  <div class="ajax"></div>
</div>
</body>
<script>
$(document).ready(function(){
var lack = "<?php echo $sumof;?>";
// alert(lack);
$('.lacki').text('Total Lacking Manpower : '+lack);
$('.lacki').click(function(){
   var pos = <?php echo json_encode($pos);?>;
   var depart = <?php echo json_encode($depart);?>;
   var stat = <?php echo json_encode($stat);?>;
   var kulang = <?php echo json_encode($kulang);?>;
   var remama = <?php echo json_encode($remama);?>;
   // depart12 = depart1.toString();
   
   // depart = depart12.replace(/&/,'+');
   //alert(remama);
   window.location.href = 'ajax/compute.php?pos='+pos+'&depart='+depart+'&stat='+stat+'&kulang='+kulang+'&remama='+remama;

     // $('.ajax').load("ajax/compute.php",{
          
     //    }); 


});


$('.search').change(function(){
var search = $('.search').val();
var column = $('.column').val();
$('.divSearch').load("ajax/pendingSearch.php", {search:search,column:column});
});


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

});

$(document).ready(function(){
  $('#md').attr('disabled','false');
  $('#selectTag').attr('disabled','false');
  $('.divSearch').css('display','block');
  $('#loader').hide(1000);
});
</script>





<?php
  include 'src/script.php';

?>
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
?>


</html>

