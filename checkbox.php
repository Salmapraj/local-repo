<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="checkbox.php" method="POST">
    <label for="pizza">Pizza</label>
<input type="checkbox" name="pizza" id="pizza" >
<br>
<label for="burger">Burger</label>
<input type="checkbox" name="burger" id="burger" >
<br>
<label for="Hotdog">Hotdog</label>
<input type="checkbox" name="hotdog" id="Hotdog" >
<br>

<input type="submit" value="click" name="submit">
   </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    if(isset($_POST["pizza"])){
        echo "you like pizza";
    }
    else
    echo 'please click on any one';
}
?>