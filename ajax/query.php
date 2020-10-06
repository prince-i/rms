<?php 
      include '../db/config.php';
       $search = $_POST['search'];
       $column = $_POST['column'];
      echo '<table id="table1" class="table table-bordered table-striped table-hover" style="table-layout:fixed;word-wrap: break-word;"  >
     ';
      $sql1 = "SELECT * FROM tbl_applicant where $column like '%".$search."%' ";
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
<script>
  $(document).ready(function()
  {
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
        });
        $('.ajax').load("ajax/examresult.php", {fname:fname}); 
          });
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
        });
        $('.ajax').load("ajax/applicantdetails.php", {fname:fname}); 
        });
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
  });
</script>