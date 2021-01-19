<?php
include_once  'Route/web.php';
include_once 'Boostrap/app.php';

if (isset($controller) && isset($action)){
    if(in_array($controller,$arrController)){
        $controller = ucfirst($controller). 'Controller';
        $object = new $controller();
        $object->$action();
    }
    else
        {
          require_once 'view/errors/lost/404.php';
        }
}
