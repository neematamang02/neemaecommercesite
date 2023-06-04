<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "eproject";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>