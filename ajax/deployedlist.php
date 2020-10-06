<?php 
include '../db/config.php';

    $search=isset($_POST['controlNumber'])?$_POST['controlNumber']:'not yet';
?>
<?php

$kiss = "SELECT tbl_manpowerrequest.control_number,(tbl_manpowerrequest.male+tbl_manpowerrequest.female+tbl_manpowerrequest.both_maleandfemale) as totalsum, count(tbl_deployedlist.control_number) as total FROM `tbl_manpowerrequest` LEFT JOIN `tbl_deployedlist` ON tbl_manpowerrequest.control_number = tbl_deployedlist.control_number where tbl_manpowerrequest.control_number = '$search'";
$kissq = $db->query($kiss);
$kissres = $kissq->fetch_assoc();
$a = $kissres['total'];
$b = $kissres['totalsum'];
if ($a == $b) {
  echo '<button class="add btn btn-success" disabled>Add</button>';
}
else
{
   echo '<button class="add btn btn-success">Add</button>';
   echo '<button class="cancel btn btn-danger">Cancel</button>';

}
?>
<!-- REFERENCE NUMBER OF CONTROL NUMBER -->
<input type="hidden" value="<?=$search;?>" id="refControlNum">

<!-- TABLE -->
	<table class="table table-bordered table-hover">
	<thead>
		<th class="h5" style="vertical-align: middle;" >Control Number</th>
    <th class="h5"  style="vertical-align: middle;"><center>Department/Section</center></th>
    <th class="h5"> <center>Position</center></th>
		<th class="h5">Status</th>
    <th class="h5">Name</th>
    <th class="h5">Gender</th>
    <th class="h5">Date deployed</th>
    <th class="h5">Batch No.</th>
   <!--  <th class="h5">School</th> -->
   <!--  <th class="h5">Remarks</th> -->
   
   <th colspan="2" style="text-align:center;"><button class="btn btn-danger" id="delAll" style="display:none;" onclick="deleteAllApp()">Delete All</button></th>
	</thead>
	<tr>
<?php

      
      
     //echo '<table class="table table-bordered" >';
	 $sql = "SELECT * FROM tbl_deployedlist where control_number like '".$search."'";
		//$sql = "SELECT * FROM tbl_applicant limit 10";
  		$query = $db->query($sql);

  	    while ($result = $query->fetch_assoc()) { 
        if($result['department_section'] == 'Production' || $result['department_section'] == 'QA - PPG' || $result['department_section'] == 'QA - FGI' || $result['department_section'] == 'QA - Initial' || $result['department_section'] == 'QA - Final'){
          echo '<script>';
          echo 'document.querySelector("#delAll").style.display = "block"';
          echo '</script>';
        }
        echo "<td>".$result['control_number']."</td>";
   
        // echo "<td>".$result['applied_position']."</td>";
        echo "<td>".$result['department_section']."</td>";
        echo "<td>".$result['position']."</td>";
        echo "<td>".$result['status']."</td>";
        echo "<td>".$result['names']."</td>";
         echo "<td>".$result['gender']."</td>";
        echo "<td>".$result['date_deployed']."</td>";
        echo "<td>".$result['batch_no']."</td>";
        // echo "<td>".$result['school']."</td>";
         echo "<td><a class='edit' href='#".$result['list_id']."'><button class='btn btn-info btn-sm'>Edit</button></a></td>";
         echo "<td><a class='delete' href='delete.php?id=".$result['list_id']."'><button class='btn btn-danger btn-sm'>Delete</button></a></td>";
        echo "<tr>";
       
      }
       echo "</table>";
?>
    </table>

<script type="text/javascript">
  $(document).ready(function()
  {
    $('.add').click(function()
    {
        //Add form for deployed list
      
        $(".ajax").show();
         // var controlNumber = $(this).val();
          var controlNumber = "<?php echo $search;?>";
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
       
        // onClosed: function(){
        //   $("#navbar").slideToggle("slow");
        // },       
        });
         
        $('.ajax').load("ajax/deployAdd.php",{controlNumber:controlNumber }); 
          

      });//this code is for exam result to pop out

      



// this code is for the cancelation of PRF

      $('.cancel').click(function()
    {
      var x = $(this).text();
     var controlNumber = "<?php echo $search;?>";
     //alert(x);
     location.href = "sql/open.php?control="+controlNumber+"&value="+x;
    });
    $('.edit').click(function()
    {
      var id = $(this).attr('href');
      id = id.replace('#','');
      
      $(".ajax").show();
         // var controlNumber = $(this).val();
          var controlNumber = "<?php echo $search;?>";
        $("#modal").iziModal(
        {
        title: "Edit.",
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
       
        // onClosed: function(){
        //   $("#navbar").slideToggle("slow");
        // },       
        });
        $('.ajax').load("ajax/editDeployedlist.php",{controlNumber:id }); 
    });
  });

  // DELETE BY CONTROL NUMBER QA AND PROD ONLY
  const deleteAllApp =()=>{
    control_num = $('#refControlNum').val();
    $.ajax({
      url: 'ajax/deleteDeployNum.php',
      type: 'GET',
      cache: false,
      data:{
        control_num:control_num,
        method: 'deleteCont'
      },success:function(response){
        alert(response);
        location.reload();
        console.log(response);
      },error:function(){

      }
    });
  }
</script>