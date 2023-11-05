<?php 

    $username = "user";
    $password = "1234";
    
    if ( $_POST['name'] == $username && $_POST['pwd'] == $password){
        echo "You logged in";
    } else {
        die("incorrect password");
    }
    
    if(isset($_POST['remember'])){
        setCookie("username", $_POST['name'], time()+86400);
        setCookie("password",  $_POST['pwd'], time()+86400);
    }
    

?>