<?php
session_start();
if(isset($_SESSION['loggedIn'])){
    if($_SESSION['loggedIn'] == true){
       return true;
    }
    else{
        header('Location: login.html');
        exit;
    }
}
else{
    header('Location: login.html');
    exit;
}