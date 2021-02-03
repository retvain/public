<?php

namespace Theory;

class Application
{
    //private $handlers = [];
    private $name;
    private $environment;

    public function __construct($name, $environment)
    {
        $this->name = $name;
        $this->environment = $environment;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

function rtvn() {
    $a = 'hi';
    echo $a;
}

rtvn();
