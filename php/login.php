<?php

  include('connect.php');
  session_start();

  $username = " ";
  $password = " ";

  if(isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //Register User************************
    if (isset($_POST["register"])){


      $sql = $conn->prepare("INSERT INTO users(NAME, PASSWORD) VALUES(?,?)");
      $sql->bind_param("ss",$username, $password);


      if ( $sql->execute() === TRUE) {
          echo "Register Successful";

          header("location: ../login.html");
      }

    }

    //Sing In Existing User *******************
    else{

        $sql = "SELECT ID FROM users WHERE NAME = '$username' AND PASSWORD = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "Login Successful";
            $_SESSOIN['loginID'] = $row['ID'];
            $_SESSION['loginUser'] = $username;


            header("location: ../index.html");
          }

        else {
          echo "Invalid Login";
        }
    }

  }

  $conn->close();



?>
