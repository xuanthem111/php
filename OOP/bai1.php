<?php 
  class HuyHaveCrush{
      const ENOUGH_MONEY = 70000; 
    public $age;
    public $sex;
    public $schoolName;
    public $exBoyFriend;
    public $favorite;
    public $money;
 
     function setMoney($money){
         // gán value cho thuộc tính 
         $this->money = $money;
     }
     function getMoney(){
          return $this->money;
     }
     function checkEnoughMoney(){
         if($this ->getMoney() > self::ENOUGH_MONEY ){
             echo"Ông huy được access co bạn gái";
         }else{
             echo"Ông huy Unacess co bạn gái";
         }
     }
  }
  $huy = new  HuyHaveCrush();
  $huy->setMoney(20000);
  $huy->checkEnoughMoney();
?>