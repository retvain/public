<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <meta content="text/html" type="text/css" media="screen" href="theme/style.css">
</head>
<body>
<div id="header">
    <h1><?= $title ?></h1> <hr>
</div>

<div id="menu">
    <a href="index.php">Главная страница</a> |
    <a href="index.php?act=edit">Редтактировать текст</a> <br> <br>
    <hl>
</div>
<?=$left?>
<div id="content">
    <?= $content ?>
    <br> <br>
</div>

<div id="footer">
    <hr>
    Подвал страницы. О компании. Контакты.
</div>

</body>
</html>
