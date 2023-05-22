<?php
$id = $_POST['id'];
$title = $_POST['title'];
$text = $_POST['text'];
$image = $_FILES['image'];
include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if(!empty($title)){
    $sql = "UPDATE blog SET title = '$title' WHERE id = '$id'";
    $db->exec($sql);
}
if(!empty($text)){
    $sql = "UPDATE blog SET text = '$text' WHERE id = '$id'";
    $db->exec($sql);
}
if(pathinfo($image['name'], PATHINFO_EXTENSION) !== '' && pathinfo($image['name'], PATHINFO_EXTENSION) !== null){
        $uploadDir = 'blogImgs/';
        $uploadedFilePath = $uploadDir . basename($image['name']);
        if(move_uploaded_file($image['tmp_name'], $uploadedFilePath)) {
            $sql = "UPDATE blog SET img_path = '$uploadedFilePath' WHERE id = '$id'";
            $db->exec($sql);
        }
        else {
            echo "File upload failed!";
        }
}
header('Location: admin.php');
        exit;