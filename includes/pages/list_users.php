<?php 
  // TODO: MAKE THIS GLOBAL
  require('db.php');
  
  // Query the database
  $groups = $db_connection->query("SELECT id, GroupName, GroupColor FROM `Groups`");
?>

<div class="ui container">
  <h2 class="ui top attached header">
    <i class="list icon"></i> Users
  </h2>
  <div class="ui attached segment">

  <?php while ($group = $groups->fetch_assoc()): ?>
  <table class="ui fixed compact selectable <?php echo $group['GroupColor'] ?> table">

    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail Address</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      <?php 
        $users = 
        $db_connection->query("SELECT id, FirstName, LastName, Email FROM `Users` WHERE group_id=" . $group['id']); 
      ?>
      <?php if ($users->num_rows > 0): ?>
        <?php while ($user = $users->fetch_assoc()): ?>
          <tr id="user-<?php echo $user['id'] ?>">
            <td><?php echo $user["FirstName"]; ?></td>
            <td><?php echo $user["LastName"]; ?></td>
            <td><?php echo $user["Email"]; ?></td>
            <td><a data-user="<?php echo $user['id'] ?>" class="ui circular icon red button api delete">
              <i class="trash icon"></i>
            </a></td>
          </tr>
        <?php endwhile; ?>
      <?php else: ?>
        <tr><td colspan="4">No users exist in this group. <a href="index.php?action=add">Add some</a>.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
  <?php endwhile; ?>
  </div>
</div>

<!-- Modals -->
<div class="ui mini modal">
  <div class="header"></div>
  <div class="content"></div>
  <div class="actions">
    <div class="ui cancel button">Ok</div>
  </div>
</div>