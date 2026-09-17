<?php
// Force error reporting to catch hidden errors
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// Correct path to connect.php since delete_story.php is inside the action/ folder
include "connect.php"; 

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // 1. Delete associated rows from key_story first
    $sql_key = "DELETE FROM `key_story` WHERE `char_id` = '$id'";
    mysqli_query($con, $sql_key);

    // 2. Delete character from characters table
    $sql_char = "DELETE FROM `characters` WHERE `char_id` = '$id'";
    $result = mysqli_query($con, $sql_char);

    if (!$result) {
        die("Delete failed: " . mysqli_error($con));
    } else {
        // Redirect back up one folder level to manage_story.php
        header("Location: ../manage_story.php");
        exit();
    }
} else {
    echo "No character ID provided.";
}