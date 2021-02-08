<?php

namespace Theory;

$id = $_GET['id'];
$id_next = $id+1;
$id_prev = $id-1;
echo "Мой id = $id </br>";



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
?>

<a href="index.php?id=<?php echo $id_prev ?>">Назад</a> |
<a href="index.php?id=<?php echo $id_next ?>">Вперед</a>