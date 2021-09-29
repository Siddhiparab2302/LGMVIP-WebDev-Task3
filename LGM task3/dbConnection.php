<?php
$db_host = "localhost:3308";
$db_user = "root";
$db_password="";
$db_name="task3";


//create connection
$conn = new mysqli($db_host,$db_user,$db_password,$db_name);

//check connection
if($conn->connect_error){
    die("connection failed");
}
?>