<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "admin_db";


$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("connect failed");
}
else{
    echo "connect success";
}

$user = $_POST["username"];
$pass = $_POST["password"];

$query = "SELECT * FROM admin_login WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if($count > 0){
    echo 'successful';
}
else{

    echo 'not successful';
}



?>