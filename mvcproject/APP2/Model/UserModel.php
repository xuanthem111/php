<?php


class UserModel
{
    const  MALE = 1;
    const  FEMALE = 2;

    public function getAll()
    {
      return [
        ['id'=>1,'name'=>'nguyen xuan them','sex'=>self::MALE],
          ['id'=>2,'name'=>'cao tuan vu','sex'=>self::MALE],
          ['id'=>3,'name'=>'hop nguyen','sex'=>self::MALE],
          ['id'=>4,'name'=>'nguyen van hoai long','sex'=>self::MALE],
          ['id'=>5,'name'=>'le thi kim ngan','sex'=>self::MALE],
          ['id'=>6,'name'=>'vo van thanh','sex'=>self::MALE],
          ['id'=>7,'name'=>'nguyen duc phuc','sex'=>self::MALE],
      ];
    }

}