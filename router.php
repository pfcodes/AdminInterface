<?php

class Router {

  var $pages = array(
    'intro' => 'includes/pages/introduction.php',
    'add' => 'includes/pages/new_user.php',
    'list' => 'includes/pages/list_users.php'
  );

  public function loadHome() {
    include_once($this->pages['intro']);
  }

  public function loadSidebar() {
    include_once('includes/sidebar.php');
  }
  
  public function loadView() {
    $action = isset($_GET['action']) ? $_GET['action'] : NULL;

    if (!isset($action)){
      return $this->loadHome();
    }

    include_once($this->pages[$action]);
  }

}

?>