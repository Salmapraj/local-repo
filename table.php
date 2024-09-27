<?php
$servername ="localhost";
$username ="root";
$password="";
$db_name ="mydb";

$conn = mysqli_connect($servername, $username, $password,$db_name);
if(!$conn){
    echo "connection failed".mysqli_connect_error();
}
else{
    echo "connection sucessful"."<br>";
}
//table create CREATE TABLE table_name (
//     column1 datatype,
//     column2 datatype,
//     column3 datatype,
//    ....
// // );
// $sql = "CREATE TABLE `ptable` (`id` INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY, `NAME` VARCHAR(10) NOT NULL, `ADDRESS` VARCHAR(10) NOT NULL)";

// $result = mysqli_query($conn, $sql);
// if($result){

//     echo " table created";
// }
// else
// echo mysqli_error($conn);

//variable can be inserted into table
$name ='ram';
$address = 'pohkara';

//insert into table
// $insert= "INSERT INTO ptable(  NAME ,ADDRESS) VALUES ('hari', 'thimi')";

$insert= "INSERT INTO ptable(  NAME ,ADDRESS) VALUES ('$name', '$address')"; //since sno. is autoincremented value dina prdaina.
if(mysqli_query($conn, $insert)){
    echo "insertion sucessful";
}
else{
    echo"insert values". mysqli_error($conn);
}
?>