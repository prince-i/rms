<?php
    include '../db/config.php';

    $method = $_GET['method'];
    if($method == 'deleteCont'){
        // GET CONTROL NUMBER
     echo   $controlNum = $_GET['control_num'];
            // DELETE FUNCTION
            $delQry = "DELETE FROM tbl_deployedlist WHERE control_number ='$controlNum'";
            $query = $db->query($delQry);
            echo 'Deleted !';
        }else{
            echo 'You are attempting to delete an empty list.';
        }
    
?>