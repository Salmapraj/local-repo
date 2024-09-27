 <?php
session_start();

?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is the homepage.<br>
    
    <a href="sessionset.php"> This goes to login page</a>

    <form action="sessionset.php" method="POST">
        <label for="name" style="font-weight: bold;">Your name</label>
        <br>
        <input type="text" id="name" name="k" placeholder="Enter your name">
        <p></p>
        <p></p>

       
        <label for="password" style="font-weight: bold;">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <p></p>

        <input type="submit" name="submit" value="submit">
        <br>
</body>
</html>
-->
<?php

// if(isset($_POSbT["submit"])){
//     $_SESSION["password"]= $_POST["k"];
//     $_SESSION["username"]= $_POST["password"];
    
//     echo $_SESSION["password"]. "<br>";
// echo $_SESSION["username"];

// }

if(isset($_SESSION["username"],$_SESSION["password"] )){
echo "name is ". $_SESSION["username"]."<br>";
echo "name is ". $_SESSION["password"];

}
else
echo"enter username and password";
 ?> 