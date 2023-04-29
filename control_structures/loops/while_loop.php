<?php

// while loops

// syntax
// while(true){
//     // execute code
// }

// 01. print integer numbers from 1 to 100
$num = 0;

// $num<=100
// $num<101
while($num <= 3){
   ++$num; // pre-increment \\ 4
   //$num++; //post-increment
   // observed that the post/pre increment behave the same way here!
   echo "$num <br>" ;
}

// l1 ==  true || 1
// l2 ==  true || 2
// l3 ==  true || 3
// l4 ==  true || 4
// l5 ==  false || --