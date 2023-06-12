<?php
include('admin.php');
?>
    <!DOCTYPE html>
    <html lang="de">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Neuer Beitrag</title>
        </head>
        <body>
            <div class="blog-container">
                <div style="position: relative; width: 60%">
                    <br>
                    <form action="uploadBlogEntry.php" method="POST" enctype="multipart/form-data">
                        <br>    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="input-label">Titel</label>
                            <input type="text" name="title" class="input" id="exampleFormControlInput1">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="input-label">Kategorie</label>
                            <input type="text" name="category" class="input" id="exampleFormControlInput2">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="input-label">Bild</label>
                            <input class="input" type="file" id="formFile" name="image">
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="input-label">Text</label>
                            <textarea class="input-text" id="exampleFormControlTextarea1"  name="text" rows="10"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="button">Beitrag speichern</button>
                    </form>
                </div>
            </div>
        </body>
    </html> 
<?php
