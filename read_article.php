<?php

require_once __DIR__ . '/models/news.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $template_path = __DIR__ . '/templates/';

    $news = new News();
    $view = new View($template_path);

    $article = $news->news_getId($id);
    $view->article = $article;
    $html = $view->display('read_article.php');
}