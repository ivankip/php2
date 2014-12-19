<!DOCTYPE html>
<html>
<head>
    <title>Редактировать новость</title>
</head>
<body>
<h3>Добавить новость</h3>
<form action="../index.php?route=news/insert" method="post">
    <input type="text" name="title" placeholder="Заголовок" size="40" /><br />
    <textarea name="text" cols="45" rows="10" placeholder="Текст статьи"></textarea><br />
    <input type="submit" value="Сохранить" />
</form>
</body>
</html>