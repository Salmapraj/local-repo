<?php
// global variable ko scope function vitra hudaina
// Local variables are those declared within a function or a block of code. 

function myFunction() {
    $localVar = "I'm a local variable!";
    echo $localVar; // This will work
}

myFunction();

//echo $localVar; // This will cause an error because $localVar is not accessible here

echo "<br>";

$a =25;
$b= 15;
print_r ($GLOBALS);
echo "<br>";

function prnt(){
//to access global variable use the keyword global
// global $a,$b;

// echo $a.$b;
echo $GLOBALS['a'];

}
prnt();
    ?>