<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tut.php" method="POST">
        <label for="name">username</label>
        <br>
        <input type="text" name="username" id="name">
        <br>
    <label>password</label>
    <br>
        <input type="password" name="password" >
        <br>
<input type="submit" name ="login" value="login">    </form>
</body>
</html>

<?php
 foreach( $_POST as $key => $vale){
    echo "$key = $value <br>";
 }
 if(isset($_POST["username"]))
?>