<?php
// The function will refresh the page 
// in every 3 second
header("refresh: 3");
  
$daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null];

// echo var_dump($daysOfWeek);

function getArray(){

    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', null];

    return $daysOfWeek;
}

echo getArray()[0];

exit
?>