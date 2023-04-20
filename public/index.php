<?php

use core\App;
use core\Router;

if (PHP_VERSION < 8) {
	exit('Версия PHP должна быть >= 8');
}
require_once dirname(__DIR__) . '/etc/init.php';
require_once HELPERS . '/functions.php';
require_once ETC . '/routes.php';

new App();

//debug(Router::getRoutes());
