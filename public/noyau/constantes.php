<?php
/*
./noyau/constantes.php
 */

// BASE_URL de l'application front
$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define('BASE_URL_PUBLIC', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

// BASE_URL de l'application admin
define('BASE_URL_ADMIN', str_replace('public', 'admin', BASE_URL_PUBLIC));
