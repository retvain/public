<?php

class database {
    private $link;

    private function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $config = require_once ('cfg/config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    public function execute ($query)
    {
        $str = $this->link->prepare($query);

        return $str->execute();
    }

    public function query ($query)
    {
        $prepeare_execute = $this->execute($query);
        $result = $prepeare_execute->fetchAll(PDO::FETCH_ASSOC);

        if (!$result) {
            return [];
        }

        return $result;

    }
}
















/*$hostname = 'mysql';
$username = 'username';
$password = 'password';
$dbName = 'blog';*/

/*
function startup() {

//BD connect settings
$hostname = 'mysql';
$username = 'username';
$password = 'password';
$dbName = 'blog';
$dsn = 'mysql:host=mysql;dbname=blog';

date_default_timezone_set('Asia/Yekaterinburg');
setlocale(LC_ALL, 'ru_RU.UTF-8');
mb_internal_encoding('UTF-8');

$link = mysqli_connect($hostname, $username, $password, $dbName) or die ('no connection with DB');
mysqli_query($link, 'SET NAMES utf8');
mysqli_select_db($link, $dbName) or die('No database');

//Start session
//session_start();

    return $link;
}*/
