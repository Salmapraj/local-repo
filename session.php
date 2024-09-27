<?php

session_start();  
?>

<?php
$_SESSION["username"]= "salma";
$_SESSION["password"]= 'hello';
echo $_SESSION["username"]."<br>";
echo $_SESSION["password"];
?>