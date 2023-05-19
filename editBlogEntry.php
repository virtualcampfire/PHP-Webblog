<?php
include('admin.php');
$id = $_GET['id'];
include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM blog WHERE id = '$id'";
$result = $db->query($sql);
$blogEntry = $result->fetch(PDO::FETCH_ASSOC);
$id = $blogEntry['id'];
$title = $blogEntry['title'];
$text = $blogEntry['text'];
$imagePath = $blogEntry['img_path'];

echo "<form action='saveEditBlog.php' method='POST' enctype='multipart/form-data'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='text' name='title' value='$title'>";
echo "<textarea name='text'>$text</textarea>";
echo "<img src='$imagePath' alt='Blog Image'>";
echo "<input type='file' name='image'>";
echo "<button type='submit'>Save Changes</button>";
echo "</form>";

echo "<form action='deleteBlogEntry.php' method='POST'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<button type='submit'>Delete Blog-Entry</button>";
echo "</form>";