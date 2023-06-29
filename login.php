<?php
session_start();
if(isset($_SESSION['loggedIn'])){
    if($_SESSION['loggedIn'] == true){
        header('Location: admin.php');
        exit;
    }
}
else{
    include('conf/config.php');
    $getName = $_POST['name'];
    $getPassword = $_POST['password'];
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $sql = "SELECT * FROM user WHERE name = :name";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':name', $getName);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];
            $password = $row['password'];
            $created_at = $row['created_at'];

            if (password_verify($getPassword, $password)) {
                session_set_cookie_params([
                    'secure' => true,
                    'httponly' => true,
                ]);
                ini_set('session.gc_maxlifetime', 1800);
                session_set_cookie_params([
                    'lifetime' => 1800,
                ]);
                session_regenerate_id(true);
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['userId'] = $id;
                header('Location: admin.php');
                exit;
            } else {
                echo "Falsche Nutzerdaten";
            }
        }
    } 
    else {
        echo "Falsche Nutzerdaten";
    }
}
?>