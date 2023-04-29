<?php

    // in_array
    // array_push
    // count
    // array_unique

    $arr = array('Red', 'Yellow', 'Blue', 'Red','Red',);

    print_r(in_array('Pink', $arr));

    if(in_array('Red', $arr)){
        echo 'Yes, I exist';
    }
    else{
        echo 'No, I don\'t';
    }

    array_push($arr, 'Pink');

    echo '<hr>';
    print_r($arr);

    echo '<hr>';
    // $arr = array_unique($arr);
    print_r(array_unique($arr));

    echo '<hr>';
    print_r(count($arr));

    

