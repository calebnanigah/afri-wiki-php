<?php

declare(strict_types=1);

$var1 = 1;

// echo $var1;

/**
 * sum
 *
 * @param  mixed $num1
 * @param  mixed $num2
 * @return int
 */
function sum($num1, $num2):int {
    return $sum = $num1+$num2;
}

/**
 * sum1
 *
 * @param  mixed $num1
 * @param  mixed $num2
 * @return void
 */
function sum1($num1, $num2){
    return $sum = $num1+$num2;
}


/**
 * sum2
 *
 * @param  int $num1
 * @param  int $num2
 * @return int
 */
function sum2( int $num1,  int $num2):int{
    return $sum = $num1+$num2;
}

echo sum2(12, 34);