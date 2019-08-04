<main class="block">
<div class="jq-button" id="back">
  <span>Назад</span>
</div>
<span>Вы администратор</span>
<br> <button type="button" name="add-user" onclick="ShowAdder(false)">Добавить клиента</button>
<div class="shadow">
  <div class="adder-block block">
    <div class="center">
      <form class="add-user" id="#form-add-user" action="javascript:void(null);" method="post" onsubmit="add_user()">
        <br>Фамилия: <input type="text" name="last_name" value="">
        <br>Имя: <input type="text" name="name" value="">
        <br>Отчество: <input type="text" name="third_name" value="">
        <!-- <br> Статус: <select name="status">
              <option value="Первый">Первый</option>
              <option value="Второй">Второй</option>
              <option value="Третий">Третий</option>
        </select> -->
        <br><input type="submit" name="add" value="Добавить">
      </form>
      <form class="edit-user" id="#form-edit-user" action="javascript:void(null);" method="post" onsubmit="edit_user_ok()">
        <input type="text" name="id_edit" value="" style="display:none;">
        <br>Фамилия: <input type="text" name="last_name_edit" value="">
        <br>Имя: <input type="text" name="name_edit" value="">
        <br>Отчество: <input type="text" name="third_name_edit" value="">
        <br> Статус: <select name="status_edit">
              <option value="Первый">Первый</option>
              <option value="Второй">Второй</option>
              <option value="Третий">Третий</option>
        </select>
        <!-- <br>Удалить?<input type="checkbox" name="delete_edit" value="1"> -->
        <br><input type="submit" name="edit" value="Ок">
      </form>
    </div>
  </div>
</div>
<div class="user-table">
  <?php
    require 'query-table-admin.php';
   ?>
</div>
</main>
