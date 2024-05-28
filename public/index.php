<?php
//определяем константы для быстрого доступа к папкам
define("ROOT", dirname(__DIR__));
define("PUBLIC", ROOT . '/public');
define("CORE", ROOT . '/core');
define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');
define("PATH", 'http://test.loc/');

require CORE . '/funcs.php';
//Роутинг
//текущий url без учета домена под корневой папкой, обрезаем концевые слешы
$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
//переход к контроллеру 
if ($uri === '') {
   require CONTROLLERS . '/index.php';
} elseif ($uri == 'about') {
   require CONTROLLERS . '/about.php';
} else {
   abort();
}

