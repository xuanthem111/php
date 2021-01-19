
<?php
  class ProductModel
  {
      const TABLE = 'products';

      public  function getAll(){
          return [
              [
                  'id' => 12,
                  'name' =>'Iphone 12'
              ],
               [
                  'id' => 14,
                  'name' =>'Iphone 12'
              ],
               [
                  'id' => 15,
                  'name' =>'Iphone 11'
              ],
               [
                  'id' => 12,
                  'name' =>'Iphone 12'
              ],
               [
                  'id' => 17,
                  'name' =>'Iphone 18'
              ],

          ];
      }

      public  function  findById($id)
      {
         return [
             'id' => 12,
             'name' =>'Iphone 12'
         ];
      }

      public  function  delete(){
          return __METHOD__;
      }



  }