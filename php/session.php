<?php

//Page to connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "plsfundus";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
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
