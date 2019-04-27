<?php

include('session.php');

$fundName = $_GET["fundName"];
$sql =  $db->prepare("SELECT * FROM funds WHERE NAME='$fundName'");
$sql->execute();

$json = $sql->fetch(PDO::FETCH_ASSOC);

echo json_encode($json);
?>