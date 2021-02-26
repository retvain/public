<?php

class m_articles
{
    private static $instance; //ссыль на экземпляр класса

    //Получение экземпляра класса

    public static function instance ()
    {
        if (self::$instance == null)
            self::$instance == new m_articles();

        return self::$instance;
    }

    private function __construct(){}

    function articles_all()
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
}
