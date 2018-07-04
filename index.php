<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Tatiana\Polyglot\App\Router;
//include "private/App/Controller.php";
//include "private/Controllers/IndexController.php";
//include "private/Controllers/FormController.php";
//include "private/Controllers/GoodsController.php";
Router::run("Tatiana\Polyglot\Controllers\\");
