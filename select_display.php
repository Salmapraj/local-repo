<?php
$servername ="localhost";
$username ="root";
$password="";
$database ="mydb";

$conn = mysqli_connect($servername , $username , $password,$database);

if(!$conn){
    echo "conenction failed". mysqli_connect_error();

}
else 
echo "connectiiom sucessful <br>";

$sql= "SELECT *FROM phptable";
$result = mysqli_query($conn,$sql);  //exexute query



//ficn the number of rows returned
$num= mysqli_num_rows($result);
echo $num;
//display the rows returned by sql query
if($num>0){
    // $row =mysqli_fetch_assoc($result);
 //gives euta matra record to get arko record $row = lai copy grne this will continue until  row= becomes null
while($row= mysqli_fetch_assoc($result))
    echo var_dump($row)."<br>";
echo $row["id"]. "<br>";
    }
