<?php
// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null];

// This would not work as the vars are not assigned appropriately.
// It should var = values NOT values = var
// $daysOfWeek = [$monday, $tuesday, null , $thursday];

// [$monday, $tuesday, null , $thursday] = $daysOfWeek;  // Why syntax error here?

[$monday, $tuesday, ,$thursday] = $daysOfWeek;

echo $thursday;

echo PHP_EOL."<br>"; // I don't know why the /n does not work

// iterating over the element
foreach($daysOfWeek as $val ){
    echo $val .PHP_EOL;
}

// Using Assoc Array

$daysOfWeek = [
    1=> "Monday",
    "two" => "Tuesday",
];

// foreach($daysOfWeek){

// };

exit
?>