<?php
$name = 'salma is my name';
echo "<br>";

echo $name;
echo "<br>";
$eho = strlen($name);
echo 'the length of string is ' . $eho;
echo "<br>";

echo str_word_count($name); //kati ota word xa sentennce ma vnxa

echo strrev($name); //reverse
echo "<br>";

echo strpos($name, 'is');  //string ko position dinxa 
echo "<br>";

echo str_replace("name", "good name", $name);
echo "<br>";

echo str_repeat("$name", 5) . "<br>";
echo "<br>";

// <pre > le html ma vako text as it is render gardinxa
echo "<pre>";
echo ltrim('   this is a goof bo    '); //left ko whitespace remove garxa
echo rtrim('   this is a goof bo    '); //right ko whitespace remove garxa

echo "</pre>";
?>