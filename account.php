<?php
include('admin.php');
    ?>
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Account</title>
            </head>
            <body>
                <br>
                <div class="container">
                <br>
                <form action="saveSettings.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nutzername</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" name="pw1" class="form-control" id="exampleFormControlInput2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput3" class="form-label">Password bestätigen</label>
                        <input type="password" name="pw2" class="form-control" id="exampleFormControlInput3">
                    </div>
                    <button type="submit" class="btn btn-success">Einstellung Speichern</button>
                </form>
            </div>
            </body>
        </html> 
    <?php
