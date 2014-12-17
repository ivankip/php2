<?php

require_once __DIR__ . '/storage.php';

class View extends Storage
{
    protected $path;

    public function __construct($path) {
        $this->path = $path;
    }

    public function display($template) {
        foreach ($this as $k => $v) {
            $$k = $v;
        }
        ob_start();
        include $this->path . $template;
        $ret = ob_get_contents();
        return $ret;
    }
}