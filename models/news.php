<?php

class News
    extends AbstractModel
{
    static protected $table = 'news';

    public function news_getAll()
    {
        return static::findAll();
    }

    public function news_getOne($id)
    {
        return static::findByPk($id);
    }

    public function news_insert($title, $text)
    {
        $sql = 'INSERT INTO ' . static::$table . ' (title, text) VALUES (:title, :text)';
        $options = [
            'title' => $title,
            'text'  => $text
        ];
        $db = new DbConnection();
        return $db->query($sql, $options);
    }

    public function news_edit($id, $title, $text)
    {
        $sql = 'UPDATE ' . static::$table . ' SET title=:title, text=:text WHERE id=:id';
        $options = [
            'id'    => $id,
            'title' => $title,
            'text'  => $text
        ];
        $db = new DbConnection();
        return $db->query($sql, $options);
    }

}