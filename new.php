<?php
require_once ('startup.php');
require_once ('model.php');

//Подключение к БД
startup();

//Обработка отправки
if (!empty($_POST))
{
    if (articles_new($_POST['title'], $_POST['content']))
    {
        header('Location: jar/editor.php');
        die();
    }

    $title = $_POST['title'];
    $content = $_POST['content'];
    $error = true;
}
else
{
    $title = '';
    $content = '';
    $error = false;
}

//Кодировка
header('Content-type: text/html; charset=utf-8');

//Вывод в шаблон
include ('theme/new.php');