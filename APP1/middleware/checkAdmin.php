<?php
   class checkAdmin{
       private $role;
       const ROLE_ADMIN = 0;
       const ROLE_MENBER = 1;

       public function __construct($role)
       {
          $this->role =$role;
       }
       public function getRole(){
           return $this->role;
       }
        private function isMenber()
       {
         if($this->getRole() == self::ROLE_MENBER){
             return true;
         }
        return false;
       }
        private function isAdmin(){
           if($this->getRole() == self::ROLE_ADMIN){
               return true;
           }
           return false;
       }
       public function checkRole()
       {
           if($this->isMenber()) return "Day Khong Phai la Adim";
           
           if($this->isAdmin()) return  "Day La ADIM";
           return  "khong xac dinh:";
       }
   }
   $admin = new checkAdmin(0);
   echo $admin->checkRole();
?>