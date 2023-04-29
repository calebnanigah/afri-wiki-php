<?php
    
    // IF STATEMENT
    // if( 1!=1 ){
    //     echo "Yeah, this is true";
    // }else{
    //     echo "Noop, this is false";
    // }

    // (1===1)? print("Yeah, this is true") : print("Noop, this is false");

    // $dayOfWeek = 'Wed';

    if($dayOfWeek == 'Sat'){
        echo 'Today is Saturday.';
    }
    elseif($dayOfWeek == 'Sun'){
        echo 'Tomorrow is Sunday.';
    }
    elseif($dayOfWeek == 'Mon'){
        echo 'Next day after tomorrow is Monday.';
    }else{
        echo 'You entered an invalid day.';
    }


    # Statements
    $MNO = '+233';
    switch ($dayOfWeek) {
        case 'MTN':
            // logic here to handle it
          break;
        case 'Tigo':
            echo 'Tomorrow is Sunday.';
          break;
        case 'Voda':
            echo 'Next day after tomorrow is Monday.';
            break;
        case 'Tue':
        case 'Wed':
            echo 'We are free today';
            break;
        default:
            echo 'You entered an invalid day.';
    }

