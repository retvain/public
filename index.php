<?php

//BD connect settings
$hostname = 'localhost';
$username = 'username';
$password = 'password';
$dbName = 'database';

//time settings
date_default_timezone_set('Asia/Yekaterinburg');

//language settings
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

//BD connect
PDO($hostname,)
mysqli_connect($hostname, $username, $password) or die('no connection with database');
mysqli_query()