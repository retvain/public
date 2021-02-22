<?php
require_once ('model/model.php');
$controller = new c_page();
$controller->action_index();
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
