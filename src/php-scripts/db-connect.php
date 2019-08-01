<?php
  require_once 'db-connect-settings.php';

  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
  // mysqli_set_charset($link ,'UTF-8');
  mysqli_query($link, "SET NAMES 'utf8");
  mysqli_query($link, "SET CHARACTER SET 'utf8'");

  // Не забыть закрыть подключение после использования link
?>
