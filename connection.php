<?php

class connection{
private function openDb() {
$connection = mysqli_connect('127.0.0.1:3307', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'Login');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
}

private function closeDb(){
    mysqli_close();
}

}
?>