<?php
require_once 'Model/RegisterService.php';
require_once 'Model/LoginService.php';
require_once 'Model/StudentsService.php';
require_once 'Controller/StudentsController.php';
class UserController{
    
    private $registerService=null;
    private $loginService=null;
    private $studentsController=null;
    
    public function __construct() {
        $this->registerService= new RegisterService();
        $this->loginService= new LoginService();
        $this->studentsController= new StudentsController();
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
        }elseif ($method=='doRegister'){//action=Login, method=doRegister
            $this->doRegister();
        }elseif ($method=='doLogin'){//action=Login, method=doAction
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
              $name= isset($_POST['username'])?$_POST['username']:NULL;
              $email= isset($_POST['email'])?$_POST['email']:NULL;
              $password= isset($_POST['password'])?$_POST['password']:NULL;
              $repassword= isset($_POST['confirmpassword'])?$_POST['confirmpassword']:NULL;
              $user=isset($_POST['user'])?$_POST['user']:NULL;
              if ($password!=$repassword){
                  echo "Password mismatch";
                  return;
              }else{
                  $password=md5($password);
              }
                $this->registerService->saveUser($name,$email, $password,$user );
                $this->redirect('index.php');
                return;      
               }
          
           include 'view/RegisterView.php';
//             //echo "POST Register operation";
        }
    
        function doLogin(){
            //echo "POST Login operation";
            if(isset($_POST['action'])){
                $name= isset($_POST['username'])?$_POST['username']:NULL;
                $password= isset($_POST['password'])?md5($_POST['password']):NULL;
                $dash= $this->loginService->loginUser($name,$password);
                if ($dash[0]=="teacher" && $dash[1]==1){
                    $this->studentsController->listStudents();
                    //header("location: View/TeacherDashboardView.php");
//                if ($count==1){
//                    //header("location: View/TeacherDashboardView.php");
//                    $this->redirect('View/TeacherDashboardView.php');
//                }else{
//                    echo "Invalid Username/Password";
		//$fmsg = "Invalid Username/Password";
	}elseif ($dash[0]=="student" && $dash[1]==1) {
            header("location: View/StudentDashboardView.php");
        }else{
            echo "Invalid Username/Password";
        }
            }
            }
            
            
           
            
            
            
            
            
            
        }
    
    
    






?>
