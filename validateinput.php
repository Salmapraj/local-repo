<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/PHP/validateinput.php" method="POST">
        <label for="name">Enter your name</label>
        <br>
        <input type="text" id="name" placeholder="enter your name" name="name">
        <br>


        <label for="age">age</label>
<br>

       <input type="age" name="age" id="age" >
<br>

        <label for="mail">Mail</label>
<br>

       <input type="email" name="email" id="mail" placeholder="email id">
<br>
        <br>

        <input type="submit" name="submit" value="submit">
        <br>
    </form>
</body>

</html>
<?php

// his line sanitizes the user input. It retrieves the data from the POST request (in this case, the value from the name input field) and applies the FILTER_SANITIZE_SPECIAL_CHARS filter.
// This prevents the execution of potentially malicious code, such as scripts embedded in user input, thereby reducing the risk of XSS (Cross-Site Scripting) attacks.

if(isset($_POST["submit"])){
    $username =filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $username;

    $age = filter_input(INPUT_POST,"age", FILTER_SANITIZE_NUMBER_INT);
    echo $age;

    $email =filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    echo $email;
  }  

?>
