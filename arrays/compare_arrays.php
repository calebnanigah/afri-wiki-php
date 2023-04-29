<?php
// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null];

$array1 = [1, 2, 3] ;
$array2 = [1, 2, '3'] ;
$array3 = [1, 2, 4] ;
$array4 = ['one', 'two', 'three'] ;

echo $array1 == $array2; // 1
echo '<br>';

echo $array1 === $array2; // nothing
echo '<br>';

echo $array1 != $array2; // // nothing
echo '<br>';

print_r($array1+$array4); // 1
echo '<br>';

// echo array_diff( $array1, $array2); // won't work as array is attempted to convert to string

$arrayDiff =  array_diff( $array1, $array3, $array4);

// echo $arrayDiff;

print_r($arrayDiff) // prints the odd array in the 1st array

?>