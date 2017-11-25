<?php

class Router {

  var $views = array(
    'intro' => 'includes/views/introduction.php',
    'add' => 'includes/views/new_user.php',
    'list' => 'includes/views/list_users.php'
  );

  public function loadHome() {
    include_once($this->views['intro']);
  }

  public function loadSidebar() {
    include_once('includes/sidebar.php');
  }
  
  public function loadView() {
    $action = isset($_GET['action']) ? $_GET['action'] : NULL;

    if (!isset($action)){
      return $this->loadHome();
    }

    include_once($this->views[$action]);
  }

}

?>