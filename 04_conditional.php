<?php
$a =112;
$b =5;
if($a>12)
{
    echo "$a is greater then 12";
    echo "<br>";

}

switch($a){
    case 12:
        echo 'number  is correcr';
        break;
        case 112:
            echo $a;
            echo "<br>";
            break;

            default :
            break;
}


// loops 1. for loops 2.while loop 3.do-while loops 4.foreach loop
echo "<br>";

$nam ='hello';
for($i=0 ;$i<5;$i++){
echo str_repeat("$nam",1);
echo "<br>";

}

// 2.while loop  The while loop continues to execute a block of code as long as the condition remains true
$b=7;
$a =5;
while($b!=0){
    $temp =$b;
 $b= $b % $a;
 $a =$temp;
 
    
}
echo $a;
echo "<br>";


//4. foreach loop used to iterarte over arrays and objects.
// foreach($array as $value){}
// foreach($variable as $key => $value){} object
$fruitname =['banana', 'mango', 'apple'];
foreach($fruitname as $value ){
    echo $value;
    echo "<br>";

}
?> 