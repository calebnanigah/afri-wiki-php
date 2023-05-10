
<?php

echo 'PHP Cookies<hr>';

setcookie('user_name', 'Caleb', time()+60*60); // will expire in an hour


// echo $_COOKIE['user_name'];

// unset($_COOKIE['user_name']); // deletes cookies

echo $_COOKIE['user_name'];

if(isset($_COOKIE['user_name'])){
    echo 'we have the cookie set';
}else{
    echo 'we don\'t have the cookie set';
}