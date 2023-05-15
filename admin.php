<?php

session_start();
if(isset($_SESSION['loggedIn'])){
    if($_SESSION['loggedIn'] == true){
        echo "Willkommen Admin";
    }
    else{
        echo "Bitte Anmelden";
    }
}
else{
    echo "Bitte Anmelden";
}