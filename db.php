<?php 
  require_once('config.php');
  global $db_host, $db_username, $db_password, $db_name;

  $db_connection = new mysqli($db_host, $db_username, $db_password, $db_name);

  if ($db_connection->connect_error) {
    die("Connection Failed " . $db_connection->connect_error);
  }
?>