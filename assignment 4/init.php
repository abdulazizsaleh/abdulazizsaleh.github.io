<?php
try {
  // $hostName = getenv('host');
  // $username = getenv('DBusername');
  // $password = trim(getenv('DBpassword'));
  // $database = getenv('DBName');
  // $db = mysqli_connect($hostName,$username,$password,$database);
  $db = mysqli_connect("127.0.0.1","abdulaz1z", "" ,"mydb");
  if (mysqli_connect_errno()){
    throw new Exception(mysqli_connect_errno());
  }
} catch (Exception $e) {
  echo "database connection error ".$e->getMessage();
  die();
}
?>
