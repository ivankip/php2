<?php

require_once __DIR__ . '/models/news.php';

$ob_news = new News;
$template_path = __DIR__ . '/templates/';

$view = new View($template_path);

$view->news = $ob_news->news_getAll();
$html = $view->display('index.php');
echo $html;
