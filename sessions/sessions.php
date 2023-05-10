<?php
    session_start();

    $_SESSION['id'] = 'John';

    echo $_SESSION['name'];

    // unset($_SESSION['name']);


    // session_destroy();

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
    <div>
        <a href="page_1.php">page 1</a>  // Caleb
        <a href="page_2.php">page 2</a>  // Emma
        <a href="page_3.php">page 3</a>  // John
    </div>
</body>
</html>