<?php

include('session.php');


  $donated = 0;

  if(isset($_POST["donate"])){
    $donated = $_POST["donate"];


    $fundID = $_POST["fundID"];

    $sql = $db->prepare("UPDATE funds SET RAISED = RAISED + ? WHERE ID = ?");

    if ( $sql->execute(array($donated, $fundID)) === TRUE) {
      echo "Donation Successful";

      header("location: ../fund.php?fundID=$fundID");
    }

  }
 ?>
