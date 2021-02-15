<?php
require ('startup.php');
require ('model.php');

//Установим параметры, подключаемся к БД, запускаем сессию.
//startup();

$link = startup();


//Извлечение статей
$articles = articles_all($link);

//Кодировка
header('Content-type: text/html; charset=utf-8');

//Вывод в шаблон
include ('theme/editor.php')
?>