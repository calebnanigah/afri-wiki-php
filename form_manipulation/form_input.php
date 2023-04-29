<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="This a demo php form handling">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <script></script> -->
</head>
<body>

    <h2>PHP Form Handling</h2>
    <hr>
    
    <form action="data_handling.php" method="GET">

        <br>
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="enter your name">
        <!-- <p style="color:red";>Name is required</p> -->

        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="enter your email">

        <br><br>
        <label for="comment">Comment</label>
        <textarea name="comment" cols="30" rows="3 "></textarea>

        <br><br>
        <label for="password">Password</label>
        <input type="password"  name="password" placeholder="enter your password">

        <br><br>
        <input type="submit" value="Send info">
        
    </form>

    <hr>
    
</body>
</html>