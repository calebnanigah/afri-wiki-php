<?php

$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null, 'Friday'];

echo var_dump($daysOfWeek);

echo PHP_EOL;

sort($daysOfWeek); // sorts in arr

// echo sorted arr
foreach($daysOfWeek as $val){
    echo $val .PHP_EOL;
}
echo PHP_EOL;

ksort($daysOfWeek); // sorts in arr
foreach($daysOfWeek as $val){
    echo $val .PHP_EOL;
}

echo PHP_EOL;

rsort($daysOfWeek); // sorts in arr
foreach($daysOfWeek as $val){
    echo $val .PHP_EOL;
}


?>