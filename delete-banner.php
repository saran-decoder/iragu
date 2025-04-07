<?php

include "libs/load.php";

// Secure delete operation
if (isset($_GET['id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `banner` where `id` = '$delete_id' ")->fetch_array();
    $sql = "DELETE FROM `banner` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                header("Location: vsc.php");
            }
        }
    } else {
        header("Location: vsc.php?error=Failed to delete image");
    }
} 

?>