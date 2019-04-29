<?php

include('session.php');


  $donated = 0;

  if(isset($_POST["donate"])){
    $donated = $_POST["donate"];


    $fundID = $_POST["fundID"];
    echo $fundID;

    $sql = $db->prepare("UPDATE funds SET RAISED = RAISED + '$donated' WHERE ID = ?");
    $sql->bind_param("i",$fundID);

    if ( $sql->execute($donated) === TRUE) {
      echo "Donation Successful";

      header("location: ../index.php");
    }

  }
 ?>
