<?php
require_once 'db-connect.php';
$query ="SELECT * FROM users";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
  //  echo '<tr><td colspan="5">Поиск: <input type="text" name="search_input" value="">';
  echo '<table>';
  echo '<tr><td colspan="5">Поиск: <input type="text" name="search_input" value="">
  <select>
    <option>Первый</option>
    <option>Второй</option>
    <option>Третий</option>
  </select><button type="button" name="search">Поиск</button></tr>';
  echo '<tr><th>Номер</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Статус</th></tr>';
  while($row = mysqli_fetch_array($result)){
    echo '<tr><td>'.$row['id'].'</td><td>'.$row['last_name'].'</td><td>'.$row['name'].'</td><td>'.$row['third_name'].'</td><td>'.$row['status'].'</td></tr>';
  }
  echo '</table>';
}
mysqli_close($link);
 ?>
