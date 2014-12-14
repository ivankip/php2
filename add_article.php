<?php

require_once __DIR__ . '/models/news.php';

if (isset ($_POST['title']) && isset ($_POST['text'])) {
    $new_article = [
        'title' => $_POST['title'],
        'text'  => $_POST['text']
    ];
    $news = new News();
    $news->news_insert($new_article['title'], $new_article['text']);
}
header('Location: index.php');