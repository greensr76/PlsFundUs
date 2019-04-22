<?php

//Page to connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "plsfundus";

$db = new mysqli($servername,$username,$password,$dbName);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//Attempted Session (I've never done of these before)
session_start();

//   if(!isset($_SESSION['userID'])){
//      header("location:login.html");
//      die();
//   }

 ?>
