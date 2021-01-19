<?php
$autoloadController = function ($className){
 $fileName = 'App/controller/'.$className.'.php';
 if(file_exists($fileName)){
     include_once $fileName;
 }
};
$autoloadModel = function ($className){
    $fileName = '/Model/'.$className. '.php';
    if(file_exists($fileName)){
        include_once $fileName;
    }
};

include_once 'Heppler/heppler.php';
spl_autoload_register($autoloadController);
spl_autoload_register($autoloadModel);

