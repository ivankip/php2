<!DOCTYPE html>
<html>
<head>
    <title><?=$article['title'];?></title>
</head>
<body>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
    </article>
    <br /><a href="../edit_article.php?id=<?=$article['id'];?>">Редактировать</a>
</body>
</html>