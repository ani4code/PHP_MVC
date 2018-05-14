<?php 
require_once 'Connection.php';

class StudentsService{
    private $connect=Null;
    
    function __construct() {
        $this->connect=new Connection();
    }
    
  function getAllStudents(){
      //echo "from students service";
      $this->connect->openDb();
      $students=$this->selectAll();
      $this->connect->closeDb();
      return $students;
      
    
    }  
    
    
    function selectAll(){
        $rs=mysql_query("SELECT * FROM login");
        //print_r($rs);
        //$students=mysql_fetch_array($rs);
        //print_r($students);
        $students=array();
        while(($obj=mysql_fetch_object($rs))!=Null){
            $students[]=$obj;
        }
        //print_r($students);
        return $students;
        
    }
    
    
    
}


?>
