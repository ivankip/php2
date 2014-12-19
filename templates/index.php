<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
</head>
<body>
    <?php foreach ($news as $article): ?>
    <article>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
        <a href="../index.php?route=news/one&id=<?php echo $article['id']?>">Читать полностью</a>
    </article>
    <?php endforeach; ?>
    <br />
    <a href="index.php?route=news/insert">Добавить новость</a>
</body>
</html>