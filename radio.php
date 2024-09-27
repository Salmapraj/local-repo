<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="radio.php" method="POST">


   <label for="visa">visa</label>
   <input type="radio" name="card"  id="visa" value="visa">
   <br>
   <label for="Master card">Master card</label>
   <input type="radio" name="card"  id="Master card" value="Master card"><br>

<!-- //name same garyo vne euta ma matra tick launa milxa group banxa -->

   <label for="csredit">Credit</label>
   <input type="radio" name="card"  id="credit" value="credit">
   <br>
   <br>
   <input type="submit" value="confirm" name="confirm">
   </form> 
</body>
</html>

<?php
if(isset($_POST["confirm"])){
    if(isset($_POST["card"])){
$card =$_POST["card"];
echo $card;}
else{
    echo "select card";
}
}
?>