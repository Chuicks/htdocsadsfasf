<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "A3ksala!@";
$dBName = "phpproject01";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
   die("Connection failed:" . mysqli_connect_error());
}

