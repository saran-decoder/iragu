<?php

include "libs/load.php";

// Secure delete operation
if (isset($_GET['id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['id']); // Convert to integer to prevent SQL injection
    $sql = "DELETE FROM `cate` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: vsc.php");
        exit;
    } else {
        header("Location: vsc.php?error=Failed to delete image");
    }
} 

?>