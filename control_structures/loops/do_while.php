<?php 

// do while loop

// Example: Calculate the sum of numbers between 1 and 10
// 1+2+3+4+5+6+7+8+9+10 = 55

// 1+2+3 = 6

// $num = 0;

// do{
//     $num01 = $num +1; // 1
//     $sum = $num + $num01; 
//     $num++; // 1
//     echo "$num <br>";
// }while($num < 4);

$sum = 0;
$i = 1;

do {
  $sum += $i; // 3+3=6
  $i++; // 4
} while ($i <= 3);

echo "The sum of numbers between 1 and 3 is: " . $sum;


// in WHILE LOOP
$sum = 0;
$i = 1;

while ($i <= 10) {
  $sum += $i;
  $i++;
}