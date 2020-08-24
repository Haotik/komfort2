<?php

const SITE_DIR = __DIR__ . '/../';
const CONFIG_DIR = SITE_DIR . 'config/';
const DATA_DIR = SITE_DIR . 'data/';
const ENGINE_DIR = SITE_DIR . 'engine/';
const WWW_DIR = SITE_DIR . 'public/';
const TEMPLATES_DIR = SITE_DIR . 'templates/';
const SALT = "соль";

const DSN = 'pgsql:host=192.168.0.120;
			dbname=archives'.
			";options='-c client_encoding=utf8'";
const DB_USER = 'postgres';
const DB_PASS = 'postgres';

require_once ENGINE_DIR . 'mainF.php';
require_once ENGINE_DIR . '/vendor/autoload.php';
require_once CONFIG_DIR . 'Twig.php';

$whoops = new \Whoops\Run;
$whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
autoloader();
// вывод ошибок на странице подумать как инициировать правильно
$error = '';
$greating = '';
$flag ='Войти';