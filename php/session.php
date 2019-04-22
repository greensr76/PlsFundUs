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
if (!isset($_SESSION)) {
    session_start();
}

$session_value=(isset($_SESSION['loginID']));
if(!$session_value || $session_value != true){
    header("location:login.html");
    die();
}

?>
