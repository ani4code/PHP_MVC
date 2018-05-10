<?php
class RegisterService{
    
     private function openDb() {
        if (!mysql_connect("127.0.0.1:3307", "root", "")) {
            throw new Exception("Connection to the database server failed!");
        }
        if (!mysql_select_db("login")) {
            throw new Exception("No mvc-crud database found on database server.");
        }
    }
    
    private function closeDb() {
        mysql_close();
    }
    
    public function saveUser($name,$email,$password){
        //echo $name;
        //echo "lkdjsfljdslf";
     
       // echo 
       // $username.$useremail.$userpassword;
        try {
            $username= ($name != NULL)?"'".$name."'":'NULL';
           $useremail = ($email != NULL)?"'".$email."'":'NULL';
        $userpassword = ($password != NULL)?"'".$email."'":'NULL';
            
            $this->openDb();
            mysql_query("INSERT INTO login (username, email, password) VALUES ($username, $useremail, $userpassword)");
           echo "hi";
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
        
    }
    
    
    
    
    public function insert( $username,$useremail,$userpassword ) {
        
        //$dbName = ($username != NULL)?"'".mysql_real_escape_string($username)."'":'NULL';
        //$dbEmail = ($useremail != NULL)?"'".mysql_real_escape_string($useremail)."'":'NULL';
        //$dbPassword = ($userpassword != NULL)?"'".mysql_real_escape_string($userpassword)."'":'NULL';
       // echo $dbName.$dbEmail.$dbPassword;
        $dbName="ababa";
        $dbEmail="sacsac";
        $dbPassword="sacsacsav";
        
        mysql_query("INSERT INTO login (username, email, password) VALUES ($dbName, $dbEmail, $dbPassword)");
        return mysql_insert_id();
    }

}

?>



