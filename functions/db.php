<?php

class DBWork
{
    private function config() {
        return include __DIR__ . '/../config.php';
    }
    public function __construct() {
        $config = $this->config();
        mysql_connect(
            $config['db']['host'],
            $config['db']['user'],
            $config['db']['password']
        );
        mysql_select_db($config['db']['dbname']);
    }
    protected function DBQuery($sql)
    {
        $res = mysql_query($sql);
        if (!$res) {
            echo mysql_error();
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_assoc($res))
        {
            $ret[] = $row;
        }
        return $ret;
    }
    protected function DBUpload ($sql)
    {
        $res = mysql_query($sql);
        if (!$res) {
            echo mysql_error();
            return false;
        }
        return true;
    }
}