<?php

$username = "";
$password = "";

if(isset($_POST["username"]) && isset($_POST["password"])){
  $userLogin = $_POST["username"];
  $userPassword = $_POST["password"];

  // Connect to DB
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "plsfundus";

  $db = new mysqli($servername,$username,$password,$dbName);
  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }

  // Register User************************
  if (isset($_POST["register"])){

    $sql = $db->prepare("INSERT INTO users(NAME, PASSWORD) VALUES(?,?)");
    $sql->bind_param("ss",$userLogin, $userPassword);

    if ( $sql->execute() === TRUE) {
      echo "Register Successful";

      header("location: ../login.php");
    }
  }

  // Sign In Existing User *******************
  else{

    $sql = "SELECT * FROM users WHERE NAME = '$userLogin' AND PASSWORD = '$userPassword'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();

      echo "Login Successful";
      session_start();
      $_SESSION['loginID'] = $row['ID'];
      $_SESSION['loginUser'] = $row['Name'];
      header("location: ../index.php");
    }
    else {
      echo "Invalid Login";
    }
  }

}

$db->close();

?>
