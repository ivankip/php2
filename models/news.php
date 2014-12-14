<?php

require_once __DIR__ . '/../functions/db.php';

abstract class Article extends DBWork {

    public $title;
    public $text;

    abstract protected function news_getAll();
    abstract protected function news_insert($title, $text);
    abstract protected function news_getId($id);
}

class News extends Article {

    public function news_getAll() {
        return $this->DBQuery("
        SELECT * FROM news
        ");
    }

    public function news_insert($title, $text) {
        return $this->DBUpload("
        INSERT INTO news (title, text)
        VALUES ('$title', '$text')
        ");
    }

    public function news_getId($id) {
        $art = $this->DBQuery("
        SELECT * FROM news
        WHERE id='$id'
        ");
        return $art[0];
    }
}