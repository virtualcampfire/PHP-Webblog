<link rel='manifest' href='manifest.json'>
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
    }
</script>

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
    include('navbar.php');
    include('welcome.php');
}
else if($request_uri === '/blog' || $request_uri === '/blog/'){
    include('navbar.php');
    include('blog.php');
}
else if($request_uri === '/contact' || $request_uri === '/contact/'){
    include('navbar.php');
    include('contact.php');

}
else {
    echo "404: Unbekannte Seite";
}