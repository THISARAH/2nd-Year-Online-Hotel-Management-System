<?php
include_once("config.php");

$w_id = $_GET["w_id"];

$result = mysqli_query($conn,"DELETE FROM wedding WHERE w_id=$w_id");

header("Location:view.php");
?>