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
    <div class='container'> 
    <div>
        <form action='saveEditBlog.php' method='POST' enctype='multipart/form-data'>
            <input type='hidden' name='id' value='$id'>
            <div class='mb-3'>
                <label for='exampleFormControlInput1' class='form-label'>Titel</label>
                <input type='text' name='title' class='form-control' id='exampleFormControlInput1' value='$title'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlInput2' class='form-label'>Kategorie</label>
                <input type='text' name='category' class='form-control' id='exampleFormControlInput2' value='$category'>
            </div>
            <div style='display: flex; width: 100%; position: relative; justify-content: center;'>
                <img src='$imagePath' alt='Blog Image' style='height: 400px'>
            </div>
            <div class='mb-3'>
                <label for='formFile' class='form-label'>Bild</label>
                <input class='form-control' type='file' id='formFile' name='image'>
            </div>
            <div class='mb-3'>
                <label for='exampleFormControlTextarea1' class='form-label'>Text</label>
                <textarea class='form-control' id='exampleFormControlTextarea1' name='text' rows='5'>$text</textarea>
            </div>
            <button type='submit' class='btn btn-success' style='width: 200px;'>Beitrag speichern</button>
        </form>
        <br>
        <form action='deleteBlogEntry.php' method='POST'>
            <input type='hidden' name='id' value='$id'>
            <button type='submit' class='btn btn-danger' style='width: 200px;'>Löschen</button>
        </form>
        </div>
    </div>
";

echo $html;
