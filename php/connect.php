<?php
//Page to connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "plsfundus";

$conn = new mysqli($servername,$username,$password,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
