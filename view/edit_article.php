<html>
<head>
    <title>Редактировать новость</title>
</head>
<body>
<form action="../edit_article.php" method="post">
    <input type="text" name="title" value="<?php echo $article[0]['title'];?>" size="40" /><br />
    <textarea name="text" cols="45" rows="10"><?php echo $article[0]['text'];?></textarea><br />
    <input type="submit" value="Сохранить" />
</form>
</body>
</html>