<?php

include('session.php');
  //What to order them by is up for debate
  //
  $sql =  $db->prepare("SELECT * FROM funds ORDER BY RAISED desc");
  $sql->execute();

  $json = array();
  $fund = array();


  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
    //Builds array for each fund
    //Pushes into Overarching JSON array to be sent
    $fund['id'] = $row['ID'];
    $fund['name'] = $row['NAME'];
    $fund['desc'] = $row['DESCRIPTION'];
    $fund['goal'] = $row['GOAL'];
    $fund['raised'] = $row['RAISED'];
    $fund['image'] = $row['IMAGE'];
    array_push($json, $fund);
  }

    echo json_encode($json);


  



?>
