<?php
  require_once('db.php');

  switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
      header("HTTP/1.1 200 OK");
    break;

    case "DELETE":
      // ONLY ALLOW DELETE IF USER IS NOT THE LAST IN THE GROUP
      header("HTTP/1.1 200 OK");
    break;
  }

?>