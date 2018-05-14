<?php

    require_once 'Connection.php';

class RegisterService{
    private $connect=null;
    
    public function __construct() {
        $this->connect=new Connection();
    }

    
    public function saveUser($name,$email,$password,$user){
       //echo $name.$email.$password.$user;
       
       $this->connect->openDb();
      $res= $this->insert($name, $email, $password,$user);
      $this->connect->closeDb();
      return $res;
    }

    
       public function insert( $name,$email,$password,$user ) {
      // echo $name.$email.$password;
        $dbName = ($name != NULL)?"'".mysql_real_escape_string($name)."'":'NULL';
        $dbEmail = ($email != NULL)?"'".mysql_real_escape_string($email)."'":'NULL';
        $dbPassword = ($password != NULL)?"'".mysql_real_escape_string($password)."'":'NULL';
        $dbUser = ($user != NULL)?"'".mysql_real_escape_string($user)."'":'NULL';
         mysql_query("INSERT INTO login (username, email, password, user) VALUES ($dbName, $dbEmail, $dbPassword, $dbUser)");
           return mysql_insert_id();
        }

}

?>



