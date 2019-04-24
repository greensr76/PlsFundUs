<?php
include('session.php');

$name = "";
$image = "";
$desc = "";
$goal = 0;
$raised = 0;

//Only Required Fields
if(isset($_POST["name"]) && isset($_POST["goal"])){
  $name = $_POST["name"];
  $goal = $_POST["goal"];

  //Optional Fields
  if(isset($_POST["image"]) && $_POST["image"] != null) {
    $image = $_POST["image"];
  }
  if(isset($_POST["desc"])) {
    $desc = $_POST["desc"];
  }
  $loginID = $_SESSION["loginID"];

  $data = array($name, $desc, $goal, $raised, $image, $loginID);
  $sql = $db->prepare("INSERT INTO funds(NAME, DESCRIPTION, GOAL, RAISED, IMAGE, USERID)
  VALUES(?,?,?,?,?,?)");

  $sql->execute(array($name, $desc, $goal, $raised, $image, $loginID));
  header("location: ../index.php");
}

?>
