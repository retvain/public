<?php

//Список всех статей

function articles_all()
{
    //Запрос.
    $query = "SELECT * FROM articles ORDER BY id_article DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error());

    //Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;

}

//Конкретная статья
function articles_get($id_article)
{
    //do it
}

//Добавить статью
function articles_new($title, $content)
{
    //Подготовка
    $title = trim($title);
    $content = trim($content);

    //Проверка
    if ($title == '' or $content == '') return false;

    //Запрос
    $t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($title), mysqli_real_escape_string($content));

    $result = mysqli_query($query);

    //Проверка запроса
    if (!$result)
        die(mysqli_error());

    return true;
}

//Изменить статью
function articles_edit($id_article, $title, $content)
{
    //do it
}

//Удалить статью
function articles_delete($id_article)
{
    //do it
}

//Короткое описание статьи
function articles_intro($article)
{
    //$article - ассоциативный массив, который представляет статью
}