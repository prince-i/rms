<?php 
include '../db/config.php';
  $search=isset($_POST['fname'])?$_POST['fname']:'not yet';

$pdf = "SELECT * FROM tbl_files where listId =".$search." limit 1 ";
$pdfq = $db->query($pdf);
  while ($res = $pdfq->fetch_assoc()) {
    
    $fileResume = $res['resume_path'];
    $fileTOEIC = $res['TOEIC_path'];
    $fileAptitude = $res['aptitude_path'];
  }
?>



<form class="md-form" action="sql/fileupload.php" method="post" enctype="multipart/form-data">
	<table class="table table-bordered table-hover">
	<thead>
		<th class="h5" rowspan="2" style="vertical-align: middle;" ><center><a href="<?php echo $fileResume;?>" target="_blank">Name <i class="far fa-file-pdf"></i></a></center></th>
    <th class="h5" rowspan="2" style="vertical-align: middle;"><a href="<?php echo $fileTOEIC;?>" target="_blank"><center>TOEIC <i class="far fa-file-pdf"></i></center></a></th>
    <th class="h5" colspan="4"><center><a href="<?php echo $fileAptitude;?>" target="_blank">Aptitude Result <i class="far fa-file-pdf"></i></center></a></th><tr>
		<th class="h5">Part I</th>
    <th class="h5">Part II</th>
    <th class="h5">Part III</th>
    <th class="h5">Total</th>
	</thead>
	<tr>



<?php

     
      
     //echo '<table class="table table-bordered" >';
	 $sql = "SELECT * FROM tbl_applicant where listId = ".$search." limit 1";
		//$sql = "SELECT * FROM tbl_applicant limit 10";
  		$query = $db->query($sql);
    
  	    while ($result = $query->fetch_assoc()) {
       
      
        echo "<td>".$result['applicant_name']."<input type='text'name='applicant_name' value='".$result['applicant_name']."' hidden=''><input type='text'name='listId' value='".$result['listId']."' hidden=''> </td>";
        
        // echo "<td>".$result['applied_position']."</td>";
        echo "<td>".$result['TOEIC_result']."</td>";
        
        echo "<td>".$result['p1']."</td>";
        echo "<td>".$result['p2']."</td>";
        echo "<td>".$result['p3']."</td>";
        echo "<td>".$result['aptitude_result']."</td>";
        
        
        echo "<tr>";

        //resume
         echo '<td>
               <div class="file-field">
                <div class="btn btn-primary btn-xm float-left">
                  <span>Choose file</span>
                  <input type="file" name="resume" accept="application/pdf">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="resumeName" placeholder="Upload resume">
                 
                </div>
              </div>
           </td>';
          //TOEIC
             echo '<td>
               <div class="file-field">
                <div class="btn btn-primary btn-xm float-left">
                  <span>Choose file</span>
                  <input type="file" name="TOEIC_result">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="TOEIC_result" placeholder="Upload TOEIC Result">
                </div>
              </div>
           </td>';

           //  //Aptitude exam

           echo '<td colspan="3">
               <div class="file-field">
                <div class="btn btn-primary btn-xm float-left">
                  <span>Choose file</span>
                  <input type="file" name="aptitude_result">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="aptitude_result" placeholder="Upload Aptitude Result">
                </div>
              </div>
           </td>';

           //for button
?>

          <td>
            <button class="btn btn-danger" name="upload">Save File</button>
          </td>

<?php

          echo "<tr>";
        echo "</table>";
?>


      <table class="table table-bordered table-hover">
      <thead style="text-align: center;" class="h5">
      <th colspan="9" class="h2" style="background-color: #6d7d8d;color: white;" ><center>Interview Result</center></th>
      <tr>
        <th class="h5" colspan="3"><center>Initial Interview</center></th>
        <th class="h5" colspan="3"><center><a href="#" class="history" >Final Interview</a></center></th>
        <th class="h5" colspan="3"><center>Job Offer</center></th>
        <tr>
          <th class="h5">Person who conduct interview</th>
          <th class="h5">Result</th>
          <th class="h5">Date</th>
          <th class="h5">Person who conduct interview</th>
          <th class="h5">Result</th>
          <th class="h5">Date</th>
          <th class="h5">Person who conduct interview</th>
          <th class="h5">Result</th>
          <th class="h5">Date</th>
        </thead>
        </tr>
          <tr>
<?php
      
        echo "<td>".$result['initial_interviewer']."</td>";
        echo "<td>".$result['initial_result']."</td>";
        echo "<td>".$result['initial_date']."</td>";
        echo "<td>".$result['final_interviewer']."</td>"; 
        echo "<td>".$result['final_result']."</td>";
        echo "<td>".$result['final_date']."</td>";
        echo "<td>".$result['jo_interviewer']."</td>";
        echo "<td>".$result['jo_result']."</td>";
        echo "<td>".$result['jo_date']."</td>";
        
        


      }
    


  	 ?>    
    </tr>
    </table>
 </form>


<script type="text/javascript">
  
  $(document).ready(function(){
   $('.history').click(function(){

    $(".ajax").show();
         // var controlNumber = $(this).val();
          var listId = "<?php echo $search;?>";
        $("#modal").iziModal(
        {

        title: "Add new deployed.",
        height: 1000,
        width: 800,
        fullscreen: false,
        restoreDefaultContent: false,
        openFullscreen: false,
        closeOnEscape: true,
        closeButton: true,
        onFullscreen: function()
        {
          $("#navbar").slideToggle("slow");
          
        },
         onClosed: function(){
          //alert('hi');
          $(".ajax").hide();

        },             
        });
         
        $('.ajax').load("ajax/history.php",{listId:listId }); 

   });


  });


</script>