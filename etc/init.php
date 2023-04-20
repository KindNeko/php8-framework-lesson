<?php
define('DEBUG', 1);
define('ROOT', dirname(__DIR__));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/core');
define('HELPERS', ROOT . '/vendor/core/helpers');
define('CACHE', ROOT . '/tmp/cache');
define('LOGS', ROOT . '/tmp/logs');
define('ETC', ROOT . '/etc');
define('LAYOUT', 'framework'); // шаблон сайта по умолчанию, в случае чего можно переопределить на уровне приложения
define('PATH', 'http://localhost:81/framework/');
define('ADMIN', 'http://localhost:81/framework/admin');
define('NO_IMAGE', 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';
