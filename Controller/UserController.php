<?php
require_once 'Model/RegisterService.php';
//require_once 'Model/LoginService.php';

class UserController{
    
    private $registerService=null;
    //private $loginService=null;
    
    public function __construct() {
        $this->registerService= new RegisterService();
    }
    
     public function redirect($location) {
        header('Location: '.$location);
    }
    
    function handleRequest(){
        //echo "fsdsd";
       $method= isset($_GET['method'])?$_GET['method']:$_POST['method'];
       if ($method=='register'){//action=Login,method=register
           $this->register();
       }elseif ($method=='login') {//action=Login,method=login
            $this->login();
        }elseif ($method=='doRegister'){
            $this->doRegister();
        }elseif ($method=='doLogin'){
            $this->doLogin();
        }
           
       }
       
       function register(){
           //echo "you are in registeration page";
           include 'view/RegisterView.php';  
        }
    
        function login(){
           include 'view/LoginView.php';
        }
    
        public function doRegister(){
           
        $name= $email=$password=$repassword='';
         //$errors=array();
      
           if(isset($_POST['action'])){
              // echo "sfdsfdsfsd";
           
//            echo "sfdsfdsfsd";
              $name= isset($_POST['username'])?$_POST['username']:NULL;
              $email= isset($_POST['email'])?$_POST['email']:NULL;
               $password= isset($_POST['password'])?$_POST['password']:NULL;
              $repassword= isset($_POST['repassword'])?$_POST['repassword']:NULL;
        //       if($password!=$repassword){
//                return $fmsg="Error... Password do not match";
//            }else{
                  //echo "djfdlskjfds";
//                $password=md5($_POST['password']);
             // echo $name.$email.$password.$repassword;
                  $this->registerService->saveUser($name,$email, $password );
                   //$this->redirect('index.php');
                   //return;
//         
               }
//            
//        }
//            
//            
//           include 'view/RegisterView.php';
//             //echo "POST Register operation";
        }
    
        function doLogin(){
            echo "POST Login operation";
        }
    
    
    
}





?>
