<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta content="text/html" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
<div>
    <h1><?= $title ?></h1> <hr>
</div>

<div>
    <a href="index.php">Главная страница</a> |
    <a href="index.php?act=edit">Редтактировать текст</a> <br> <br>
    <hl>
</div>
<div>
    <?= $content ?>
    <br> <br>
</div>

<div>
    <hr>
    Подвал страницы. О компании. Контакты.
</div>

</body>
</html>
