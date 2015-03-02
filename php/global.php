<?php if( !defined('OK') ){ exit(); }


// GENERAL
define('APP_NAME', "Php Project 1");

// GLOBALS
$lang       = 'en';
$encoding   = 'UTF-8';
$now        = getdate();
$filename   = ltrim($_SERVER['SCRIPT_NAME'],'/');

// MYSQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'company');

