<?php

require_once ('database.class.php');

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
/*try {
    $db = DB::getInstance();
    DB::setCharsetEncoding();

    $sqlExample = 'SELECT * FROM users WHERE _id = 1';
    $stm = $db->prepare($sqlExample);

    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    print $e->getMessage();

}*/
mysqli_connect($hostname, $username, $password) or die ('no connection with DB');
mysqli_query('SET NAMES utf8');
mysqli_select_db($dbName) or die('No DATABASE');

$result = mysqli_query("SELECT * FROM blog_articles ORDER BY ")