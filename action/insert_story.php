<?php
// Report all PHP errors
//error_reporting(E_ALL);

// Force errors to be displayed on the screen
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

$name     = $_POST["name"];
$dob      = $_POST["dob"];
$height   = $_POST["height"];
$hobby    = $_POST["hobby"];
$unit     = $_POST["unit"];

include "connect.php";

// 1. Insert new character into characters table
$sql = "INSERT INTO `characters`
        (`name`, `dob`, `height`, `hobby`, `unit`) 
        VALUES 
        ('$name', '$dob', '$height', '$hobby', '$unit')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error: " . mysqli_error($con);
}else{
    header("location: ../index.php");
    exit;
}