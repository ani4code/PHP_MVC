<?php
require_once 'Controller/DashboardController.php';
require_once 'Controller/UserController.php';
class HomeController{
    private $dashboardController=NULL;//session checking and redirecting
    private $userController=NULL;
    public function __construct() {
        $this->dashboardController=new DashboardController();
        $this->userController=new UserController();
    }
    function handleRequest(){
        if($_SERVER["REQUEST_METHOD"] == "GET"){
             $action= isset($_GET['action'])?$_GET['action']:$_POST['action'];
            try {
            if ( !$action ) {
                $this->dashboardController->index();
            } elseif ( $action == 'Login' ) {
                $this->userController->handleRequest();
            }  else {
                $this->showError("Page not found", "Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
        }else  {
            
           // echo 'hj';die;
            $postaction=isset($_POST['action'])?$_POST['action']:NULL;
            if($postaction=='Login'){
               // echo "from Home controller";
                $this->userController->handleRequest();
            }
            
        }
     
    }
}


?>

