<?php
$dbHost="localhost";
$dbUser='root';
$dbPass='usbw';
$dbName='user';

if(!$link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)){
	die(mysqli_connect_error());
}

mysqli_set_charset($link, "utf-8");

?>