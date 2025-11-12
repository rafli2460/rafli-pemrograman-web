<?php
include_once("config.php");

$kode = $_GET['kode_kuisxxxx'];
$result = mysqli_query($mysqli, "DELETE FROM tb_kuisxxxx WHERE kode_kuisxxxx='$kode'");

header("Location:index.php");
?>