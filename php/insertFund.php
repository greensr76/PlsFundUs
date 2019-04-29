<?php
include('session.php');

$name = "";
$image = "";
$desc = "";
$goal = 0;
$raised = 0;

//Only Required Fields
if(isset($_POST["name"]) && ($_POST["name"] != "") && isset($_POST["goal"]) && $_POST["goal"] != 0){
  $name = $_POST["name"];
  $goal = $_POST["goal"];

  //Optional Fields
  $image = basename($_FILES["image"]["name"]);
  if ($image == "" || $image == null) {
    $image = "test.png";
  } else {
    $image = preg_replace("/ /", "-", $image);
    saveImage();
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

else{
  header("location: ../create.php");
}


function saveImage(){
  $dir = "../images/";
  $newFile = $dir.basename($_FILES["image"]["name"]);
  $newFile = preg_replace("/ /", "-", $newFile);

  $imageFileType = strtolower(pathinfo($newFile,PATHINFO_EXTENSION));
  $upload = 1;

  //Check if actual file
  if(isset($_POST["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $upload = 1;
    } else {
      echo "File is not an image.";
      $upload = 0;
    }
  }

  //Check if file already exists
  if (file_exists($newFile)) {
    echo "Sorry, file already exists.";
    $upload = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }

  //Upload File if passes checks
  if ($upload == 1){
    move_uploaded_file($_FILES["image"]["tmp_name"],$newFile);
  } else {
    echo "Invalid File";
  }

}

?>
