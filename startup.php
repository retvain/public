<?php

function startup() {

//BD connect settings
$hostname = 'mysql';
$username = 'username';
$password = 'password';
$dbName = 'blog';

date_default_timezone_set('Asia/Yekaterinburg');
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

$link = mysqli_connect($hostname, $username, $password, $dbName) or die ('no connection with DB');
mysqli_query($link, 'SET NAMES utf8');
mysqli_select_db($link, $dbName) or die('No database');

//Start session
//session_start();
}
