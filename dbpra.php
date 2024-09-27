<?php
$servername ="localhost";
$username ="root";
$password="";
$database ="dbharry";

$conn = mysqli_connect($servername , $username , $password, $database);

if(!$conn){
    echo "conenction failed". mysqli_connect_error();

}
else 
echo "connectiiom sucessful <br>";


// $query = "CREATE DATABASE SALMA";
// mysqli_query($conn, $query);//bool
// if(mysqli_query($conn, $query)){
//     echo "db is created";
// }
// else{
//     echo "not created". mysqli_error($conn);
// }



?>