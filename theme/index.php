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
<b>Главная</b>
<a href="editor.php">Консоль редактора</a>
<ul>

        <? foreach ($articles as $article) : ?>
    <li>
        <a href="article.php?id=<?= $article['id_article'] ?>">
            <?= $article['title'] ?>
        </a>
        <br>
        <b><?= articles_intro($article['content']) ?></b>
    </li>
    <? endforeach; ?>
</ul>
</body>
</html>
