<?php

include(session.php);


  $donated = 0;

  if(isset($_POST["donate"])){
    $donated = $_POST["donate"]


    $fundID = $_POST["fundID"];
    echo $fundID;

    $sql = UPDATE funds SET RAISED = RAISED + '$donated' WHERE ID = 1;
    if ( $sql->execute() === TRUE) {
      echo "Donation Successful";

      //header("location: ../index.php");
    }
  
  }
 ?>
