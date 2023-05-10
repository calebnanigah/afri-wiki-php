<?php

    session_start();

    // var_dump($_POST);

    // echo $_SERVER['REQUEST_METHOD'];

    $errorMessages = [];

    if($_SERVER['REQUEST_METHOD'] === "POST"){
       
        $firstName = sanitizeData($_POST['first-name']);
        $lastName = sanitizeData($_POST['last-name']);
        $email = sanitizeData($_POST['email']);
        $age = sanitizeData($_POST['age']);
        $comment = sanitizeData($_POST['comment']);

        // echo $first_name;

        // 01. Validate the data

        // first name
        if(!empty($firstName)){
            echo 'First name: '.$firstName.'<br>';
            $_SESSION['firstName']=$firstName;
            redirect();
        }else{
            $errorMessages['firstNameError']="First name is required.";
            $_SESSION['firstNameError']="First name is required.";
            unset($_SESSION['firstName']);
            redirect();
        }

        // Email name
        if(!empty($email)){

            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email: '.$email.'<br>';
            }
            else{
                $errorMessages['emailError']="Email is not valid.";
            }
            
        }else{
            $errorMessages['emailError']="Email is required.";
        }

    }else{
        header('Location:index.php');
        exit();
    }


    // helper functions
    function sanitizeData($data){
        $data = htmlentities($data); // converts characters to HTML entities.
        return $data;
    }

    function redirect($url='index.php'){
        header("Location:$url");
    }

    var_dump($errorMessages);