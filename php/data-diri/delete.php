<?php

include_once("config.php");

$kode = $_GET['kode_jenis'];

$result = mysqli_query($mysqli, "DELETE FROM tabel_jenis WHERE kode_jenis=$kode");

header("Location:index.php");
?>