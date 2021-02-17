<?php


//Список всех статей

function articles_get_all($link)
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
function articles_get_by_id($link, $id_article)
{
    //защита от sql инъекции
    $id_article = (int) $id_article;
    $query = "SELECT * FROM articles WHERE id_article='$id_article' ";
    $result = mysqli_query($link, $query);

    //Проверка
    if (!$result)
        return mysqli_error();

    return mysqli_fetch_assoc($result);

}

//Добавить статью
function articles_new($link, $title, $content)
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
function articles_edit($link, $id_article, $title, $content)
{

    //Защита
    $id_article = (int) $id_article;
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
function articles_delete($link, $id_article)
{
    //Защита
    $id_article = (int) $id_article;

    //Запрос
    $query = "DELETE FROM articles WHERE id_articles = '$id_article'";
    $result = mysqli_query($link, $query);

    if (!$result)
        return false;
    else
        return true;
}

//Короткое описание статьи
function articles_intro($article)
{
    $article = mb_substr($article, 0, 200,'UTF-8');
    return $article;
}