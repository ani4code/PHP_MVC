<?php

class DashboardController{
    function handleRequest(){
       // echo "djfldsjlfkjdsl";
       
    }
    function index(){
       // echo "lkdsjflsjdfl";
        if (!isset($_SESSION['USER'])){
        include 'view/LoginView.php';
        }elseif ($_SESSION['USER']=="Teacher") {
            //include 'view/TeacherDasboardView.php';
        }elseif ($_SESSION['USER']=="Teacher") {
            //include 'view/StudentDasboardView.php';
        }
    }
}

?>

