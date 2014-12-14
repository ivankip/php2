<?php

require_once __DIR__ . '/models/news.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $news = new News();
    $article = $news->news_getId($id);
    include __DIR__ . '/view/read_article.php';
}