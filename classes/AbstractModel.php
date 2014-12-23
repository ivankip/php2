<?php

abstract class AbstractModel {

    static protected $table;

    static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        return DbConnection::query($sql);
    }

    static function findByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . 'WHERE id=:id';
        return DbConnection::queryPk($sql, $id);
    }

    static function insert($title, $text)
    {
        $sql = 'INSERT INTO ' . static::$table . '(title, text) VALUES (' . $title . ', ' . $text . ')';
        return DbConnection::query($sql);
    }

    static function edit($id, $title, $text)
    {
        $sql = 'UPDATE ' . static::$table . 'SET title=' . $title . ', text=' . $text . ' WHERE id=:id';
        return DbConnection::queryPk($sql, $id);
    }
} 