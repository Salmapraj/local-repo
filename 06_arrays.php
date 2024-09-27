<?php
// arrays in php
//  indexed arrays  associative arrays multidimensional array
$arr = ['apple','mango', 'pineapple'];
 $arr[0]= 'banana';
 $arr[5]= 'ba';
 
 echo $arr[5];
 echo "<br>";

echo $arr[0];
echo "<br>";

echo $arr[1];
echo "<br>";

echo $arr[2];
echo var_dump($arr);

echo "<br>";
echo "<br>";

//assosiative arraysx
// Associative arrays use named keys that you assign to access elements. These keys can be strings or numbers.
$age =['john'=>15 , 'jaee'=>12, 'ram'=>15];
echo $age['john'];
echo "<br>";
// foreach($variable as $key => $value){} object

$info =['name'=> 'salma', 'age'=> 21, 'address'=> 'thimi'];echo "<br>";

echo ($info['name']);
echo "<br>";
foreach($info as $key =>$value){
    echo $value;
    echo "<br>";

}


//Multidimensional array
$fruit = [[1,5,3],[4,8,9,7]];
echo $fruit[0][2];


$fr = ['name1' => ['age' =>12, 'name'=> 'sallma'], 'name2'=> ['deuit'=> 'applme','nn'=>45]];
echo var_dump ($fr['name1']['age']);

echo "<br>";


//array functions in php
// 1.count(): Returns the number of elements in an array.
$count =count($arr);
// 2. array_merge(): Merges two or more arrays into one.

echo $count;
$merge=array_merge($arr,$fruit);
foreach($merge as $value){
    echo var_dump($value);
}

echo "<br>";
echo "<br>";
echo "<br>";
// array_push(): Adds one or more elements to the end of an array.
array_push($arr,'bahaha');
echo var_dump($arr);


// array_values(): Returns all the values of an array.
echo "<br>";

$value= array_values($arr);
print_r($arr);
echo "<br>";

print_r($age);


// in_array(): Checks if a value exists in an array.
// is_array(): Checks if a it is array or variable
// extract() = it takes key-value pairs from an array and creates variables in the current scope, where the key becomes the variable name, and the value becomes the variable's value.

echo "<br>";

$infora =['name'=> 'salma', 'age'=> 21, 'address'=> 'thimi'];
extract($infora);
echo $name;echo "<br>";

echo $age;
echo "<br>";

echo $address;
echo "<br>";

//variables
$nam ='salm';
$hi =18;
$data = compact('nam', 'hi');
print_r($data);

?>