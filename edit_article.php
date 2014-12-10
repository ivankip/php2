<?php

require_once 'models/news.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $article = News_getId($id);
    include 'view/edit_article.php';
}
