<?php
require_once ('model/c_base.php');
$controller = new c_page();
$controller->action_edit();
$controller->render();





















/*require_once('model/model.php');
require_once('model/view.php');

//Обработка отправки формы
if (!empty($_POST)) {
    $text = $_POST['text'];
    text_set($text);
    header('Location: index.php');
    die();
}

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
