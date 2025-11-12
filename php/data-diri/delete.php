<?php

include_once("config.php");

$nomor = $_GET['nomor'];

$result = mysqli_query($mysqli, "DELETE FROM data_diri_rafli WHERE nomor=$nomor");

header("Location:index.php");
?>