<?php
require_once '../helper/helper.php';
 class kethuaController
 {

     //load file view tuong ung voi controller
     public function View($file,$data)
     {
         $path = '../view/'. $file . '.php';
         //dd($path);
         if (file_exists($path)){
             ob_start();
             require_once $path;
             $content = ob_get_clean();
             require_once '../view/layout/main.php';
         } else{
             echo "404 NOT FOUND";
         }
     }

 }
