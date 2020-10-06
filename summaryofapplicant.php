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

<body>
<?php echo date('y');?>
<style type="text/css">
  .navbar
  {
    background-color: #1c2541;
  }
  .dropdown:hover .dropdown-menu
  {
	display: block;
  }
  table
  {
	zoom:85%;
  }


</style>
    <nav id="navbar" class="navbar fixed-top navbar-toggleable-md navbar-expand-lg double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><img src="img/fas.png" style="width: 70px;"> </i></a>
      </div>
		<ul class="nav navbar-nav nav-flex-icons ml-auto">
			<li class="nav-item">
			  <a class="nav-link text-light"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block"><?php echo $_SESSION['name']; ?></span></a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="summaryofapplicant.php" id="navbarDropdownMenuLink" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
			  Summary of Applicant
			  </a>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="manpowerRequestDataSummary.php?year=<?=substr(date('y'),-2)?>"><i class="fas fa-file-powerpoint">&nbsp;Man Power Request Data Summary</i></a>
				 <a class="dropdown-item" href="summaryofapplicant.php"><i class="fas fa-file-invoice">&nbsp;Summary of Applicant</i></a>
				  <a class="dropdown-item" href="pedingManpower.php"><i class="fas fa-file-export">&nbsp;Pending Manpower Request</i></a>
			   <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt">Logout</i></a>
			  </div>
			</li>
		</ul>
    </nav>

  <br><br>

