<?php

require_once 'models/news.php';

if (isset ($_POST['title']) && isset ($_POST['text'])) {
    $new_article = [
        'title' => $_POST['title'],
        'text'  => $_POST['text']
    ];
    News_insert($new_article);
}
header('Location: index.php');