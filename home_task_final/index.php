<?php

$string = "My name is Most.Ahona Anjum"; //declearing a variable

echo "String length is " . strlen($string) . "<br>"; //counts the length of a string
echo "Number of words in the string : " . str_word_count($string) . "<br>"; //counts the number of words in a string

if (str_contains($string, "Ahona")) { //checks whether a string contains a specific string
    echo " Found<br>";
} else {
    echo "Not found !<br>";
}

echo "Position of Ahona in the string is : " . strpos($string, "Ahona") . "<br>"; //finds the position of a substring
echo strtoupper($string) . "<br>"; // convert the string into uppercase
echo strtolower($string) . "<br>"; //converting the string into lower case

$new_text = str_replace("Most.Ahona anjum", "Ahona", $string); //replace a specific text with another text
echo $new_text . "<br>";

echo strrev($string) . "<br>"; //reverse the string

$temp_1 = "       I         have     a      Car.";
echo trim($temp_1) . "<br>"; // remove tabs, spaces and new line

$temp_2 = "Apple,Banana,Mango";
$fruits = explode(",", $temp_2); //split a string into an array based on a separator
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

$temp_3 = implode(" , ", $fruits); // converting array to string
echo $temp_3 . "<br>";

$temp_4 = substr($string, 26, 32); //extract a part of a string
echo $temp_4 . "<br>";

$age = 21;
if (is_int($age)) { //check whether a variable contains an integer
    echo "Age is an integer..<br>";
}

if (is_float($age)) { //check whether a variable contains an float
    echo "Age is Float..<br>";
} else {
    echo "Age is not Float..<br>";
}

if (is_nan($age)) { //check whether a variable value is NaN or not
    echo "this is NaN";
} else {
    echo "this is not NaN<br>";
}

if (is_numeric($age)) { // check whether the value is numeric or numeric string
    echo "It is numeric<br>";
} else {
    echo "It is not numeric<br>";
}

$temp_5 = 12.439;
echo "The round of {$temp_5} is : " . round($temp_5) . "<br>"; //round a number

define("pi", 3.1416); // creat a constant
echo pi . "<br>";

echo "Date: " . date("y-m-d") . "<br>"; //format a local date and time
echo "Time : " . date("H:i:s") . "<br>";

$time = strtotime("25 december 2026");
echo "Unix : " . $time . "<br>";
echo "Converting to date :" . date("y-m-d", $time) . "<br>";

echo "UNIX current time: " . time() . "<br>";
echo "Normal current time: " . date("H:i:s", time()) . "<br>";

date_default_timezone_set("Asia/Dhaka"); //set the default timezone
echo date_default_timezone_get() . "<br>";

include "sum.php"; //load another php file so that we can use their functions
echo "Sum: " . sum(23, 12) . "<br>";


require "mul.php"; //if the required file is missing then the scrit can not be run
echo "Multiplicaton: " . mul(12, 12) . "<br>";

$data = ["name" => "Ahona", "age" => 21];
$json = json_encode($data); //convert arrey or object into jeson file
echo   $json . "<br>";

$data_1 = json_decode($json); //covert jeson to php
echo $data_1->name . "<br>";
echo $data_1->age . "<br>";

$car = array("BMW", "Toyota", "Jaguar"); //array
foreach ($car as $c) {
    echo $c . "   ";
}
echo "<br>";

$info = array(
    "name" => "ahona",
    "id" => "24-56229-1",
    "depertment" => "FST"
);
print_r(array_keys($info)); //returns all the keys of an array
echo "<br>";

$array1 = ["Apple", "Banana"];
$array2 = ["Mango", "Orange"];
$result = array_merge($array1, $array2); //marge two array
print_r($result);