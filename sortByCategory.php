<?php
include('config.php');
include('navbar.php');
$category = $_GET['category'];
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if($category == "Alle"){
    $sql = "SELECT * FROM blog";
}
else{
    $sql = "SELECT * FROM blog WHERE category = '$category'";
}
$result = $db->query($sql);
$blogEntries = $result->fetchAll(PDO::FETCH_ASSOC);
$sql = "SELECT * FROM blog";
$result = $db->query($sql);
$blogEntriesCategory = $result->fetchAll(PDO::FETCH_ASSOC);
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
    <div class='blog-container'>
        <div class="categories">
            <?php
                $uniqueCategories = array_unique(array_column($blogEntriesCategory, 'category'));
                echo '<div class="category" onclick=sortCategory(' . '"' . 'Alle' . '"' . ')>' . 'Alle' . '</div>';
                foreach ($uniqueCategories as $category) {
                    echo '<div class="category" onclick=sortCategory(' . '"' .$category . '"' . ')>' . $category . '</div>';
                }
            ?>
        </div>
    </div>

    <?php
        foreach ($blogEntries as $entry) {
            $id = $entry['id'];
            $title = $entry['title'];
            $text = $entry['text'];
            $imagePath = $entry['img_path'];

            echo "<div class='blog-container'>
                    <div class='blog-entry'>
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
                    </div>
                </div>";
        }
    ?>
    <br>
    <br>
    <br>
    <script>
        function sortCategory(category){
            var url = "sortByCategory.php?category=" + encodeURIComponent(category);
            window.location.href = url;
        }
    </script>
</body>
</html>