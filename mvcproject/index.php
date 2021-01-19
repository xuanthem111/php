<?php

require  './Controller/BaseController.php';
require  './Core/Database.php';
$controllerName = ucfirst((strtolower($_REQUEST['Controller']) ?? 'Welcome') .'Controller');
$actionName = $_REQUEST['action'] ?? 'index';

require "./Controller/${controllerName}.php";


$controllerObject = new $controllerName;

$controllerObject->$actionName();



