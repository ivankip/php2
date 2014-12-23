<?php

class DbConnection {

    static private function config()
    {
        return include __DIR__ . '/../config.php';
    }

    static private function getConnection()
    {

        $config = self::config();
        $dsn = 'mysql:dbname=' . $config['db']['dbname'] . ';host=' . $config['db']['host'];
        $user = $config['db']['user'];
        $password = $config['db']['password'];
        return new PDO($dsn, $user, $password);

    }

    static function query($sql)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $sth->execute();
        return $sth->fetchAll();
    }
    static function queryPk ($sql, $id)
    {
        $dbh = static::getConnection();
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $sth->execute(['id' => $id]);
        return $sth->fetchAll();
    }
}
