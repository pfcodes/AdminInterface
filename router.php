<?php

class Router {

  var $views = array(
    'home' => 'views/home.php',
    'add' => 'views/add.php',
    'list' => 'views/list.php'
  );

  public function loadHome() {
    include_once($this->views['home']);
  }

  public function loadSidebar() {
    include_once('views/includes/sidebar.php');
  }
  
  public function loadView() {
    $page = isset($_GET['page']) ? $_GET['page'] : NULL;

    if (!isset($page)){
      return $this->loadHome();
    }

    include_once($this->views[$page]);
  }

}

?>