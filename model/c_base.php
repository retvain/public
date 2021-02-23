<?php
require_once ('model/controller.php');

//Базовый контроллер

abstract class c_base extends controller
{
    protected $title;
    protected $content;

    //Конструктор

    function __construct()
    {
        $this->title = 'Название сайта';
        $this->content = '';
    }

    //Генерация базвого шаблона

    public function render()
    {
        $vars = array('title' => $this->title, 'content' => $this->content);
        $page = $this->Template('template/v_main.php', $vars);
        echo $page;
    }
}

