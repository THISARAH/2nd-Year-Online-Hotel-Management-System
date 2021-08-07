<?php
include_once("config.php");

$m_id = $_GET["m_id"];

$result = mysqli_query($conn,"DELETE FROM meeting WHERE m_id=$m_id");

header("Location:mView.php");

?>
