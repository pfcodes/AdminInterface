<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>

<div class="ui vertical fluid menu">
  <a class="<?php if ($page == 'home') echo 'active' ?> item" href="index.php?page=home">
    <i class="home icon"></i> Home
  </a>

  <a class="<?php if ($page == 'add') echo 'active' ?> item" href="index.php?page=add">
    <i class="add user icon"></i> Add User
  </a>

  <a class="<?php if ($page == 'list') echo 'active' ?> item" href="index.php?page=list">
    <i class="list icon"></i> User List
  </a>
</div>