<?php 

// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = [
    1=>'Monday', 
    "two"=>'Tuesday', 
    "three"=>'Wednesday', 
    'Thursday', 
    null, 
    "Saturday"
];

echo "array count/length\n";
echo count($daysOfWeek).PHP_EOL;

// using for-loop
// Would not work since $i using numbers. NB this array type uses names NOT numbers
Echo "using For loop === \n";
for($i = 0; $i < count($daysOfWeek); $i++){
    echo $daysOfWeek[$i].PHP_EOL;
}

echo PHP_EOL;

// using for each loop
Echo "using for each loop ===\n";
foreach($daysOfWeek as $value){
    echo $value.PHP_EOL;
}

echo PHP_EOL;

// using for each loop
Echo "using for each loop ===\n";
foreach($daysOfWeek as $key=>$val){
    echo $key ." ". $val.PHP_EOL;
}