<?php
$id = $_POST['id'];

include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM blog WHERE id = '$id'";
$result = $db->query($sql);
$blogEntry = $result->fetch(PDO::FETCH_ASSOC);

if ($blogEntry) {
    $imagePath = $blogEntry['img_path'];

    if (!empty($imagePath) && file_exists($imagePath)) {
        unlink($imagePath);
    }

    $deleteSql = "DELETE FROM blog WHERE id = '$id'";
    $db->exec($deleteSql);

    header('Location: admin.php');
    exit;
} else {
    echo "Blog entry not found.";
}