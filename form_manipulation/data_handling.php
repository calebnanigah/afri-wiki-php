<?php
// echo $_SERVER["REQUEST_METHOD"];
// die(); 
// exit;

// $_GET = ['name'=> $name, 'comment'=> $comment];
// echo $_GET['name'] // print $name




    // 01a. Validate the form
    if( $_SERVER["REQUEST_METHOD"] === 'GET'){
        
        $name = $_GET['name'];
        $email = $_GET['email'];
        $comment = $_GET['comment'];
        $password = $_GET['password'];

        if(!empty($name)){
            echo 'Name: '.$name.'<br>';
        }else{
            echo 'Name is required';
        }

        if(!empty($email)){
            echo 'Email: '.$email.'<br>';
        }else{
            echo 'Email is required';
        }

        $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        if(preg_match($pattern, $email)){
            echo 'Email: '.$email.'<br>';
        }else{
            echo 'A valid email is required';
        }


    }else{
        echo 'Bad form input';
    }

    // 01b: if validation fails, we reject the form
    // 01c: if validation is passed, we process the form: e,g, insert into a db, send to another server etc









    // echo 'Received form';




    // echo '<hr>';
    // echo 'POST '.$_POST['password'];

    // echo '<hr>';
    // echo 'GET '.$_GET['password'];

    // echo '<hr>';
    // echo 'GET '.$_GET['f'];

    // echo '<hr>';
    // echo 'REQUEST '.$_REQUEST['password'];