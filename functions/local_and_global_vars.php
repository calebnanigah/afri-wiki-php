<?php

//PHP local and global var
$var1 = 5;

function x(){
    // define vars
    // global $var1;
    $var1 = 4;
    return $var1;

    global $varX;
    $varX="Monday";
}

echo x(); // prints 4

echo "<br>"; 

echo $var1; // this wont because it is local to the function x(); // prints 5

echo "\n";

echo $varX;
