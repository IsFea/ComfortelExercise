<?php
require_once 'db-connect.php';
if (!empty($_POST))
{
 $query = "
    UPDATE `users`
    SET `last_name` = '".str_replace(' ', '', $_POST['last_name_edit'])."', `name` = '".str_replace(' ', '', $_POST['name_edit'])."', `third_name` = '".str_replace(' ', '', $_POST['third_name_edit'])."', `status` = '".str_replace(' ', '', $_POST['status_edit'])."'
    WHERE `users`.`id` = ".$_POST['id_edit'].";";
  echo $query;
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if(!$result)
  {
    echo "Ошибка добавления";
  }
  mysqli_close($link);
}
?>
