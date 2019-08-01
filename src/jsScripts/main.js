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
