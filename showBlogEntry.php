<?php
include('config.php');
include('navbar.php');

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

echo "<div class='blog-container'>
<div class='blog-entry' style='cursor: default'>
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
        <div class='blog-text'>
            $text
        </div>
    </div>
    <div style='text-align: end; positon: relative; margin-right: 40px; cursor: pointer;' onclick=goToBlog()>Zurück</div>
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
