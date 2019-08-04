<?php
require_once 'db-connect.php';
if (!empty($_POST))
{
 $query = "
   INSERT INTO `users` (`id`, `last_name`, `name`, `third_name`, `status`)
   VALUES (NULL, '".str_replace(' ', '', $_POST['last_name'])."', '".str_replace(' ', '', $_POST['name'])."', '".str_replace(' ', '', $_POST['third_name'])."', 'Первый')
  ";
  echo $query;
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if(!$result)
  {
    echo "Ошибка добавления";
  }
  mysqli_close($link);
}

?>
