<?php
include('session.php');

//echo $_SESSION("loginID");

$name = "";
$image = "";
$desc = "";
$goal = 0;
$raised = 0;

//Needs to Session User ID
$userID = 1;

  //Only Required Fields
  if(isset($_POST["name"]) && isset($_POST["goal"])){
    $name = $_POST["name"];
    $goal = $_POST["goal"];

    //Optional Fields
    if(isset($_POST["image"])){
      $image = $_POST["image"];
    }
    if(isset($_POST["desc"])){
      $desc = $_POST["desc"];
    }

    $sql = $db->prepare("INSERT INTO funds(NAME, DESCRIPTION, GOAL, RAISED, IMAGE, USERID)
    VALUES(?,?,?,0,?,?)");
    $sql->bind_param("ssisi",$name, $desc, $goal, $image, $userID);

    if ( $sql->execute() === TRUE) {
      echo "Fund Created Successfully";

    //  header("location: ../login.php");
    }


  }


?>
