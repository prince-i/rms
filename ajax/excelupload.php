
<?php
include '../db/config.php';
set_time_limit(0);
$starttime = microtime(true); // Top of page
// Code
    date_default_timezone_set('Asia/Manila');
     $datetoday = date('Y-m-d');
     $time = date('h:i:s a');




    $file_name = basename($_FILES['file']['name']);
    $filetrans = move_uploaded_file($_FILES["file"]["tmp_name"],$file_name);
    $file = $_FILES['file']['name'];
    $row = 1;
    $count = 1;
    if (($handle = fopen($file, "r")) !== FALSE) 
    {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
        {
            $num = count($data);
            // echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            $COLUMN = array();
            for ($c=0; $c < $num; $c++) {
              $data[$c] . "<br />\n";
              $COLUMN[]= $data[$c];

            }
          	if ($row==2) 
          	{
          	}
          	else
          	{	
          		//print_r($arr2);
          		$arr2 = explode('/',$COLUMN[6]);
          		 $date = $arr2[1].'/'.$arr2[2].'/'.$arr2[0];
          		 $date = strtotime($date);
          		//echo $date;
                $newdate = date('Y/m/d',$date);

          		 $sql = "INSERT into tbl_deployedlist (`control_number`,`department_section`,`position`,`gender`,`status`,`names`,`date_deployed`,`batch_no`,`remarks`) VALUES ('$COLUMN[0]','$COLUMN[1]','$COLUMN[2]','$COLUMN[3]','$COLUMN[4]','$COLUMN[5]','$newdate','$COLUMN[7]','$COLUMN[8]')";
          		$query = $db->query($sql);
          	}
        }
        fclose($handle);
//        $endtime = microtime(true); // Bottom of page
// printf("Page loaded in %f seconds", $endtime - $starttime );
      unlink($file_name);
      header('location:../manpowerRequestDataSummary.php?msg="1"');
    }
    ?>