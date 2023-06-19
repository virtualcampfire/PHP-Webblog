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
$category = $blogEntry['category'];
$imagePath = $blogEntry['img_path'];


$html = "
    <div class='blog-container'> 
        <div class='center-container'> 
        <div>
        <form action='saveEditBlog.php' method='POST' enctype='multipart/form-data'>
            <input type='hidden' name='id' value='$id'>
            <div class='mb-3'>
                <label for='exampleFormControlInput1' class='input-label'>Titel</label>
                <input type='text' name='title' class='input' id='exampleFormControlInput1' value='$title'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlInput2' class='input-label'>Kategorie</label>
                <input type='text' name='category' class='input' id='exampleFormControlInput2' value='$category'>
            </div>
            <br>
            <div style='display: flex; width: 100%; position: relative; justify-content: center;'>
                <img src='$imagePath' alt='Blog Image' style='width: 100%'>
            </div>
            <div class='mb-3'>
                <label for='formFile' class='input-label'>Bild</label>
                <input class='input' type='file' id='formFile' name='image'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='input-label'>Text</label>
                <textarea class='input-text' id='exampleFormControlTextarea1' name='text' rows='20'>$text</textarea>
            </div>
            <br>
            <button type='submit' class='button''>Beitrag speichern</button>
        </form>
        <br>
        <form action='deleteBlogEntry.php' method='POST'>
            <input type='hidden' name='id' value='$id'>
            <button type='submit' class='button''>Löschen</button>
        </form>
        </div>
    </div>
";

echo $html;
