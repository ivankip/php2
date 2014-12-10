<!DOCTYPE html>
<html>
<head>
    <title><?php echo $article[0]['title'];?></title>
</head>
<body>
<?php foreach ($article as $values): ?>
    <article>
        <h1><?=$values['title'];?></h1>
        <div><?=$values['text'];?></div>
    </article>
    <br /><a href="../edit_article.php?id=<?php echo $values['id'];?>">Редактировать</a>
<?php endforeach; ?>
</body>
</html>