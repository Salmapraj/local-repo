
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
<label for="name">Enter your name</label>
<br>
        <input type="text" id="name" placeholder="enter your name" name="name">
<br>
        
<label for="mail">Mail</label>
<br>

       <input type="email" name="email" id="mail" placeholder="email id">
<br>
      

<br>
<input type="submit" value="submit" name="submit">
        </form>

</body>
</html>

<?php


    
if (isset($_POST['submit'])) {
    // Check if name and email are set and not empty
    if (!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
       
    

$servername ="localhost";
$username ="root";
$password ="";
$database= "mydb";

$conn =mysqli_connect($servername,$username,$password ,$database);
if(!$conn){
    die("connection failed" .mysqli_connect_error());
    
}
else{
echo "connection was sucessful";
//insert the submit vako value into datbase
$sql ="INSERT INTO phptable (NAME,email) VALUES('$name', '$email')";

$result= mysqli_query($conn, $sql);
if($result){
    echo "recorded in db";
    echo "Form submitted successfully.<br>";
    echo "Name: $name<br>";
    echo "Email: $email";

}
else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
}
}
else{
    echo "Please fill out both fields.";
}
}
?> 