<?php
include "libs/load.php";

if (isset($_GET['id'])) {
    $conn = Database::getConnect();
    $delete_id = intval($_GET['id']);

    // Step 1: Get the btn-name of the button to delete
    $btnData = $conn->query("SELECT * FROM `cate` WHERE `id` = '$delete_id'")->fetch_assoc();

    if ($btnData) {
        $btnName = $btnData['btn-name'];

        // Step 2: Delete the button
        $deleteButton = $conn->query("DELETE FROM `cate` WHERE `id` = '$delete_id'");

        if ($deleteButton) {
            $subData = $conn->query("SELECT * FROM `sub-cate` WHERE `category` = '$btnName'")->fetch_assoc();
            // Step 3: Optionally delete matching content (assuming `content` table has `category`)
            $contentData = $conn->query("SELECT * FROM `btn-content` WHERE `category` = '$btnName'")->fetch_assoc();

            if ($contentData) {
                $subBtnID = $subData['id'];
                $contentId = $contentData['id'];
                header("Location: delete-subbutton.php?id=" . $subBtnID);
                header("Location: delete-content.php?id=" . $contentId);
                exit;
            }

            // If no matching content, just redirect
            header("Location: vsc.php");
            exit;
        } else {
            header("Location: vsc.php?error=Failed to delete button");
            exit;
        }
    } else {
        header("Location: vsc.php?error=Button not found");
        exit;
    }
}

?>