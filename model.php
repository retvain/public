<?php


//Список всех статей

function articles_all($link)
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
function articles_get($id_article)
{
    //защита от sql инъекции
    $id_article = (int) $id_article;

    if (isset($id_article)) {
        $query = "SELECT * FROM articles WHERE id_article='$id_article' ";
    }
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