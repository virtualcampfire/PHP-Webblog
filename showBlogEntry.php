<?php
include('navbar.php');
include('conf/config.php');

$id = $_GET['id'];
$id = $_GET['id'];

if (!is_numeric($id)) {
    header('Location: /home');
    exit;
}

$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM blog WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$blogEntry = $stmt->fetch(PDO::FETCH_ASSOC);

if($blogEntry == null){
    header('Location: /home');
    exit;
}

$id = $blogEntry['id'];
$title = $blogEntry['title'];
$text = $blogEntry['text'];
$imagePath = $blogEntry['img_path'];
$created = $blogEntry['created_at'];
$created = new DateTime($created);
$created = $created->format("d/m/Y");


?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogbeitrag</title>
    </head>
<?php

echo "<div class='blog-container'>
<div class='blog-entry' style='cursor: default; width: 100%; background-color: rgb(21 38 66); border-color: rgb(21 38 66);'>
    <div class='created'>
        $created
    </div>
    <div class='blog-title'>
        $title
    </div>
    <div class='blog-img'>
        <img class='blog-img-element' src='$imagePath'>
    </div>
    <div class='blog-text-container'>
        <div class='blog-text' style='width: 95%'>
            $text
        </div>
    </div>
    <div>
        <a style='positon: relative; margin-left: 40px; cursor: pointer; text-decoration: underline;' onclick=goToBlog()>Zurück</a></div>
    </div>
<script>
function goToBlog(){
    var url = '/blog'
    window.location.href = url
}
</script>
</div>
<br>
<br>
<br>
";

include('impressumElement.php');
?>
