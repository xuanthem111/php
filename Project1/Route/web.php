<?php
require_once 'Bootstrap/app.php';
$controller = $_GET['controller'];
$action = $_GET['action'];
$arrControler = [
    'user',
    'product',
    'order',
];