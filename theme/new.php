<?
/*Шаблон главной страницы

$title - заголовок
$content - содержание*/
?>
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
<a href="editor.php">Консоль редактора</a>
<hr>
<h1>Новая статья</h1>
<? if ($error) :?>
    <b style="color: red;">Заполните все поля!</b>
<?endif;?>
<form method="post">
    Название:
    <br>
    <input type="text" name="title" value="<?=$title?>">
    <br>
    <br>
    Содержание:
    <br>
    <textarea name="content"><?=$content?></textarea>
    <br>
    <input type="submit" value="Добавить" />
</form>
<hr>
</body>
</html>