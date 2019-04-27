<?php

include('session.php');

$fundID = $_POST["fundID"];
$sql =  $db->prepare("SELECT * FROM funds WHERE ID=$fundID");
$sql->execute();

$json = $sql->fetch(PDO::FETCH_ASSOC);

echo json_encode($json);
?>