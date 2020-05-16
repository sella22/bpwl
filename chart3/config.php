<?php

$databaseHost='localhost';
$databaseName='chart';
$databaseUsername='root';
$databasePassword='';

$conn -> mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($conn-> connect_erno){
	echo die ("Gagal menghubungkan kedatabase".$conn->connect_erno);
}

?>