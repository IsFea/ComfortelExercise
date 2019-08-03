// index.php кнопка перехода в админ панель
$(document).on('click','#admin',function(){
  $.post("src/php-scripts/admin.php", function(data){
    $('main').html(data);
  });
});
//index.php кнопка перехода в user
$(document).on('click','#user',function(){
  $.post("src/php-scripts/user.php", function(data){
    $('main').html(data);
  });
});
// main-block.php кнопка "Назад"
$(document).on('click','#back',function(){
  $.post("src/php-scripts/main-block.php", function(data){
    $('main').html(data);
  });
});

$('body').on('submit','form',function(){
  alert('Hello world');
});

function call() {
  var msg   = $('#form-seacrh').serialize();
  $.ajax({
        method: 'POST',
        cache: false,
        url: 'src/php-scripts/query-table.php',
        data: msg,
        success: function(data) {
          $('.user-table').html(data);
          // alert(data);
        },
        error:  function(xhr, str){
  alert('Возникла ошибка: ' + xhr.responseCode);
        }
  });
}
