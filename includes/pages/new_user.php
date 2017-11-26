<?php 
  // TODO: MAKE THIS GLOBAL
  require('db.php');
  
  // Query the database
  $groups = $db_connection->query("SELECT GroupName, GroupColor FROM `Groups`");
?>

<div class="ui container">
  <!-- Logo -->
  <h2 class="ui top attached header">
    <i class="add user icon"></i>Create New User
  </h2>

  <div class="ui attached segment">

    <form id="new-user-form" class="ui form" method="post" action="api.php">
        <div class="two fields">
        <div class="field">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="First Name">
        </div>

        <div class="field">
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Last Name">
        </div>
      </div>

        <div class="field">
          <label>E-mail Address</label>
          <input type="email" name="email" placeholder="E-mail Address">
        </div>

        <div class="field">
          <label>Group</label>
          <div class="ui selection dropdown">
            <input type="hidden" name="group">
            <i class="dropdown icon"></i>
            <div class="default text">Choose A Group</div>
            <div class="menu">
              <!-- TODO: Add Loop Here -->
              <?php while ($row = $groups->fetch_assoc()) : ?>
                <div class="item"><?php echo $row['GroupName'] ?></div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <div class="ui primary fluid animated submit button" tabindex="0">
          <div class="visible content">Submit</div>
          <div class="hidden content">
            <i class="right arrow icon"></i>
          </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal -->
<div class="ui mini modal">
  <div class="header"></div>
  <div class="content"></div>
  <div class="actions">
    <div class="ui approve button">Ok</div>
  </div>
</div>