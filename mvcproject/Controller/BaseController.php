
<?php

class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    /**
     * Descrtiption :
     * + path name: folderName.file.name
     * + Lay tu sau thu muc View
     * @param $viewPath
     * @param array $data
     * @param $categories
     */
   protected function view($viewPath, array $data = [])
   {
//       echo '<pre>';
//       print_r($data);
//       echo  '</pre>';
//       die;
       foreach ($data as $key => $value){
           $$key = $value;

       }

//       echo '<pre>';
//       print_r($categories);
//      die;

        require(self::VIEW_FOLDER_NAME. '/' .str_replace('.','/',$viewPath).'.php');

   }
   protected function loadModel($modelPath)
   {
       require(self::MODEL_FOLDER_NAME. '/' .str_replace('.','/',$modelPath).'.php');
   }
}
