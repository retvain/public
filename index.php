<?php

//Автоподгрузка файлов с классами
spl_autoload_register(function ($name)
{
    require_once ("model/$name.php");
}
);

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
    case 'news':
        $controller = new c_sidebar_page();
        break;
    case 'page':
        $controller = new c_page();
        break;
    case 'edit':
        $controller = new c_page();
        break;
    default:
        $controller = new c_page();
}

$controller->$action();
$controller->render();











/*require_once('model/model.php');
require_once('model/view.php');

//Название переменных
$title = 'Название сайта :: Редактирование';
$text = text_get();

//Внутренний шаблон
$content = view_include(
    'templates/v_edit.php',
    array('text' => $text)
);

//Внешний шаблон
$page = view_include(
    'templates/v_main.php',
    array(
        'title' => $title,
        'content' => $content
    )
);

//Вывод
echo $page;*/
