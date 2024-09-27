<?php
//ways to connect mysql database
// 1. MYSQLi extensiion
// 2. PDO 

$servername = "localhost";
$username ="root";
$password ="";

//connection create
$conn =mysqli_connect($servername, $username , $password);
// echo var_dump($conn);

if(!$conn){
    die("connection failed" .mysqli_connect_error());
    
}
else
echo "connection was sucessful";

?>