<?php 
  require('db.php');
  
  // Get List of Users
  $users = $db_connection->query("SELECT id, FirstName, LastName, Email, group_id FROM `Users`");
?>

<div class="ui container">
  <h2 class="ui top attached header">
    <i class="list icon"></i> Users
  </h2>
  <div class="ui attached segment">
    <table class="ui compact selectable table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>E-Mail Address</th>
          <th>Group</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <?php if ($users->num_rows > 0): ?>
          <?php while ($row = $users->fetch_assoc()): ?>
            <tr data-user="<?php echo $row['id'] ?>">
              <td><?php echo $row["FirstName"]; ?></td>
              <td><?php echo $row["LastName"]; ?></td>
              <td><?php echo $row["Email"]; ?></td>
              <td><?php echo $row["group_id"]; ?></td>
              <td><a class="ui circular icon red button api delete" onclick="app.deleteUser(<?php echo $row['id']; ?>)">
                <i class="trash icon"></i>
              </a></form></td>
            </tr>
          <?php endwhile; ?>
        <?php endif; ?>

      </tbody>
    </table>
  </div>
</div>