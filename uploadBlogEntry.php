<?php
include('admin.php');
$title = $_POST['title'];
$text = $_POST['text'];
$image = $_FILES['image'];
$category = $_POST['category'];

if (!empty($title) && !empty($text) && $image['error'] === 0) {
    $uploadDir = 'blogImgs/';
    $imageExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
    $uniqueFileName = uniqid() . '.' . $imageExtension;
    $uploadedFilePath = $uploadDir . $uniqueFileName;
    
    if (move_uploaded_file($image['tmp_name'], $uploadedFilePath)) {
        include('conf/config.php');
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql = "INSERT INTO blog (title, text, img_path, category) VALUES ('$title', '$text', '$uploadedFilePath', '$category')";
        $db->exec($sql);
        header('Location: admin.php');
        exit;
    } else {
        echo "File upload failed!";
    }
} else {
    echo "Please fill in all the required fields and ensure the image upload was successful.";
}