<?php
// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null];

echo var_dump($daysOfWeek);

// $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday');

// echo var_dump($daysOfWeek);

echo "in array \n";

echo in_array("Monday",$daysOfWeek); // 1 -> TRUE

echo PHP_EOL;

echo "The explode() Function \n";
$str =explode(",", "MON,DAY") ;
print_r($str); // array
echo PHP_EOL;

echo "The implode() Function \n";
$str =implode(",", $daysOfWeek) ;
print_r($str); // array
echo PHP_EOL;

//add an array using index
echo "\nadd an array using index \n";
$daysOfWeek[5]="Saturday";

//add an array using array_push()
array_push($daysOfWeek, "Sunday");

// using for each loop
foreach($daysOfWeek as $value){
    echo $value.PHP_EOL;
}

echo PHP_EOL;

// searching for an array
echo array_search("Thursday", $daysOfWeek); // 3

echo PHP_EOL;
// removing an element
unset($daysOfWeek[1]);

// using for each loop after unset
foreach($daysOfWeek as $value){
    echo $value.PHP_EOL;
}
echo var_dump($daysOfWeek);

echo PHP_EOL;

echo "reindexes array after removal\n";
$indexArr = array_values($daysOfWeek); // you have to use to use the var
print_r($indexArr);

echo PHP_EOL;

echo "array removal using array_splice\n";
$spliceArr = array_splice($daysOfWeek, 0, 3); // you have to use to use the var
print_r($spliceArr); // pri
echo PHP_EOL;
print_r($daysOfWeek);
?>