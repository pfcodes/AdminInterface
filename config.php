<?php 
  // URL Router
  require_once('router.php');
  $Router = new Router();

  // Database Stuff
  global $db_host, $db_username, $db_password, $db_name;
  $db_host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "members_first_assignment";
  
?>