<?php

//Attempted Session (I've never done of these before)
  include('connect.php');
  session_start();



     $userID = $_SESSION['userID'];

     $sql = mysqli_query($db,"select username from admin where username = '$user_check' ");

     $sql = "SELECT NAME FROM users WHERE ID = '$userID'";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();

     $loginName = $row['NAME'];

     if(!isset($_SESSION['userID'])){
        header("location:login.php");
        die();
     }


 ?>
