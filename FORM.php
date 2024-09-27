
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/PHP/FORM.php" method="POST">
<label for="name">Enter your name</label>
<br>
        <input type="text" id="name" placeholder="enter your name" name="name">
<br>
        
<label for="mail">Mail</label>
<br>

       <input type="email" name="email" id="mail" placeholder="email id">
<br>
      
<label for="vegetable">vegetable</label>

<select name ="veg" size="1">
    <option value="Peas">Peas</option>
    <option value="none">none</option>
    <option value="beans">beans</option>
    <option value="cabbage">cabbage</option>
</select>

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
        echo "Form submitted successfully.<br>";
        echo "Name: $name<br>";
           echo "Email: $email";
    } else {
        echo "Please fill out the form completely.";
    }
}
?> 