<?php
    include '../db/config.php';
    $id = $_GET['listId'];
    // DELETE QUERY

    $delQry = "DELETE FROM tbl_applicant WHERE listId = '$id'";
    $query = $db->query($delQry);
    echo 'delete';
?>