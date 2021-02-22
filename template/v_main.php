<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta content="text/html" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
<div>
    <h1><?= $title ?></h1>
</div>

<div>
    <a href="index.php">Главная страница</a>
    <a href="edit.php">Редтактировать текст</a>
</div>
<div>
    <?= $content ?>
</div>

<div>
    Подвал страницы. О компании. Контакты.
</div>

</body>
</html>
