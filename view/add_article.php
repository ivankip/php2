<html>
<head>
    <title>Добавить новость</title>
</head>
<body>
    <form action="../add_article.php" method="post">
        <input type="text" name="title" placeholder="Заголовок" size="40" /><br />
        <textarea name="text" cols="45" rows="10" placeholder="Текст статьи"></textarea><br />
        <input type="submit" value="Сохранить" />
    </form>
</body>
</html>