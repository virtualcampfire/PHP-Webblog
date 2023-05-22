<?php
include('admin.php');

$name = $_POST['name'];
$pw1 = $_POST['pw1'];
$pw2 = $_POST['pw2'];

$id = $_SESSION['userId'];

include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if($name !== null && $name !== ""){
    $sql = "UPDATE user SET name = '$name' WHERE id = '$id';";
    $db->exec($sql);
    echo "<br>Name wird geändert";
}
else{
    echo "<br>Name wird nicht geändert";
}

if($pw1 === $pw2){
    if($pw1 !== null && $pw1 !== ''){
        $userPassword = password_hash($pw1, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password = '$userPassword' WHERE id = '$id';";
        $db->exec($sql);
        echo "<br>Password wurde gespeichert";
    }
    else{
        echo "<br>Password wurde nicht gespeichert";
    }
}   
else{
    echo "<br>Passwörter stimmen nicht überein";
}