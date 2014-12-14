<?php

require_once __DIR__ . '/models/news.php';

$ob_news = new News;
$news = $ob_news->news_getAll();

include __DIR__ . '/view/index.php';
include __DIR__ . '/view/add_article.php';