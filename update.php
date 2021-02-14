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
$id = (int)$_REQUEST['id'];
$name = mysqli_real_escape_string(trim($_REQUEST['name']));
$title = mysqli_real_escape_string(trim($_REQUEST['title']));
$text = mysqli_real_escape_string(trim($_REQUEST['text']));
$update_sql = "UPDATE news SET name = '$name', title='$title', text='$text' WHERE id='$id'";
mysqli_query($update_sql) or die ("Ошибка вс" . mysqli_error());
echo '<p>Запись успешно обновлена!</p>';
?>
<a href="add.php">Добавить статью</a><br>
<a href="index.php.php">Выернуться к выбору записей для редактирования</a><br>
</body>
</html>

