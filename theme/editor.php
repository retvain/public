<? /*Шаблон редактируемой страницы
$articles - список всех статей

статья:
id_article - идентификатор
title - заголовок
content - содержимое статьи*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP объектно ориентировання разработка</title>
    <meta content="text/html" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
<h1>PHP объектно ориентированная разработка</h1>
<br>
<a href="index.php">Главная</a>
<b>Консоль редактора</b>
<hr>
<ul>
    <li>
        <b>
            <a href="new.php">Новая статья <br></a>
        </b>

        <? foreach ($articles as $article) : ?>
        <br>
    <li>
        <a href="edit.php?id=<?= $article['id_article'] ?>">
            <?= $article['title'] ?>
        </a>

    </li>
    <? endforeach; ?>
</ul>
<hr>
</body>
</html>