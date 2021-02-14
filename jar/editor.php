<?php
require_once('startup.php');
require_once('jar/model.php');

//Установим параметры, подключаемся к БД, запускаем сессию.
startup();

//Извлечение статей
$articles = articles_all();

//Кодировка
header('Content-type: text/html; charset=utf-8');

//Вывод в шаблон
include ('theme/editor.php')
?>