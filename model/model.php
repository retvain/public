<?php
//PDO для работы с БД


class database
{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $config = require_once('cfg/config.php');
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['db_name'] . ';charset=' . $config['charset'];
        $this->link = new PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    public function execute_query($query)
    {
        $str = $this->link->prepare($query);

        $str->execute();

        $result = $str->fetchAll(PDO::FETCH_ASSOC);

        if ($result === false) {
            return [];
        }

        return $result;

    }
}

class Article
{
    protected $id;
    public $title;
    public $content;
    protected $preview;

    function Generate_article($id, $title, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;

        $this->preview = mb_substr($content, 0, 7, 'utf-8');

    }

    function __get($name)
    {
     echo 'опа, попался!';
    }

    function view()
    {
        echo "<h2>$this->title</h2><br><h1>$this->preview</h1><br><p>$this->content</p><hr><br>";
    }
}

class m_model {
    private $table;
    private $key;

    public function __construct($table, $key)
    {
        $this->table = $table;
        $this->key = $key;
    }

//Функция чтения из файла
    public static function text_get()
    {
        return file_get_contents('data/text.txt');
    }

//Функция записи в файл
    public static function text_set($text)
    {
        return file_put_contents('data/text.txt', $text);
    }


//Список всех статей

    public static function all($link)
    {
        //Запрос.
        $query = "SELECT * FROM articles ORDER BY id_article DESC";
        $result = mysqli_query($link, $query);

        if (!$result)
            return (mysqli_error());

        //Извлечение из БД
        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = 0; $i < $n; $i++) {
            $articles[] = mysqli_fetch_assoc($result);
        }

        return $articles;

    }

//Конкретная статья
    public static function get($id)
    {
        //защита от sql инъекции
        $id_article = (int)$id_article;
        $query = "SELECT * FROM $this->table WHERE $this->key ='$id' ";
        $result = mysqli_query($link, $query);

        //Проверка
        if (!$result)
            return mysqli_error();

        return mysqli_fetch_assoc($result);

    }

//Добавить статью
    public static function new($link, $title, $content)
    {
        //Подготовка
        $title = trim($title);
        $content = trim($content);

        //Проверка
        if ($title == '' or $content == '') return false;

        //Запрос
        $t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";

        $query = sprintf($t, mysqli_real_escape_string($title), mysqli_real_escape_string($content));

        $result = mysqli_query($link, $query);

        //Проверка запроса
        if (!$result)
            die(mysqli_error());

        return true;
    }

//Изменить статью
    public static function edit($link, $id_article, $title, $content)
    {

        //Защита
        $id_article = (int)$id_article;
        $title = mysqli_real_escape_string(trim($title));
        $content = mysqli_real_escape_string(trim($content));

        //Запрос
        $t = "UPDATE articles SET (title, content) VALUES ('%s', '%s') WHERE id_article = '$id_article'";
        $query = sprintf($t, $title, $content);
        $result = mysqli_query($link, $query);

        if (!$result)
            return false;

        else
            return true;

    }

//Удалить статью
    public static function delete($link, $id_article)
    {
        //Защита
        $id_article = (int)$id_article;

        //Запрос
        $query = "DELETE FROM articles WHERE id_articles = '$id_article'";
        $result = mysqli_query($link, $query);

        if (!$result)
            return false;
        else
            return true;
    }

//Короткое описание статьи
    public static function intro($article)
    {
        $article = mb_substr($article, 0, 28, 'UTF-8');
        return $article;
    }

//Подключение шаблона
    public static function include($fileName, $vars = array())
    {
        //Устанавливаем переменные
        foreach ($vars as $key => $value) {
            $$key = $value;

            //Генерируем HTML в строку
            ob_start();
            include $fileName;
            return ob_get_clean();
        }

    }

}