<?php
    session_start();

    if( isset($_SESSION['name']) && $_SESSION['name']== 'Caleb'){
        echo 'You are allowed';
    }else{
        echo 'You are not allowed here';
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Page 01</h1>
    
    <?php
        echo $_SESSION['name'];
    ?>

</body>
</html>