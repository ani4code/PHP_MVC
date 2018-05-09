<?php
require_once 'Controller/DashboardController.php';
class HomeController{
    private $dashboardController=NULL;
    public function __construct() {
        $this->dashboardController=new DashboardController();
    }
    function handleRequest(){
       // echo "sfdsfs";
       // echo $_GET['action'];
     $action= isset($_GET['action'])?$_GET['action']:NULL;
     try {
            if ( !$action ) {
                $this->dashboardController->index();
            } elseif ( $action == 'Login' ) {
                $this->saveContact();
            }  else {
                $this->showError("Page not found", "Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
     
    }
}






?>

