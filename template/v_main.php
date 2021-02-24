<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="theme/style.css">
</head>
<body>
<div id="header">
    <h1><?= $title ?></h1>
</div>

<div id="menu">
    <a href="index.php">Главная страница</a> |
    <a href="index.php?act=edit">Редтактировать текст</a> <br>

</div>
<?= $left ?>
<div id="content">
    <?= $content ?>
    <br> <br>
</div>

<div id="footer">

    Подвал страницы. О компании. Контакты.
</div>

</body>
</html>
