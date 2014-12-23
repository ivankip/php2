<?php

class News extends AbstractModel
{
    static protected $table = 'news';

    public function news_getAll() {
        return $this->findAll();
    }

    public function news_getOne($id) {
        return $this->findByPk($id);
    }

    public function news_insert($title, $text) {
        return $this->insert($title, $text);
    }

    public function news_edit($id, $title, $text) {
        return $this->edit($id, $title, $text);
    }

}