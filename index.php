<?php

namespace Theory;

require_once ('');

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

$app = new Application("name", "development");
print_r($app->getName());
print_r($app->setName("another name"));
