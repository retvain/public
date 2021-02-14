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
function cleaner ($value) {
    return htmlspecialchars(strip_tags(mysqli_real_escape_string(trim($value))));
}
$name = cleaner($_REQUEST['name']);
$title = cleaner($_REQUEST['title']);
$text = cleaner($_REQUEST['text']));
$update_sql = "UPDATE news SET name = '$name', title='$title', text='$text' WHERE id='$id'";
mysqli_query($update_sql) or die ("Ошибка вс" . mysqli_error());
echo '<p>Запись успешно обновлена!</p>';
?>
<a href="add.php">Добавить статью</a><br>
<a href="index.php.php">Выернуться к выбору записей для редактирования</a><br>
</body>
</html>

