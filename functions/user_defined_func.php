<?php
// in WHILE LOOP
// $sum = 0;
// $i = 1;

// while ($i <= 10) {
//   $sum += $i;
//   $i++;
// }

// syntax

// function name(){
//     // code of block
// }

function sumFirstXNumbers($x){
    // in WHILE LOOP
    $sum = 0;
    $i = 1;

    while ($i <= $x) {
        $sum += $i;
        $i++;
    }

    echo $sum;
}

// sumFirstXNumbers(3);


// local and global vars
//sum of 2 numbers: 3+2

// $num1 =1;
// $num2 = 3;

sum(3,3,4,4,5);

function sum($num1=0, $num2=0){
    // $num1 =1;
    // $num2 = 3;
    $sum = $num1 + $num2;
    return "The sum $num1 and $num2 is $sum.";

    // sum($num1, $num2);
}

echo sum();

echo "<br>";


// $name = "Caleb";
// echo 'Caleb $name'; // Caleb $name
// echo "<br>";
// echo "Caleb $name"; // Caleb Caleb

// f(1)=2
// f()=34;

function sum2(){
    // $num1 =1;
    // $num2 = 3;
    $sum = 5+10;
    return "The sum is $sum.";

    // sum($num1, $num2);
}

function isUserLoggedIn(){
    // logic 
    // return true;
}

if(isUserLoggedIn()){
    echo 'Welcome';
}
else{
    echo 'Please enter your password';
}

// anonymous functions
// $isUserLoggedIn = true/false;
$isUserLoggedOut = function(){return true;} ;

// echo $isUserLoggedOut();

echo "<br>";

if($isUserLoggedOut()){
    echo 'We hope to see you again!';
}
else{
    echo 'Please enter your password';
}


function sum3($n, $m){

    $sum = $n+$m;

    return $sum;

    $mul = $n*$m;

}