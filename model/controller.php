<?php

//Базовый класс контроллера\

abstract class controller
{
    //Генерация внешнего шаблона
    abstract function render();

    //Запрос произведен методом GET?
    protected function IsGet()
    {
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    //Запрос произведен методом POST?
    protected function IsPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    //Генерация шаблона в строку
    protected function template($filename, $vars = array())
    {
        //Установка переменных шаблона
        foreach ($vars as $k => $v)
        {
            $$k = $v;
        }

        //Генерация HTML в строку
        ob_start();
        include "$filename";
        return ob_get_clean();
    }

    //Если вызвали метод, которого нет - заврешаем работу
    public function __call($name, $params)
    {
        die('не пишите фигню в URL - адрсе! =)');
    }
}