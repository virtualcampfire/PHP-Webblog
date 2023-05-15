<?php
session_start();
if(isset($_SESSION['loggedIn'])){
    if($_SESSION['loggedIn'] == true){
        header('Location: admin.php');
        exit;
    }
}
else{
    include('config.php');
    $getName = $_POST['name'];
    $getPassword = $_POST['password'];
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql="SELECT * FROM user WHERE name = '$getName';";

    $result = $db->query($sql);
    
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];
            $password = $row['password'];
            $created_at = $row['created_at'];
            
            if (password_verify($getPassword, $password)) {
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $id;
                header('Location: admin.php');
                exit;
            }
            else{
                echo "Falsche Nutzerdaten";
            }
        }
    } else {
        echo "Falsche Nutzerdaten";
    }
}