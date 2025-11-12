<?php
include_once("config.php");

$kode = $_GET['kode_kuis1070'];
$result = mysqli_query($mysqli, "DELETE FROM tb_kuis1070 WHERE kode_kuis1070='$kode'");

header("Location:index.php");
?>