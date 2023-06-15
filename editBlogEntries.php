<?php
include('admin.php');
include('config.php');
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT * FROM blog";
$result = $db->query($sql);
$blogEntries = $result->fetchAll(PDO::FETCH_ASSOC);

// PC-View

?>
    <div class="blog-container">
            <div class="center-container text-infos-none">
                <table class="table" style="color: white">
                    <tr>
                        <td><strong>Titel</strong></td>
                        <td><strong>Text</strong></td>
                        <td><strong>Bild</strong></td>
                        <td><strong>Bearbeiten</strong></td>
                    </tr>
<?php

foreach ($blogEntries as $entry) {
    $id = $entry['id'];
    $title = $entry['title'];
    $text = $entry['text'];
    $imagePath = $entry['img_path'];

    ?>
        <tr>
            <td><?php echo $title; ?></td>
            <td><?php echo $text; ?></td>
            <td><?php echo "<img src='$imagePath' alt='Blog Entry Image'>"; ?></td>
            <td><a onclick="bearbeiten(<?php echo $id;?>)">Bearbeiten</a></td>
        </tr>
    <?php
}
?>
    </table>
    </div>
    </div>

    <?php

// Mobile-View

?>
    <div class="blog-container">
            <div class="center-container text-infos-block">
                <table class="table" style="color: white">
                    <tr>
                        <td><strong>Titel</strong></td>
                        <td><strong>Bearbeiten</strong></td>
                    </tr>
<?php

foreach ($blogEntries as $entry) {
    $id = $entry['id'];
    $title = $entry['title'];

    ?>
        <tr>
            <td><?php echo $title; ?></td>
            <td><a onclick="bearbeiten(<?php echo $id;?>)">Bearbeiten</a></td>
        </tr>
    <?php
}
?>
    </table>
    </div>
    </div>



    <script>
        function bearbeiten(id){
            var url = "editBlogEntry.php?id=" + encodeURIComponent(id);
            window.location.href = url;
        }
    </script>
    <style>
        img{
            height: 60px;
        }
    </style>

