<?php
$servername= "localhost";
$username ="root";
$password ="";
$database ="hello";
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){
    echo mysqli_connect_error();
}
$sql = "INSERT INTO employee(id ,NAME, ADDRESS) VALUES (1,'SAMA','SHAHSA')";
mysqli_query($conn,$sql);
if(!mysqli_query($conn,$sql)){
    echo mysqli_error($conn);
}


?>