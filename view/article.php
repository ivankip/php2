<html>
<head>
    <title>Новости</title>
</head>
<body>
<?php foreach ($article as $values): ?>
    <article>
        <h1><?=$values['title'];?></h1>
        <div><?=$values['text'];?></div>
    </article>
<?php endforeach; ?>
<br /><a href="">Редактировать</a>
</body>
</html>