
<?php
  $name1 = isset($_POST['username']) ? trim($_POST['username']) :'';
  $password1 = isset($_POST['Password']) ? $_POST['Password'] : '';
  $submit1 = isset($_POST['Submit']) ? $_POST['Submit'] : '';
  class Request{
    private $name;
    private $password;
    private $submit;

    public function __construct($name,$password,$submit)
    {
      $this->name = $name;
      $this->password = $password;
      $this->submit = $submit;
    }
    public function checkNamePass(){
      if(isset($this->submit)){
        if($this->name == "Vu" && $this->password == "1234"){
          return "Ban la Admin";
        }else{
          return "Ban khong phai Admin";
        }
        header('index11.html');
      }
    }

  }
  $checkRequest = new Request($name1,$password1,$submit1);
   echo $checkRequest ->checkNamePass();
?>