<?php
include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM blog";
$result = $db->query($sql);
$blogEntries = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <?php
        foreach ($blogEntries as $entry) {
            $id = $entry['id'];
            $title = $entry['title'];
            $text = $entry['text'];
            $imagePath = $entry['img_path'];

            echo "<div class='blog-container'>";
                echo "<div class='blog-entry'>";
                    echo "<div class='blog-title'>$title</div>";
                    echo "<div class='blog-img'><img class='blog-img-element' src='$imagePath'></div>";
                    echo "<div class='blog-text-container'><div class='blog-text'>$text</div></div>";
                echo "</div>";
            echo "</div>";
        }
    ?>
    <br>
    <br>
    <br>
</body>
</html>