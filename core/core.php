<?php

session_start();

#Constantes de conexión
define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASS','');
define ('DB_NAME','portfolio');

#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Personal Portfolio');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://localhost/portfolio/');

#Estructura

require('core/models/class.Conexion.php');
/*
require('vendor/autoload.php'); 
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/Foros.php');
require('core/bin/functions/Categorias.php');
require('core/bin/functions/UrlAmigable.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');

$_users = Users();
$_categorias = Categorias();
$_foros = Foros(); */