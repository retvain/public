<?php

namespace Theory;

class Application
{ 
   private $name = "nick";
   private $environment;

   public function setName($name) {
       return $this->name;
   }

   public function getName() {
       return $this->name;
   }

}
 
$app = new Application("name", "development");
print_r($app->getName());
print_r($app->setName("another name"));
 

?>
