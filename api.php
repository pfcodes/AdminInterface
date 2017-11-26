<?php
  require_once('db.php');

  switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
      http_response_code(200);
      header('Content-type: application/json');

      $result = "success";
      $message = "Could not add user to the group.";

      $response = array(
        "result" => $result,
        "message" => $message
      );

      echo json_encode($response);
    break;


    case "DELETE":
      // ONLY DELETES USERS FOR NOW
      $user_id = $_GET['id'];

      // ONLY ALLOW DELETE IF USER IS NOT THE LAST IN THE GROUP
      http_response_code(200);

      $result = "success";
      $message = "Error message here";

      $response = array(
        "result" => $result,
        "message" => $message
      );

      echo json_encode($response);
    break;
  }

?>