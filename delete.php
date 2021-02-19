<?php
require_once ('startup.php');
require_once ('model.php');
$link = startup();
header('Content-type: text/html; charset=utf-8');
articles_delete($link, $_GET['id']);
header('location: editor.php');
?>
