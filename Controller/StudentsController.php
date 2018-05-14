<?php
    require_once 'Model/StudentsService.php';

    
    class StudentsController{
        private $studentsService=Null;
        
        function __construct() {
            $this->studentsService=new StudentsService;
        }
        
         function listStudents(){
               // echo "dskfjdsjf";
                $students=$this->studentsService->getAllStudents();
                include 'View/TeacherDashboardView.php';
            }
        
        
        
    }
?>