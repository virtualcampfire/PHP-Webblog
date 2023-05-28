<?php

if(isset($_SESSION['loggedIn'])){
    if($_SESSION['loggedIn'] == true){
        echo "Willkommen als Admin";
    }
    else{
        echo $_SESSION['loggedIn'];
    }
}

$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri === '/' || $request_uri === ''|| $request_uri === '/home' || $request_uri === '/home/') {
    header('Content-Type: text/html');
    include('navbar.php');
    include('welcome.php');
}
else if($request_uri === '/blog' || $request_uri === '/blog/'){
    header('Content-Type: text/html');
    include('navbar.php');
    include('blog.php');
}
else if($request_uri === '/contact' || $request_uri === '/contact/'){
    header('Content-Type: text/html');
    include('navbar.php');
    $html = file_get_contents('contact.html');
    echo $html;

}
else {
    echo "404: Unbekannte Seite";
}