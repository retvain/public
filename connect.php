<?php
//BD connect settings
$hostname = 'mysql';
$username = 'username';
$password = 'password';
$dbName = 'blog';

date_default_timezone_set('Asia/Yekaterinburg');
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

$link = mysqli_connect($hostname, $username, $password, $dbName) or die ('no connection with DB');

if (!$link) {
    printf("Не могу подключиться к localhost. Ошибка: %s\n", mysqli_connect_error());
    exit();
}