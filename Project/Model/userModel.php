<?php
class userModel
{
     const MALE = 1;
     const  FEMALE = 2;

     public function  getAll()
     {
         return [
             ['id'=>1,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
              ['id'=>2,'name'=>'Nguyen Van A','sex'=>self::MALE],
              ['id'=>3,'name'=>'Nguyen B','sex'=>self::MALE],
              ['id'=>4,'name'=>'Nguyen Xuan Giau','sex'=>self::FEMALE],
              ['id'=>5,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
              ['id'=>6,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
              ['id'=>7,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
              ['id'=>8,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
              ['id'=>9,'name'=>'Nguyen Xuan Them','sex'=>self::MALE],
         ];
     }


}
