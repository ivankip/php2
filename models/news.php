<?php

require_once __DIR__ . '/../functions/db.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

function News_insert ($new_article)
{
    $title = $new_article['title'];
    $text = $new_article['text'];
    return DBUpload("
    INSERT INTO news (title, text)
    VALUES ('$title', '$text')");
}