<div class="container-fluid">
	<div class="row">
	<!-- STATION -->
		<div class="col-lg-12">
			<div class="card mt-4">
				<div class="card">
				<div class="card-header">
				 <p class="h3"> Summary of Applicant</p>
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
					<option value=" applicant_name">Name</option>
					 <option value="department">Department</option>
					  <option value="applied_position">Applied Position</option>
					   <option value="assessment_result">Assessment Result</option>
						<option value="date_applied">Date Applied</option>
						 <option value="interview_remarks">Interview Result</option>
						 <option value="date_of_orientation">Date of Orientation</option>
				  </select>
				</div>
				<br><br>

	<!-- END OF SEARCH SECTION -->
	<!--  Button section -->
				 <!--  <div class="group" style="margin-left: 900px;position: absolute;margin-top: 35px;">
				  <div style="margin-top: 50px;position: absolute;">
					 <a href="ajax/bar.php" target="_blank" class="btn blue-gradient"><i class="fas fa-chart-bar">&nbsp;DashBoard</i></a>
				   </div>
				</div> -->
				<div class="group" style="margin-left: 1080px;position: absolute;margin-top: 35px;">
				  <div style="margin-top: 50px;position: absolute;">
					  <button id="btnModal" class="btn blue-gradient" data-izimodal-open='#modalADD' data-izimodal-transitionin='fadeInDown'><i class="fas fa-user-plus">&nbsp;ADD</i></button>
				   </div>
				</div>
				<div class="group" style="margin-left: 1200px;position: absolute;margin-top: 35px;">
				  <div style="margin-top: 50px;position: absolute;">
					  <button id="btnPrint" class="btnPrint btn blue-gradient" ><i class="fas fa-print">&nbsp;Print</i></button>
				   </div>
				</div>
	       <!--  END OF BUTTON SECTION -->

        <div class="card-body" style="margin-top: 15px;">
        <div id="loader" style="display:block;">
          <center>
          <img src="img/loader.gif" alt="" >
          </center>
        </div>
        <div id= "content" class="row" style="height: 540px;margin-top: -55px;display:none;">
        <!-- LOADER -->



	       <!-- TABLE HEADER SECTION  -->
			   <table id="table1" class="table table-bordered"  style="table-layout: fixed;" >
				<thead class="text-dark" style="background-color: #88A0B9;text-align: center;font-weight: 900;">
				  <th class="h6" style="width: 200px;">Name</th>
				  <th class="h6" style="width: 110px;">Department</th>
				  <th class="h6" style="width: 150px;">Applied Position</th>
				  <th class="h6" style="width: 120px;">Assessment<br>Result</th>
				  <th class="h6" style="width: 115px;">Date Applied</th>
				  <th class="h6" style="width: 120px;">Interview Result</th>
				  <th class="h6" style="width: 110px;">Date of Orientation</th>
				  <th class="h6" style="width: 125px;">Batch</th>
				  <th class="h6" style="width: 120px;">Date Deployed</th>
				  <th class="h6"; style="width: 185px;">Remarks</th>

				  <th></th>

				</thead>
			  </table>
	<!-- END OF TABLE HEADER SECTION  -->

	<!-- this div call for ajax -->
		  <div class="tablesearch" style="overflow-y: scroll;height: 450px;margin-top: -15px;">
		  <table id="table1" class="table table-bordered table-striped table-hover" style="table-layout:fixed;word-wrap: break-word;">

		  <?php
			$sql1 = "SELECT * FROM tbl_applicant";
			$query1 = $db->query($sql1);
		  while ($result = $query1->fetch_assoc()) {

			if ($result['assessment_result']=='Passed') {
				$resultAssessment ='Passed';
			  }
			  elseif ($result['assessment_result']=='Failed')
			  {
				$resultAssessment = '<font color ="red">Failed</font>' ;
			  }
			  else
			  {
				$resultAssessment='';
			  }
				$resultName = $result['applicant_name'];
			   $status =$result['interview_remarks'];
			  $sqlName = "SELECT date_deployed, batch_no from tbl_deployedlist where names like '%$resultName%' LIMIT 1";
			  $queryName = $db->query($sqlName);
			   $rowsnum = mysqli_num_rows($queryName);
			  // if () {
			  //   # code...
			  // }
			  if ($rowsnum == 0) {
				$batch_no = '';
				$date_deployed = '';
			  }
			  else{
			  while ( $res=$queryName->fetch_assoc())
			  {
				$batch_no = $res['batch_no'];
				$date_deployed = $res['date_deployed'];
				$status =$result['interview_remarks'];
			  }
			}
			  echo "<td style='width: 200px;' ><a class='tdname' href='".$result['listId']."' data-izimodal-open='#modal1' data-izimodal-transitionin='fadeInDown'>".$result['applicant_name']."</a></td>";
			  echo "<td style='width: 110px;' >".$result['department']."</td>";
			  echo "<td style='width: 150px;'>".$result['applied_position']."</td>";
			  echo "<td style='width: 120px;' ><a class='tdresult' href='".$result['listId']."' data-izimodal-open='#modal' data-izimodal-transitionin='fadeInDown'>".$resultAssessment."</a></td>";
			  echo "<td style='width: 115px;' >".$result['date_applied']."</td>";
			  echo "<td style='width: 120px;'>".$status."</td>";
			  echo "<td style='width: 110px;'>".$result['date_of_orientation']."</td>";
			  echo "<td style='width: 125px;'>".$batch_no."</td>";
			  echo "<td style='width: 120px;'>".$date_deployed."</td>";
			  echo "<td style='width: 185px;'>".$result['remarks']."</tD>";
        echo "<td>
        <button value = '".$result['listId']."' class='btnEdit btn btn-outline-info waves-effect btn-sm' data-izimodal-open='#modalEdit' data-izimodal-transitionin='fadeInDown'><i class='fas fa-user-edit'>EDIT</i></button>
        <button value = '".$result['listId']."' onclick = 'view(".$result['listId'].")' class='btn btn-danger btn-sm'>Delete</button>
        </td>";
        echo "<tr>";
			}
		  ?>
		  </div>
	<!-- END OF DIV FOR AJAX -->
		  </table>
		  </div>
		</div>
		</div>
	  </div>
	</div>
	</div>
<!-- this is for pop out -->
<!-- Modal for clicking result -->
<div class="modal" id="modal" data-izimodal-group="alerts" role="dialog">
  <div class="ajax"></div>
</div>
<!-- Modal for clicking name -->
<div class="modal1" id="modal1" data-izimodal-group="alerts" role="dialog">
  <div class="ajax"></div>
