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
            <div class="container">
                <br>
                <form action="uploadBlogEntry.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titel</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Kategorie</label>
                        <input type="text" name="category" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Bild</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  name="text" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Beitrag speichern</button>
                </form>
            </div>
        </body>
    </html> 
<?php
