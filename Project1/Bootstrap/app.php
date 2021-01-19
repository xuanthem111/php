<?php
require_once 'Helpers/helper.php';
$autoloadController = function ($className) {
    $fileName = 'App/Controller/'. $className . '.php';
    if (file_exists($fileName)) {
        include_once $fileName;
    }
};
$autoloadModel = function ($className){
    $fileName ='Models/'.$className. '.php';
    if (file_exists($fileName))
    {
        include_once $fileName;
    }
};
$autoloadView = function ($className){
    $fileName ='Views/'.$className.'.php';
    if(file_exists($fileName))
    {
        include_once $fileName;
    }
};
spl_autoload_register($autoloadView);
spl_autoload_register($autoloadModel);
spl_autoload_register($autoloadController);

include_once 'Helpers/helper.php';