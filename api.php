<?php
  // TODO: MAKE MORE DRY
  require_once('db.php');

  switch ($_SERVER['REQUEST_METHOD']) {

    // ADDS USERS
    case "POST":
      $result = "";
      $message = "";

      // Return a JSON object
      header('Content-type: application/json');

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $group_id = $_POST['group_id'];

      // First check to see if the group is at capacity
      $sql = "SELECT `id` FROM `USERS` WHERE group_id=" . $group_id;
      $users_in_group = $db_connection->query($sql);

      // If there's three or less users in the group it's OK to add
      if ($users_in_group->num_rows <= 3) {
        $sql = "INSERT INTO `USERS` VALUES (id, '" . $firstname . "', '" . $lastname . "', '" . $email . "', " . $group_id . ")";
        // TODO: Add Success check for query
        $db_connection->query($sql);
        $result = "success";
      } else {
        $result = "fail";
        $message = "The group is full.";
      }

      $response = array(
        "result" => $result,
        "message" => $message
      );

      echo json_encode($response);
    break;

    // ONLY DELETES USERS AND NOT GROUPS (FOR NOW)
    case "DELETE":
      $result = "";
      $message = "";

      // Capture the requested user by their id
      $user_id = $_GET['id'];

      // Return a JSON object
      header('Content-type: application/json');

      // Get the Group ID of the user..
      $group_id_of_user_query = "SELECT `group_id` FROM `Users` WHERE id=" . $user_id;
      $group_id = $db_connection->query($group_id_of_user_query)->fetch_row()[0];

      // ..then get the count of users in that
      $users_in_group_query = "SELECT COUNT(`id`) from `Users` WHERE group_id=" . $group_id;
      $users_in_group = $db_connection->query($users_in_group_query)->fetch_row()[0];

      // Don't allow the deletion of the last user
      if ($users_in_group > 1) {
        $delete_user_query = "DELETE FROM `Users` WHERE id=" . $user_id;
        $db_connection->query($delete_user_query);
        $result = "success";
      } else {
        $result = "fail";
        $message ="You can't delete the only user in the group."; 
      }

      $response = array(
        "result" => $result,
        "message" => $message
      );

      echo json_encode($response);
    break;
  }

?>