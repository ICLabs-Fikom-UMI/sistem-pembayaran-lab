<?php

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = explode("/", $url);

$baseurl = 'http://' . $url[2] . '/master-php-mvc';

define('BASEURL', $baseurl);

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'coba_arduino');

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);