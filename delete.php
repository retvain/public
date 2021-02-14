<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Удаляем запись</title>
</head>
<body>
<?php
require_once('connect.php');
$id = (int)$_REQUEST['id'];
$delete_sql = "DELETE FROM articles WHERE id='$id'";
mysqli_query($delete_sql) or die ("Ошибка удаления" . mysqli_error());
echo '<p>Запись успешно удалена!</p>';
?>
<a href="add.php">Добавить статью</a><br>
<a href="index.php">Выернуться к выбору записей для редактирования</a><br>
</body>
</html>