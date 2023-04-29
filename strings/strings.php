<?php
	
// + → Addition
// -  → Subtraction
// * → Multiplication
// / → Division
// % → Modulo (the remainder of value divided by another)
// ** → Exponentiation

$numberOne = 4;
$numberTwo = 10;
$result = $numberOne ** $numberTwo; // 4**10 = 4
// echo 'The result is '.$result;

// BEDMAS
// Bracket ()
// Exponential
// Division
// Mult
// Add
// Sub

// =======
// Operator Precedence
$result = 3-1*3+(4/4)*1; // 1
// echo 'The result is '.$result;

// ===========
// Assignment Operators
// += → a += b is the same as a = a + b
// -=  → a -= b is the same as a = a – b
// *= →a *= b is the same as a = a * b
// /= → a /= b is the same as a = a / b
// %= → a %= b is the same as a = a % b
$numberOne = 4;
$numberTwo = 10;
$result = 3;
// $result =  $result-$numberOne; // 3-4
$result -=  $numberOne; // 3+4
// echo $result;


// Comparison Operators
// == → Equal
// === → Identical
// != → Not equal
// <> → Not equal
// !== → Not identical
// < → Less than
// > → Greater than
// <= → Less than or equal to
// >= → Greater than or equal to
// <=> → Less than, equal to, or greater than

$name1 = 'CalebNa@gmail.com';
$name2 = 'Calebna@gmail.com';

echo 'new';

// echo $name1 == $name2; // TRUE
// echo $name1 === $name2; // FALSE

// if($name1 == $name2){
//     echo True;
// }else{
//     echo False;
// }

$x = 2;
$y = 3.0;

$x != $y; // true

$x === $y; //false  integer === float 

?> 