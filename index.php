<?php require_once('config.php'); ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>LAMP Excercise</title>
  <link rel="stylesheet" href="semantic/dist/semantic.min.css">
  <link rel="stylesheet" href="assets/stylesheet.css">
</head>

<body>
  <div class="ui grid two column main container">
    <!-- Sidebar -->
    <div class="ui four wide column">
      <?php $Router->loadSidebar() ?>
    </div>

    <!-- Page -->
    <div class="twelve wide column">
      <?php $Router->loadView(); ?>
    </div>
  </div>

  <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="node_modules/form-serializer/dist/jquery.serialize-object.min.js"></script>
  <script type="text/javascript" src="semantic/dist/semantic.min.js"></script>
  <script type="text/javascript" src="assets/global.js"></script>
</body>

</html>