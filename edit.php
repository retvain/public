<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Вносим изменения</title>
</head>
<body>

<?php
require_once('connect.php');
$id = (int)$_REQUEST['user'];
$select_sql = "SELECT * FROM articles WHERE id= $id";
$result = mysqli_query($select_sql);
$row = mysqli_fetch_assoc($result);
printf("<form action='update.php' method= 'post' name='forma'>
<fieldset> <input type='hidden' name='id' value='%s'><br>
<label for='name'>Имя:</label><br>
<input type='text' name='name' size='30' value='%s'><br>
<label for='title'>Название статьи:</label><br>
<input type='text' name='title' size='60' value='%s'><br>
<label for='text'>Ваша статья:</label><br>
<input type='text' name='text' size='250' value='%s'><br>
</fieldset> <br> <fieldset>
<input id='submit' type='submit' value='Редактировать запись'><br>
</fieldset> </form>", $row['id'], $row['name'], $row['title'], $row['text']);
?>
<a href="add.php">Добавить статью</a><br>
<a href="index.php.php">Выернуться к выбору записей для редактирования</a><br>
</body>
</html>

