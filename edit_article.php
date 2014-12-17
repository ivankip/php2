<?php

require_once __DIR__ . '/models/news.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $template_path = __DIR__ . '/templates/';

    $news = new News();
    $view = new View($template_path);

    $article = $news->news_getId($id);
    $view->article = $article;
    $html = $view->display('edit_article.php');
    echo $html;
}
else {
    echo 'Не выбрана новость' . '<br />';
    echo '<a href="index.php">На главную</a>';
}
