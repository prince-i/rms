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
    zoom:75%;

  }
  td{
    text-align: center;

  }


#overlay-back {
    position   : absolute;
    top        : 0;
    left       : 0;
    width      : 100%;
    height     : 100%;
    background : #000;
    opacity    : 0.6;
    filter     : alpha(opacity=60);
    z-index    : 5;
    display    : none;
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
        <li class="dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
          Man Power Request Data Summary
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="manpowerRequestDataSummary.php"><i class="fas fa-file-powerpoint">&nbsp;Man Power Request Data Summary</i></a>

            <a class="dropdown-item" href="summaryofapplicant.php"><i class="fas fa-file-invoice">&nbsp;Summary of Applicant</i></a>
            <a class="dropdown-item" href="pedingManpower.php"><i class="fas fa-file-powerpoint">&nbsp;Pending Manpower Request</i></a>
            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt">Logout</i></a>

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
             <p class="h3"> Man Power Request Data Summary </p>
             <div style="position: absolute;margin-left: 50%;margin-top: -3.5%;">
             <?php
             $countrequest = "SELECT sum(male+female+both_maleandfemale) as total FROM `tbl_manpowerrequest`";
             $queryRequest = $db->query($countrequest);
             $resultreq = $queryRequest->fetch_assoc();
             echo '<button  class="btn btn-danger btn-md" >Total Manpower Request :&nbsp;'.$resultreq['total'].'</i></button>';
             ?>
           </div>
            <div style="position: absolute;margin-left: 73%;margin-top: -3.5%;">
             <?php
                         $countdeployed = "SELECT count(list_Id) as total FROM `tbl_deployedlist`";
             $querydeployed = $db->query($countdeployed);
             $resultdep = $querydeployed->fetch_assoc();
              echo '<button  class="btn btn-success btn-md" >Total Manpower Deployed :&nbsp;'.$resultdep['total'].'</i></button>';
             ?>
            </div>
          </div>
			<!--  SEARCH SECTION -->

            <div class="md-form" style="width: 250px;margin-left: 40px;">
              <input type="text" name="md" id="md" onchange="tryme()" class="search form-control">

              <label for="md"><i class="fas fa-search-plus">Search</i></label>
            </div>

            <div style="margin-left: 300px;margin-top: -65px;width: 200px;">
               <select class="column browser-default custom-select">
                <option value=" control_number">PRF No.</option>
                 <option value="date_request">Date Request</option>
                  <option value="date_received_by_recruitment">Date received by recruitment</option>
                   <option value="requesting_department">Requesting Department</option>
                    <option value="position">Position</option>
                     <option value="contract_status">Contract Status</option>
                     <option value="request_date_of_deployment">Request Date of Deployment</option>
              </select>



            </div>

            <div>
              <!-- Material unchecked -->
              <div class="form-check" style="margin-left: 21%;margin-top: 1%;">
                <!-- 2019 -->
                <input type="radio" class="form-check-input" id="btn2019" name="materialExampleRadios">
                <label class="form-check-label" for="btn2019">2019</label>
                <!-- 2020 -->
                <input type="radio" class="form-check-input" id="btn2020" name="materialExampleRadios" >
                <label class="form-check-label" for="btn2020">2020</label>
                <!-- 2021 -->
                <input type="radio" class="form-check-input" id="btn2021" checked name="materialExampleRadios" >
                <label class="form-check-label" for="btn2021">2021</label>
              </div>
            </div>



<br>

<!-- END OF SEARCH SECTION -->

