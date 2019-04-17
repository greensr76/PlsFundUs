<?php
//Building Tables
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "plsfundus";

$conn = new mysqli($servername,$username,$password,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $username = " ";
  $password = " ";

  if(isset(POST_["username"]) && isset(POST_["password"])){
    $username = POST_["username"];
    $password = POST_["password"];

    $sql = "SELECT password FROM users WHERE name = $username";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc(){

          if ($password = $row["password"]){
            echo "Login Successful";
          }
          else{
            echo "Invalid username and password";
          }
        }

  }

  else {
    echo "ALL Fields must be filled out";
  }



?>
