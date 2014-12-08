<?php

require_once 'models/news.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = News_getId($id);
    include 'view/article.php';
}