<!--  Button section -->
            <div class="group" style="margin-left: 1050px;position: absolute;margin-top: 35px;">
              <div style="margin-top: 50px;position: absolute;">
                  <button id="btnModal" class="btn blue-gradient" data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'><i class="fas fa-user-plus">ADD</i>
                  </button>
               </div>
            </div>
              <div class="group" style="margin-left: 1175px;position: absolute;margin-top: 35px;">
              <div style="margin-top: 50px;position: absolute;">
                  <button id="btnPrint" class="btnPrint btn blue-gradient" ><i class="fas fa-print">&nbsp;Print</i></button>
               </div>
            </div>

              <div class="group" style="margin-left: 865px;position: absolute;margin-top: 35px;">
              <div style="margin-top: 50px;position: absolute;">
                  <button id="btndownload" class="btn blue-gradient" ><i class="fas fa-file-download">&nbsp;Download</i></button>
               </div>
            </div>
            <div class="group" style="margin-left: 705px;position: absolute;margin-top: 35px;">
              <div style="margin-top: 50px;position: absolute;">
                 <button id="btnupload"  data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown' class="btn blue-gradient" ><i class="fas fa-file-upload">&nbsp;Upload</i></button>
               </div>
            </div>
<!--  END OF BUTTON SECTION -->
<!--  <div class="divSearch"> -->
   <center>
    <br>
			 <div class="card-body" style="margin-top: 15px;">
          <div class="row" style="height: 140px;margin-top: -55px;width: 101%;margin-left: -30px;">
             <table id="table1" class="table table-bordered"  style="table-layout: fixed;" >
               <thead class="text-dark" style="background-color: #88A0B9;text-align: center;font-weight: 900;">
                <th style="width: 125px;" class="h6"><center>PRF No.</th>
                <th style="width: 125px;" class="h6"><center>Date Request</th>
                <th style="width: 140px;" class="h6"><center>Date received by recruitment</th>
                <th style="width: 135px;" class="h6"><center>Requesting Department</th>
                <th style="width: 120px;" class="h6"><center>Position</th>
                <th style="width: 120px;" class="h6"><center>Contract Status</th>
                <th style="width: 130px;" class="h6"><center>Request Date of Deployment</th>
                <th style="width: 125px;" class="h6"><center>PRF status</th>
                <th style="width: 125px;" class="h6"><center>No. of Manpower request</th>
                <th style="width: 125px;" class="h6"><center>actual number deployed</th>
                <th style="width: 125px;" class="h6"><center>date deployed</th>
                <!-- <th class="h6"><center>status</th> -->
            </thead>
                <tr class="h6">
              </table>
          </div>
 <div class="divSearch" style="overflow-y: scroll;height: 450px;margin-top: -63px;margin-left: -14px;width: 102%;">
 <table id="table1" class="table table-bordered "  style="table-layout:fixed;word-wrap: break-word;">
