<?php

    // array def
    // 01
    // colors
    array('Red', 'Yellow', 'Blue');
    // Elements => 'Red', 'Yellow', 'Blue'
    // Referencing 
    // 'Red', --> 0
    // 'Yellow', --> 1
    // 'Blue' --> 2
    // -1

    // 02
    // colors
    ['Red', 'Yellow', 'Blue'];


    $arr = ['Red', 'Yellow', 'Blue'];
    // echo $arr[2];

    // modifying
    $arr[1]='Pink';
    // echo $arr[1];

    // adding more elements
    $arr[4]='Black';
    // $arr[3]='Ivy';
    print_r($arr);

    echo '<hr>';

    echo $arr[3];

    // looping; best way is using the foreach loop
    // foreach( $array as $key => $value ){
    //     // code
    // }

    echo '<hr>';
    echo 'Looping through arrays';
    echo '<hr>';
    // $arr = ['Red', 'Yellow', 'Blue'];
    foreach( $arr as $key => $value ){
        echo $key.' '.$value.'<br>';
        // echo PHP_EOL
    }


    // TYPES of ARRAYS (3)

    // 01 Numeric arrays

    // 02 Associative arrays

    // $arr_assoc = [$key => $name, $key => $name, $key => $name, ...];
    // continent => example country
    $arr_assoc = ['Africa'=> 'Ghana', 'Asia'=> 'China', 'Europe'=> 'Spain'];

    // accessing assoc
    echo "<hr>";
    echo "Accessing associative arrays";
    echo "<hr>";
    echo $arr_assoc['Asia']; // prints China

    $arr_assoc['Asia'] = 'India';
    echo '<br>';
    echo $arr_assoc['Asia'];

    echo '<br>';
    echo $arr_assoc['South America']='Brazil';
    echo '<br>';
    print_r($arr_assoc);

    echo "<hr>";
    echo "looping through associative arrays";
    echo "<hr>";
    foreach( $arr_assoc as $key => $value ){
        echo $key.' '.$value.'<br>';
        // echo PHP_EOL
    }


    // 03 Multi dimensional arrays
    // syntax
    // $arr_mul = [[$key => $name, $key => $name], 
    //             [$key => $name, $key => $name],
    //         ];
    
    // $arr_mul = [
    //         array($key => $name, $key => $name), 
    //         array($key => $name, $key => $name),
    //     ];

    $cars = array (
        array("Volvo", 22, 18), // 0
        array("BMW", 15, 13), // 1
        array('Saab',5,2), // 2
        array("Land Rover",17, 15) // 3
    );

    // accessing    
    echo '<hr>';
    echo 'accessing mul dimensional arrays';
    echo '<hr>';
    $cars[1][1]=30;
    echo '<br>';
    echo '01 '.$cars[1][1].'<br>03 '.$cars[3][1];

    echo '<hr>';
    echo 'looping through mul dimensional arrays';
    echo '<hr>';
    foreach( $cars as $key => $car ){
        // echo 'Car brand: '.$car[0].'<br>';
        // print_r($value);
        foreach( $car as $key => $value ){
            // array("Volvo", 22, 18), // 0
            echo 'Car brand: '.$value.'<br>';
            // echo PHP_EOL
        }
        // echo PHP_EOL
    }

    // echo '<hr>';

    // echo "<table>
    // <tr>
    //   <th>Name</th>
    //   <th>Stock</th>
    //   <th>Sold</th>
    // </tr>";

    // foreach( $cars as $key => $car ){
    //     //     <td>Alfreds Futterkiste</td>
    //     // <td>Maria Anders</td>
    //     // <td>Germany</td>
        
    //     echo "<tr>";
    //     echo "<td> $car[0] </td>";
    //     echo "<td> $car[1] </td>";
    //     echo "<td> $car[2] </td>";
    //     echo "</tr>";

    // }

    // echo "</table>";

    // echo "<hr>";

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  </head>
  <body>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Stock</th>
      <th scope="col">Sold</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach( $cars as $key => $car ){
            //     <td>Alfreds Futterkiste</td>
            // <td>Maria Anders</td>
            // <td>Germany</td>
            
            echo "<tr>";
            echo "<td> $car[0] </td>";
            echo "<td> $car[1] </td>";
            echo "<td> $car[2] </td>";
            echo "</tr>";
    
        }
    ?>
  </tbody>
</table>
  </body>
</html>

<!-- <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr> -->

    <!-- <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td> -->

 
  <!-- </tr>
</table> -->