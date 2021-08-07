<?php
include_once("rConnect.php");

$eID = $_GET["eID"];

$result = mysqli_query($conn,"DELETE FROM employee WHERE eID=$eID");

?>