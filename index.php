<?php

require_once ('database.class.php');

//BD connect settings
$hostname = 'mysql';
$username = 'username';
$password = 'password';
$dbName = 'blog';

date_default_timezone_set('Asia/Yekaterinburg');
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

$link = mysqli_connect($hostname, $username, $password, $dbName) or die ('no connection with DB');

if (mysqli_connect_errno()) {
    printf("Connecnt failed: %s\n", mysqli_connect_error());
    exit();
}

//mysqli_query('SET NAMES utf8');
//mysqli_select_db($dbName) or die('No DATABASE');
//$result = mysqli_query("SELECT * FROM articles ORDER BY id_article");

/* возвращаем имя текущей базы данных */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result); //в row формируем массив из $result
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result); //освобождаем память
}