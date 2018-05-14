<?php 
require_once 'Connection.php';
class LoginService{
    private $connect=null;
     public function __construct() {
        $this->connect=new Connection();
    }

        
    function loginUser($name,$password){
       // echo $name.$password;
        $this->connect->openDb();
       $count= $this->validateLogin($name,$password);
       $this->connect->closeDb();
       return $count;   
    }
    
    
    function validateLogin($name,$password){
       // echo $name.$password;
       $dbName = ($name != NULL)?"'".mysql_real_escape_string($name)."'":'NULL';
       $dbPassword = ($password != NULL)?"'".mysql_real_escape_string($password)."'":'NULL';
       //echo $dbName.$dbPassword;
       $rs=mysql_query("SELECT * FROM login WHERE username=$dbName AND password=$dbPassword");
       //$sql="SELECT * FROM login WHERE username=$dbName AND password=$dbPassword";
      // mysqli_query($sql);
       //echo $rs;
//       if ($rs){
//           while ($row = mysql_fetch_array($rs)){
//               
//           }
//       }
//       
       $row=mysql_fetch_array($rs);
       //print_r($row);
       $role=$row[4];

      $count = mysql_num_rows($rs);
//       
//       
       
       $dashboard=array($role, $count);
       //print_r($dashboard);
//        if($count==1){
//            return $role;
//        }
        
        
        return $dashboard;
        //echo $count;
        //return $count;
//        if ($count==1){
//            header("location: View/TeacherDashboardView.php");
//        }
    }
    
}

?>