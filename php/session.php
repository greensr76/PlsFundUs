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

if (!isset($_SESSION)) {
    session_start();
}

$session_value=(isset($_SESSION['loginID']));
$here = basename($_SERVER['PHP_SELF']); // Are we already at login.php?
if(!$session_value && $here != "login.php"){
    header("location:login.php");
    die();
}

?>
