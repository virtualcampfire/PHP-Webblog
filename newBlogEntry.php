<?php
include('admin.php');
    ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Neuer Beitrag</title>
            </head>
            <body>
                <br>
                <form action="uploadBlogEntry.php" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Titel" name="title">
                    <input type="file" name="image">
                    <br>
                    <textarea placeholder="Text" name="text"></textarea>
                    <button type="submit">Submit</button>
                </form>
            </body>
        </html> 
    <?php
