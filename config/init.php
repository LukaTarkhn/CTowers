<?php
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ibuild/core');
define("LIBS", ROOT . '/vendor/ibuild/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'main');

// http://localhost:81/public/index.php
$app_path = "https://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// http://localhost:81/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// http://localhost:81
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');


require_once ROOT . '/vendor/autoload.php';

