<?php

namespace core;

class App
{

    public static $app;

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']), '/');
        new ErrorHandler();
        self::$app = Registry::getInstance();
        $this->getParams();
        Router::dispatch($query);
    }

    protected function getParams()
    {
        $filename = ETC . '/params.php';
        if (file_exists($filename)) {
            $params = require_once ETC . '/params.php';
        } else{
            echo 'Файла не существует!';
            exit;
        }
        if (!empty($params)) {
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }

}