</div>

<div class="modal" id="modalADD" data-izimodal-group="alerts">
  <div class="ajax"></div>
</div>
<div class="modal" id="modalEdit" data-izimodal-group="alerts">
  <div class="ajax"></div>
</div>
</body>
<?php
  include 'src/script.php';
?>
<script>
  // LOADING ANIMATION
$(document).ready(function(){
  $('#content').css('display','block');
  $('#loader').hide(1000);
});

  $(document).ready(function()
  {
    var hanap ='';
       $('.tdresult').click(function()
       {
        $(".ajax").show();
        var fname = $(this).attr('href');
          $('#name').text(fname);
        $("#modal").iziModal(
        {
        title: "Applicant Test Result",
        height: 1000,
        width: 1200,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function(){
          $("#navbar").slideToggle("slow");
        },
         onClosed: function(){
          $(".ajax").hide();
        },
        });
        $('.ajax').load("ajax/examresult.php", {fname:fname});
          });
      //this code is for exam result to pop out
      $('.search').change(function(){
         var search = $('.search').val();
         var column = $('.column').val();
         $('.tablesearch').load("ajax/query.php", {
          search: search,
          column: column
        });
      });
//second modal for name
      $('.tdname').click(function()
       {
        $(".ajax").show();
        var fname = $(this).attr('href');
          $('#name').text(fname);
        $("#modal1").iziModal(
        {
        title: "Applicant Information",
        height: 1000,
        width: 1200,
        fullscreen: true,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function(){
          $("#navbar").slideToggle("slow");
        },
        // onClosed: function(){
        // $("#navbar").slideToggle("slow");
        //  },
        });
        $('.ajax').load("ajax/applicantdetails.php", {fname:fname});
        });//this code is for exam result to pop out
// this for the ADD button izimodal
      $('#btnModal').click(function()
       {
        $(".ajax").show();
        var fname = $(this).attr('href');
          $('#name').text(fname);
        $("#modalADD").iziModal(
        {
        title: "Add new Applicant",
        height: 1000,
        width: 1200,
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
        $('.ajax').load("ajax/addingForm.php", {fname:fname});
        });//
        $('.btnEdit').click(function()
       {
        $(".ajax").show();
        var id = $(this).val();
        $("#modalEdit").iziModal(
        {
        title: "Update Applicant Details",
        height: 1000,
        width: 1200,
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
          $(".ajax").hide();
        },
        });
        $('.ajax').load("ajax/editForm.php", {id:id});
      });
        $('.btnPrint').click(function(){
           var search = $('.search').val();
           var column = $('.column').val();
          window.location.href = 'csvForApplicant.php?search='+search+'&column='+column;
        });
// UPDATE APPLICANT REMARKS
$('.tdremarks').click(function(){
         var controlNumber1 = $(this).attr('href');
         control_number1 = controlNumber1.split('+');
         var listId = control_number1[0];
         var name = control_number1[1];
        $("#modal").iziModal(
        {
         title: "Update Applicant Remarks"
        });
        $('.ajax').load("ajax/applicantchangeremarks.php",{
          listId:listId,
          name: name
        });
});
 });

//  FOR DELETING APPLICANT
 function view(listId){
  var r = confirm('Delete confirmation. Click "OK" to proceed.');
  if(r == true){
    // IF TRUE OR PRESSED OK DATA WILL DELETE
    $.ajax({
    url: 'ajax/deleteSumApplicant.php',
    cache:false,
    type: 'GET',
    data:{
      listId:listId
    },success:function(response){
      if(response == 'delete'){
        alert('Successfully deleted!');
        location.reload();
      }else{
        alert('Failed!');
      }
    },error:function(){

    }
   });
  }else{
  //  DO NOTHING
  }
 }
</script>
</body>
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
if (isset($_GET['msg1']))
{
      echo "<script>
        Swal.fire({
          position: 'top-center',
          type: 'success',
          title: 'Update',
          showConfirmButton: false,
          timer: 1500
        })
        </script>";
}
?>
</html>
