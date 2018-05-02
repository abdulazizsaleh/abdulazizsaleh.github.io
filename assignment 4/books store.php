<?php
require_once 'init.php';
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);
$sql = "SELECT * FROM books";
if($result = mysqli_query($db,$sql)){
  $output = array();
  $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($output);
}
?>
