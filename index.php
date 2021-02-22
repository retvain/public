<?php
require_once('model/model.php');

$a1 = new Article();
$a2 = new Article();
$a3 = new Article();
$a1->Generate_article('1', 'name1', '1askjdhfklsfhkasfhasklfhakslhfakslhjdfkaljshdfaklsjhdfklasjdhf');
$a2->Generate_article('2', 'name2', '2askjdhfklsfhkasfhasklfhakslhfakslhjdfkaljshdfaklsjhdfklasjdhf');
$a3->Generate_article('3', 'name3', '3askjdhfklsfhkasfhasklfhakslhfakslhjdfkaljshdfaklsjhdfklasjdhf');
$a1->view();
$a2->view();
$a3->view();
?>
