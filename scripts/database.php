<?php
$hostName = "127.0.0.1:3307";
$dbUser = "root";
$dbPassword = "";
$dbName = "joboncampus";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("Something went wrong!");
}
?>