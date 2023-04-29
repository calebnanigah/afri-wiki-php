<?php 

// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null, "Friday"];

// using for-loop
for($i = 0; $i < count($daysOfWeek); $i++){
    echo $daysOfWeek[$i].PHP_EOL;
}

echo PHP_EOL;

// using for each loop
foreach($daysOfWeek as $value){
    echo $value.PHP_EOL;
}

echo PHP_EOL;

// using for each loop
foreach($daysOfWeek as $key=>$val){
    echo $key ." ". $val.PHP_EOL;
}