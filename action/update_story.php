<?php
include "connect.php";

$char_id  = $_POST['char_id'];
$name     = $_POST["name"];
$dob      = $_POST["dob"];
$height   = $_POST["height"];
$hobby    = $_POST["hobby"];
$unit     = $_POST["unit"];

// 1. Update character details
$sql = "UPDATE `characters` 
        SET 
            `name`   = '$name',
            `dob`    = '$dob',
            `height` = '$height',
            `hobby`  = '$hobby',
            `unit`   = '$unit' 
        WHERE `char_id` = '$char_id'";

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error updating character: " . mysqli_error($con);
} else {
    header("location: ../manage_story.php");
    exit;
}