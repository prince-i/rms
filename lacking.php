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
.pro{
  background-color: lightblue;
}
.cont{
  background-color: lightgreen;
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
            
            <a class="dropdown-item" href="pedingManpower.php"><i class="fas fa-file-export">&nbsp;Pending Manpower Request</i></a>
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
            <p class="h3">Lacking Manpower</p>
        </div>
  			<div class="card-body" style="margin-top: 15px;">
          <!-- ASSOCIATE - CONTRACTUAL -->
        <div class="row">
          <div class="col-3">
               <table class="cont table table-bordered">
              <th colspan="2"><center style="font-weight:bold;">Associate - Contractual<center></th>
              <tr>
              <th>Department</th>
              <th>Lacking</th>
              <tr>
              <?php
              $AssContra = array();
              $sql = "SELECT department, position, status, SUM(lacking) as total FROM `tbl_temp` Where position ='Associate' and status='Contractual' group by department";
              $query = $db->query($sql);
              while ($res=$query->fetch_assoc())

              {

                $dept = $res['department'];
                $remarksA = array();
                $SELECT = "SELECT remarks from tbl_temp Where position ='Associate' and status='Contractual' and department = '$dept'";
                $query1 = $db->query($SELECT);
                while ($res1 = $query1->fetch_assoc()) {
                  if ($res1['remarks']=="") {
                     $binawas = $res['total'];
                  }
                  elseif($res1['remarks']=="HOLD") {
                     $binawas = $res['total'];
                  }
                  else
                  {
                  $remarksA[] =  str_replace(',','+',$res1['remarks']);
                  }
                 }
                  echo "<td>".$res['department']."</td>";


               if (count($remarksA)>0) {
                 # code...
                $remarksSTR = json_encode($remarksA);
                $remarksRe = str_replace('+',',',$remarksSTR);

               $kulang  = explode(',',$remarksRe);
               $kulangCount = count($kulang);
                $binawas = $res['total'] - $kulangCount;
                }

                echo "<td>".$binawas."</td>";

                $AssContra[] = $binawas;
                echo "<tr>";
              }
              echo "<td style='font-weight:bold'>Total :</td>";
              echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";



              ?>
            </table>

          </div>
          <!-- ASSOCIATE - PROBATIONARY -->
          <div class="col-3">
          <table class="pro table table-bordered">
            <th colspan="2"><center style="font-weight:bold;">Associate - Probationary<center></th>
            <tr>
            <th>Department</th>
            <th>Lacking</th>
            <tr>
            <?php
            $AssContra = array();
            $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position ='Associate' and status='Probationary' group by department";
            $query = $db->query($sql);
           while ($res=$query->fetch_assoc())
             {
                $dept = $res['department'];
                $remarksA = array();
             $SELECT = "SELECT remarks from tbl_temp Where position ='Associate' and status='Probationary' and department = '$dept'";
                $query1 = $db->query($SELECT);
                while ($res1 = $query1->fetch_assoc()) {
                  if ($res1['remarks']=="") {
                     $binawas = $res['total'];
                  }
                  elseif($res1['remarks']=="HOLD") {
                     $binawas = $res['total'];
                  }
                  else
                  {
                  $remarksA[] =  str_replace(',','+',$res1['remarks']);
                  }
                 }
                  echo "<td>".$res['department']."</td>";
               if (count($remarksA)>0) {
                    $remarksSTR = json_encode($remarksA);
                    $remarksRe = str_replace('+',',',$remarksSTR);
                    $kulang  = explode(',',$remarksRe);
                    $kulangCount = count($kulang);
                    $binawas = $res['total'] - $kulangCount;
                }
                echo "<td>".$binawas."</td>";
                  $AssContra[] = $binawas;
                echo "<tr>";
              }
              echo "<td style='font-weight:bold'>Total :</td>";
              echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
              ?>
          </table>
        </div>
        <!-- JR STAFF -->
         <div class="col-3">
          <table class="pro table table-bordered">
            <th colspan="2"><center style="font-weight:bold;">Jr Staff<center></th>
            <tr>
            <th>Department</th>
            <th>Lacking</th>
            <tr>
            <?php
            $AssContra = array();
            $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position ='Jr Staff' and status='Probationary' group by department";
            $query = $db->query($sql);
          while ($res=$query->fetch_assoc())
               {
                $dept = $res['department'];
                $remarksA = array();
                $SELECT = "SELECT remarks from tbl_temp Where position ='Jr Staff' and status='Probationary' and department = '$dept'";
                $query1 = $db->query($SELECT);
               while ($res1 = $query1->fetch_assoc()) {
                  if ($res1['remarks']=== "") {
                     $binawas = $res['total'];
                  }
                  elseif($res1['remarks'] == "HOLD") {
                     $binawas = $res['total'];
                  }
                  else
                  {
                  $remarksA[] =  str_replace(',','+',$res1['remarks']);
                  }
                 }
                  echo "<td>".$res['department']."</td>";
               if (count($remarksA)>0) {
                 # code...
                 $remarksSTR = json_encode($remarksA);
                 $remarksRe = str_replace('+',',',$remarksSTR);
                 $kulang  = explode(',',$remarksRe);
                 $kulangCount = count($kulang);
                 $binawas = $res['total'] - $kulangCount;
                }
                echo "<td>".$binawas."</td>";
                  $AssContra[] = $binawas;
                echo "<tr>";
              }
              echo "<td style='font-weight:bold'>Total :</td>";
              echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
              ?>
          </table>

        </div>
        <!-- STAFF -->
         <div class="col-3">
          <table class="pro table table-bordered">
            <th colspan="2"><center style="font-weight:bold;">Staff<center></th>
            <tr>
            <th>Department</th>
            <th>Lacking</th>
            <tr>
            <?php
            $AssContra = array();
            $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position ='Staff' and status='Probationary' group by department";
            $query = $db->query($sql);
           while ($res=$query->fetch_assoc())
               {
                $dept = $res['department'];
                $remarksA = array();
             $SELECT = "SELECT remarks from tbl_temp Where position ='Staff' and status='Probationary' and department = '$dept'";
                $query1 = $db->query($SELECT);
                 while ($res1 = $query1->fetch_assoc()) {
                  if ($res1['remarks']=="") {
                     $binawas = $res['total'];
                  }
                  elseif($res1['remarks']=="HOLD") {
                     $binawas = $res['total'];
                  }
                  else
                  {
                  $remarksA[] =  str_replace(',','+',$res1['remarks']);
                  }
                 }
                  echo "<td>".$res['department']."</td>";
               if (count($remarksA)>0) {
                 $remarksSTR = json_encode($remarksA);
                 $remarksRe = str_replace('+',',',$remarksSTR);
                 $kulang  = explode(',',$remarksRe);
                 $kulangCount = count($kulang);
                 $binawas = $res['total'] - $kulangCount;
                }
                echo "<td>".$binawas."</td>";
                  $AssContra[] = $binawas;
                echo "<tr>";
              }
              echo "<td style='font-weight:bold'>Total :</td>";
              echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
              ?>
          </table>
        </div>
        <!-- SPE -->
         <div class="col-3">
          <table class="cont table table-bordered" >
            <th colspan="2"><center style="font-weight:bold;">SPE<center></th>
            <tr>
            <th>Department</th>
            <th>Lacking</th>
            <tr>
            <?php
            $AssContra = array();
            $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position ='Associate' and status='SPE' group by department";
            $query = $db->query($sql);
           while ($res=$query->fetch_assoc())

               {

                $dept = $res['department'];
                $remarksA = array();
             $SELECT = "SELECT remarks from tbl_temp Where position ='Associate' and status='SPE' and department = '$dept'";
                $query1 = $db->query($SELECT);
               while ($res1 = $query1->fetch_assoc()) {
                  if ($res1['remarks']=="") {
                     $binawas = $res['total'];
                  }
                  elseif($res1['remarks']=="HOLD") {
                     $binawas = $res['total'];
                  }
                  else
                  {
                  $remarksA[] =  str_replace(',','+',$res1['remarks']);
                  }
                 }
                  echo "<td>".$res['department']."</td>";
               if (count($remarksA)>0) {
                 $remarksSTR = json_encode($remarksA);
                 $remarksRe = str_replace('+',',',$remarksSTR);
                 $kulang  = explode(',',$remarksRe);
                 $kulangCount = count($kulang);
                 $binawas = $res['total'] - $kulangCount;
                }

                echo "<td>".$binawas."</td>";

                $AssContra[] = $binawas;
                echo "<tr>";
              }
              echo "<td style='font-weight:bold'>Total :</td>";
              echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
              ?>
          </table>
        </div>

        <!-- SUPERVISOR -->
        <div class="col-3">
         <table class="cont table table-bordered" >
           <th colspan="2"><center style="font-weight:bold;">Supervisor<center></th>
           <tr>
           <th>Department</th>
           <th>Lacking</th>
           <tr>
           <?php
           $AssContra = array();
           $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position = 'Supervisor' and status= 'Probationary' group by department";
           $query = $db->query($sql);
          while ($res=$query->fetch_assoc())
              {
               $dept = $res['department'];
               $remarksA = array();
            $SELECT = "SELECT remarks from tbl_temp Where position ='Supervisor' and status='Probationary' and department = '$dept'";
               $query1 = $db->query($SELECT);
              while ($res1 = $query1->fetch_assoc()) {
                 if ($res1['remarks']=="") {
                    $binawas = $res['total'];
                 }
                 elseif($res1['remarks']=="HOLD") {
                    $binawas = $res['total'];
                 }
                 else
                 {
                 $remarksA[] =  str_replace(',','+',$res1['remarks']);
                 }
                }
                 echo "<td>".$res['department']."</td>";
              if (count($remarksA)>0) {
                $remarksSTR = json_encode($remarksA);
                $remarksRe = str_replace('+',',',$remarksSTR);
                $kulang  = explode(',',$remarksRe);
                $kulangCount = count($kulang);
                $binawas = $res['total'] - $kulangCount;
               }
               echo "<td>".$binawas."</td>";
                $AssContra[] = $binawas;
               echo "<tr>";
             }
             echo "<td style='font-weight:bold'>Total :</td>";
             echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
             ?>
         </table>
       </div>
       <!-- END OF SUPERVISOR -->

       <!-- ASSISTANT MANAGER -->
        <div class="col-3">
         <table class="cont table table-bordered" >
           <th colspan="2"><center style="font-weight:bold;">Assistant Manager<center></th>
           <tr>
           <th>Department</th>
           <th>Lacking</th>
           <tr>
           <?php
           $AssContra = array();
           $sql = "SELECT department, position, status,remarks, SUM(lacking) as total FROM `tbl_temp` Where position = 'Assistant Manager' AND status = 'Probationary' group by department";
           $query = $db->query($sql);
          while ($res=$query->fetch_assoc())
              {
               $dept = $res['department'];
               $remarksA = array();
            $SELECT = "SELECT remarks from tbl_temp Where position ='Assistant Manager' and status='Probationary' AND status = 'Probationary'  and department = '$dept'";
               $query1 = $db->query($SELECT);
              while ($res1 = $query1->fetch_assoc()) {
                 if ($res1['remarks']=="") {
                    $binawas = $res['total'];
                 }
                 elseif($res1['remarks']=="HOLD") {
                    $binawas = $res['total'];
                 }
                 else
                 {
                 $remarksA[] =  str_replace(',','+',$res1['remarks']);
                 }
                }
                 echo "<td>".$res['department']."</td>";
              if (count($remarksA)>0) {
                $remarksSTR = json_encode($remarksA);
                $remarksRe = str_replace('+',',',$remarksSTR);
                $kulang  = explode(',',$remarksRe);
                $kulangCount = count($kulang);
                $binawas = $res['total'] - $kulangCount;
               }
               echo "<td>".$binawas."</td>";
                $AssContra[] = $binawas;
               echo "<tr>";
             }
             echo "<td style='font-weight:bold'>Total :</td>";
             echo "<td style='font-weight:bold'>".array_sum($AssContra)."</td>";
             ?>
         </table>
       </div>
      </div>
      </div>
    </div>
  </div>
</div>









</body>


</html>
