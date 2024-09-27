<?php

$servername ="localhost";
$username ="root";
$password="";

$conn =mysqli_connect($servername,$username,$password);

if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
    echo "connection sucessful"."<br>";
}

$sql = "CREATE DATABASE IF NOT EXISTS hello";
//execute query
mysqli_query($conn, $sql);
$result= mysqli_query($conn, $sql);
echo var_dump($result)."<br>";

//to check if db  is created or not
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
  ?>