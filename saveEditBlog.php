<?php
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$image = $_FILES['image'];

if (!empty($title) && !empty($text) && $image['error'] === 0) {
    $uploadDir = 'blogImgs/';
    $uploadedFilePath = $uploadDir . basename($image['name']);

    if (move_uploaded_file($image['tmp_name'], $uploadedFilePath)) {
        include('config.php');
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $sql = "UPDATE blog SET title = '$title', text = '$text', img_path = '$uploadedFilePath' WHERE id = '$id'";
        $db->exec($sql);
        header('Location: admin.php');
        exit;
    } else {
        echo "File upload failed!";
    }
} else {
    echo "Please fill in all the required fields and ensure the image upload was successful.";
}