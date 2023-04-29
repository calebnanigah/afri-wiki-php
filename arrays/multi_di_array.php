<?php 

// The function will refresh the page 
// in every 3 second
header("refresh: 3");
//  day | number | attendance
$dataHeading = ["Day", "Day Number", "Attendance",];
$data = [
    ["Monday", 1, 233],
    ["Tuesday", 2, 23],
    ["Wednesday", 3, 10],
];

echo "array count/length\n";
echo count($data).PHP_EOL.PHP_EOL;

// using for-loop
Echo "using For loop \n";
Echo "========================= \n";
for($i = 0; $i < count($data); $i++){

    echo "Data -> ".$i.PHP_EOL;
   
    $dataVal = $data[$i];

    for($j = 0; $j < count($dataVal); $j++){
        echo $dataVal[$j].PHP_EOL;
    }

    echo PHP_EOL;
    
}

echo PHP_EOL;

// using for each loop
Echo "using for each loop\n";
Echo "========================= \n";
foreach($data as $key => $val){
    
    echo "Data -> ".$key.PHP_EOL;

    foreach($val as $value){
        echo $value.PHP_EOL;
    }

    echo PHP_EOL;

}