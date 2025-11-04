<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'db';
$databaseName = 'db_jenis70';
$databaseUsername = 'root';
$databasePassword = 'root123';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>