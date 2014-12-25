<?php

class DbConnection
{

    protected $pdo;

    public function __construct()
    {
        try {
            $config = self::config();
            $dsn = 'mysql:dbname=' . $config['db']['dbname'] . ';host=' . $config['db']['host'];
            $user = $config['db']['user'];
            $password = $config['db']['password'];

        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }

        $this->pdo = new PDO($dsn, $user, $password);
    }

    private function config()
    {
        return include __DIR__ . '/../config.php';
    }

    public function query($sql, $options = [])
    {
        $sth = $this->pdo->prepare($sql);
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        if (!empty($options)) {
            $sth->execute($options);
        } else {
            $sth->execute();
        }
        return $sth->fetchAll();
    }

}
