<!DOCTYPE html>
<html>
<head>
    <title>Редактировать новость</title>
</head>
<body>
<form action="../index.php?route=news/edit&id=<?=$_GET['id'];?>" method="post">
    <input type="text" name="title" value="<?=$article['title'];?>" size="40" /><br />
    <textarea name="text" cols="45" rows="10"><?=$article['text'];?></textarea><br />
    <input type="submit" value="Сохранить" />
</form>
</body>
</html>