<?php

  include('connect.php');
  session_start();

  $username = " ";
  $password = " ";

  if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT ID FROM users WHERE NAME = '$username' AND PASSWORD = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        echo "Login Successful";
        $_SESSOIN['loginID'] = $row['ID'];
        $_SESSION['loginUser'] = $username;


      //  header("location: ../index.html");
      }

    else {
      echo "Invalid Login";
    }
  }

  $conn->close();



?>
