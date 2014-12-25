<?php

abstract class AbstractModel
{

    static protected $table;

    static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DbConnection();
        return $db->query($sql);
    }

    static function findByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DbConnection();
        $options = [
            'id' => $id
        ];
        return $db->query($sql, $options);
    }

}