<?php
   $sql = "SELECT control_number from tbl_manpowerrequest WHERE control_number like '21%' ";
   $query = $db->query($sql);
   while ($res = $query->fetch_assoc())
  {
    $control = $res['control_number'];


    $sqlForDate = "SELECT distinct date_deployed from tbl_deployedlist where control_number='$control'";
    $queryForDate = $db->query($sqlForDate);

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

         echo "<td style='vertical-align: middle;font-weight:bold;width:125px; ' rowspan='".$count."'><font size='4'>".$remarks."</font></td>";

         echo "<td style='vertical-align: middle;width:125px;' rowspan='".$count."'><font size='4'>".$res1['No_of_manpower_request']."</font></td>";

           $sql2 = "SELECT DISTINCT date_deployed from tbl_deployedlist where control_number = '$control'";
           $query2 = $db->query($sql2);

         if ($query2->num_rows < 1)
         {


           echo "<td style='width:125px;'> </td>";
           echo "<td style='width:125px;'> </td>";

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



      </div>




    </div>

  </div>


</div>



<div class="modal" id="modal" data-izimodal-group="alerts">
  <div class="ajax"></div>
</div>



 <div id="overlay-back"></div>
      <div id="loading" style="display:none;margin-left: 35%;margin-top: -50%;position: fixed;">
          <img src="img/loader.gif" alt="Loading" >
      </div>




</body>

<script>




  $(document).ready(function()
  {
       $('.tdresult').click(function()
       {
        $(".ajax").show();
        var controlNumber = $(this).attr('href');

        $("#modal").iziModal(
        {

        title: "Name of Deployed.",
        height: 1000,
        width: 1400,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function(){
          $("#navbar").slideToggle("slow");

        },
        // onClosed: function(){
        //   $("#navbar").slideToggle("slow");
        // },
        });

        $('.ajax').load("ajax/deployedlist.php", {controlNumber:controlNumber});


        });//this code is for exam result to pop out





      //Add form for deployed list
         $('.addDeployed').click(function()
       {
        $(".ajax").show();
         var controlNumber = $(this).val();

        $("#modal").iziModal(
        {

        title: "Add new deployed.",
        height: 1000,
        width: 800,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function(){
          $("#navbar").slideToggle("slow");

        },
        // onClosed: function(){
        //   $("#navbar").slideToggle("slow");
        // },
        });

        $('.ajax').load("ajax/deployAdd.php",{controlNumber:controlNumber });


          });//this code is for exam result to pop out





//// button for adding PRF ///////////////////
$('#btnModal').click(function()
       {
        $(".ajax").show();
        // var fname = $(this).attr('href');
        // $('#name').text(fname);
        $("#modal").iziModal(
        {
        title: "Add Manpower Request",
        height: 1000,
        width: 600,
        fullscreen: true,
        openFullscreen: true,
        closeOnEscape: true,
        closeButton: true,
        onOpening: function(){
          $("#navbar").slideToggle("slow");

        },
        onClosing: function(){
        $("#navbar").slideToggle("slow");

         },
         onClosed: function(){
          //alert('hi');
          $(".ajax").hide();

        },
        });

        $('.ajax').load("ajax/manpowerAdd.php");

        });//
/////////////////////////////////////////////////////////

   $('.search').change(function(){
         var search = $('.search').val();
         var column = $('.column').val();
           //alert(column);
         $('.divSearch').load("ajax/searchmanpower.php", {
          search:search,
          column:column


        });
      });





//////////////////////////////////////////////////////////////
    $('.btnPrint').click(function(){
           var search = $('.search').val();
           var column = $('.column').val();

             window.location.href = 'csvForManpower.php?search='+search+'&column='+column;

        });

////////////////////////////////////////////////////////////////////////////////



/////////////EEEEEDDDDDIIIIIIITTTTTTTTTTTT
       $('.tdedit').click(function()
       {
        $(".ajax").show();
        var controlNumber = $(this).attr('href');

        $("#modal").iziModal(
        {

        title: "Edit.",
        height: 1000,
        width: 1400,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function(){
          $("#navbar").slideToggle("slow");

        },
        // onClosed: function(){
        //   $("#navbar").slideToggle("slow");
        // },
        });

        $('.ajax').load("ajax/editmanpower.php", {controlNumber:controlNumber});


        });//this cod




       $('#btndownload').click(function(){
          window.location.href= 'file_format/importformat.csv';
       });



/////////////////////////////// for upload



//// button for adding PRF ///////////////////
$('#btnupload').click(function()
       {
        $(".ajax").show();
        // var fname = $(this).attr('href');
        // $('#name').text(fname);
        $("#modal").iziModal(
        {
        title: "Add Manpower Request",
        height: 1000,
        width: 600,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onOpening: function(){
          $("#navbar").slideToggle("slow");

        },
        onClosing: function(){
        $("#navbar").slideToggle("slow");

         },
         onClosed: function(){
          //alert('hi');
          $(".ajax").hide();

        },
        });

        $('.ajax').load("ajax/import.php");

        });//
/////////////////////////////////////////////////////////











});









  $('#btn2019').click(function(){

    //$('.divSearch').load('ajax/manpower2019.php');

   window.location = "manpowerRequestDataSummary2019.php";


  });
$('#btn2020').click(function(){
    window.location = "manpowerRequestDataSummary.php";
  });

  $('#btn2021').click(function(){
    window.location = "manpowerRequestDataSummary2021.php";
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
