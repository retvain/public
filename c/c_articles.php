<?php

//Контроллер статей

require_once ("model/model.php");

//Автоподгрузка файлов с классами
spl_autoload_register(function ($name)
{
    require_once ("model/$name.php");
}
);

class c_articles extends m_model
{
    //Конструктор

    function __construct()
    {
        parent::__construct('articles', 'id_table');
    }

    public function action_all()
    {
        $this->title = $this->title.':: Все статьи';
        $articles = m_model::articles_get_all();

        foreach ($this->articles as $key => $article)
        {
            $articles[$key]['content'] = articles_intro($articles['content']);
        }

        $this->content = $this->Template('template/v_articles.php');
    }

}
