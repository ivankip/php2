<?php

require_once __DIR__ . '/../functions/db.php';
require_once __DIR__ . '/../classes/View.php';

abstract class Article extends DBWork {

    public $title;
    public $text;

    abstract protected function news_getAll();
    abstract protected function news_getOne($id);
    abstract protected function news_insert($title, $text);
    abstract protected function news_edit($id, $title, $text);

}

class News extends Article {

    public function news_getAll() {
        return $this->DBQuery("
        SELECT * FROM news
        ");
    }

    public function news_getOne($id) {
        $art = $this->DBQuery("
        SELECT * FROM news
        WHERE id='$id'
        ");
        return $art[0];
    }

    public function news_insert($title, $text) {
        return $this->DBUpload("
        INSERT INTO news (title, text)
        VALUES ('$title', '$text')
        ");
    }

    public function news_edit($id, $title, $text) {
        return $this->DBUpload("UPDATE news
        SET title='$title', text='$text'
        WHERE id='$id'
        ");
    }


}