<?php

$servername = "php24-db-1";
$username   = "app1";
$password   = "LiisiKuusk6";
$dbname     = "app1";

//create database connection

$conn = new mysqli($servername, $username, $password, $dbname);

//check connection

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>