<?php
include('config.php');
// Create a PDO instance
try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Table for Blog-Entries
    $sql = "CREATE TABLE IF NOT EXISTS blog (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        category VARCHAR(255) NOT NULL,
        img_path VARCHAR(255) NOT NULL,
        text TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $db->exec($sql);

    // Table for Users
    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $db->exec($sql);


    // Adding a basic Admin
    $userPassword = password_hash($userPassword, PASSWORD_DEFAULT);
    $sql = 
        "INSERT INTO user (name, password)
        SELECT '$userName', '$userPassword'
        WHERE NOT EXISTS (
        SELECT id FROM user WHERE name = '$userName'
        );";
    $db->exec($sql);
 
    echo "Connected and migration successfully";

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}