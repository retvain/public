<?php

require_once ('model/model.php');
require_once ('model/c_base.php');
require_once ('model/c_page.php');

class c_sidebar_page extends c_page
{
    protected $left;

    function __construct()
    {
        parent::__construct();
    }

    public function action_index()
    {
        $this->title .= '::чтение';
        $text = text_get();
        $this->content = $this->Template('template/v_index.php', array('text' => $text));
    }

    public function action_contacts()
    {
        $this->title .= '::обратная связь';
        $this->content = "Наши контакты тут!";
    }

    public function action_edit ()
    {
        $this->title .= '::редактирование';

        if($this->isPost())
        {
            text_set($_POST['text']);
            header('location: index.php');
            exit();
        }

        $text = text_get();
        $this->content = $this->Template('template/v_edit.php', array('text' => $text));

    }

}
