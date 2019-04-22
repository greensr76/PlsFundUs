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
if(!$session_value || $session_value != true){
    header("location:login.html");
    die();
}
else {
  $id = $_SESSION['loginID'];
  $name = $_SESSION['loginUser'];
}

?>
