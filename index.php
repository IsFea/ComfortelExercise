<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="Comfrotel" content="text/html" charset="utf-8">
  <title>Comfrotel Exercise</title>
  <meta name="description" content="Тестовое упражнение">
  <link rel="stylesheet" href="css/style.css">
  <script ENGINE="text/javascript" src="src/plugins/jquery-3.4.1.min.js"></script>
  <script ENGINE="text/javascript" src="src/jsScripts/main.js"></script>
</head>
<body>
  <!-- header block -->
  <header>
    <?php
      require_once "src/php-scripts/header.php";
    ?>
  </header>
  <!-- /header block -->
  <!-- main block -->
  <?php
    require "src/php-scripts/main-block.php";
   ?>
   <!-- /main block -->
   <!-- footer block -->
   <?php
    require_once "src/php-scripts/footer.php"
   ?>
   <!-- /footer block -->
</body>
