<?php

require_once __DIR__ . '/../functions/db.php';

//Функция получения всех новостей
function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

//Фуенкция добавления новой новости
function News_insert ($new_article)
{
    $title = $new_article['title'];
    $text = $new_article['text'];
    return DBUpload("
    INSERT INTO news (title, text)
    VALUES ('$title', '$text')");
}

//Функция получения новости по id
function News_getId($id)
{
    return DBQuery("
    SELECT * FROM news
    WHERE id='$id'
    ");
}