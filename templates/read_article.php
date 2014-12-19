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
    <br /><a href="../index.php?route=news/edit&id=<?=$article['id'];?>">Редактировать</a>
</body>
</html>