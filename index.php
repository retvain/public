<?php
require_once('startup.php');
require_once('model/model.php');
$link = startup();

if (isset($_GET['page']) and (int)$_GET['page'] != 0)
    $page = (int)$_GET['page'];
else $page = 1;


$articles = articles_get_all($link);
echo '<br>';
$title = 'Блог на PHP. Страница ' . $page;
$content = view_include("template/index.php", array('page' => $page, 'articles' => $articles));
$title = view_include("template/main.php", array('title' => $title, 'content' => $content));
//Вывод в шаблон
include('template/main.php');
?>
