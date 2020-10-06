<?php
include '../db/config.php';
session_start();
 $search = $_POST['search'];
 $column = $_POST['column'];
?>


<!--   <center>
              <table class="table table-bordered table-hover table-responsive"  >
              <thead class="text-dark" style="background-color: #88A0B9;text-align: center;font-weight: 900;"> 
                <th class="h6"><center>Control number</th>
                <th class="h6"><center>Date Request</th>
                <th class="h6"><center>Date received by recruitment</th>
                <th class="h6"><center>Requesting Department</th>
                <th class="h6"><center>Position</th>
                <th class="h6"><center>Contract Status</th>
                <th class="h6"><center>Request Date of Deployment</th>
                    <th class="h6"><center>PRF status</th>
                <th class="h6"><center>No. of Manpower request</th>
                <th class="h6"><center>actual number deployed</th>
                <th class="h6"><center>date deployed</th>
                <th class="h6"><center>status</th>
             
            </thead>
                <tr class="h6">
 -->


 <table id="table1" class="table table-bordered"  style="table-layout:fixed;word-wrap: break-word;">

<?php
    $sql = "SELECT control_number from tbl_manpowerrequest where $column like '%$search%'";
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

    ////-----edit
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


   // $('.search').change(function(){
   //       var search = $('.search').val();
   //       var column = $('.column').val();
   //         //alert(column);
   //       $('.divSearch').load("ajax/searchmanpower.php", {
   //        search:search,
   //        column:column


   //      });
   //    });

  
  

});


      //end of add form

















</script>
