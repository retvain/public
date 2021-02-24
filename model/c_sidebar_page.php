<?php

function __autoload($name) {
    require_once ("model/$name.php");
}

include_once ('model/model.php');


class c_sidebar_page extends c_page
{
    protected $left;

    function __construct()
    {
        parent::__construct();
        $this->left = $this->Template('template/v_left.php');
    }

    public function render()
    {
        $vars = array('title' => $this->title, 'content' => $this->content, 'left' => $this->left);
        $page = $this->Template('template/v_main.php', $vars);
        echo $page;
    }
}
