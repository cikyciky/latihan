<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$db = 'iqis_smk';
$databaseUsername = 'root';
$databasePassword = '';
 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $db); 
 
?>