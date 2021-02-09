<?php

namespace Theory;

//$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

if (isset($_GET['id']))
    $id = (int)$_GET['id'];

else $id = 1;

if (!($id >= 1 and $id <= 3)) {
    die ('sorry, 404');
}


$id_next = $id + 1;
$id_prev = $id - 1;
echo "Мой id = $id </br>" , var_dump($id) , "</br>";

echo "<img src='img/$id.png'>" . "</br>" .
    "<a href='index.php?id=$id_prev'>Назад</a>" . " " . "<a href='index.php?id=$id_next'>Вперед</a>" . "</br>" . "</br>";

var_dump($_POST);
//print_r($_POST);




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