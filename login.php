<?php
  if (isset($_SESSION['loggedIn'])) {
        if($_SESSION['loggedIn'] == false){
            header('Content-Type: text/html');
            $html = file_get_contents('login.html');
            echo $html;
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
                    session_start();
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['userId'] = $id;
                }
                else{
                    echo "Falsche Nutzerdaten";
                }
            }
        } else {
            echo "Falsche Nutzerdaten";
        }
    }