<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "company_db";


$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("connect failed");
}
else{
    //echo "connect success";
}

?>