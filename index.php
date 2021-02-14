<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Мой блог</title>
</head>
<body>
    <form action="edit1.php" method="post">Форма</form>
    <fieldset></fieldset>


<?php

require_once('connect.php');

//print schema name
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result); //в row формируем массив из $result
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result); //освобождаем память
}

//check get page
if (isset($_GET['page']) and (int)$_GET['page'] != 0)
    $page = (int)$_GET['page'];
else $page = 1;
if (!($page >= 1 and $page <= 3)) {
    die ('sorry, 404');
}

$articles_per_page = 10;
$skip = ($page - 1) * $articles_per_page;
echo "<br> в skip сейчас: ";
printf($skip);
echo "<br> в articles_per_page сейчас: ";
printf($articles_per_page);
echo '<br>';
$result = mysqli_query($link, "SELECT * FROM articles ORDER BY 
                                id_article LIMIT $skip,$articles_per_page");
//check $result !null
if (!$result)
    die ("DB error: " . mysqli_error());

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id_article'] . '<br>';
    echo $row['title'] . '<br>';
    echo $row['content'] . '<hr>';
}
mysqli_free_result($result); //освобождаем память
$page_next = $page + 1;
$page_prev = $page - 1;
echo "<a href=index.php?page=$page_prev>Предыдущая страница</a> ";
echo "<a href=index.php?page=$page_next>Следующая страница</a>" . "<br>";



//Insert article
/*$result = mysqli_query($link, "INSERT INTO articles (id_user, date_and_time, title, content) VALUES (1, current_timestamp(), 'название 4й статьи тест' , '4я Статья из тестового скрипта')");
if ($result = true)
    echo 'Статей добавлено: ' . mysqli_affected_rows($link) . ' id:' . mysqli_insert_id($link);
else
    die ("Соединение не удалось: " . mysqli_error($link));
mysqli_free_result($result); //освобождаем память
mysqli_close($link);*/
?>
<a href="add.php">Добавить статью</a><br>
<a href="select_delete.php">Удалить статью</a><br>
</body>
</html>
