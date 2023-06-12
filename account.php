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
                <div class="blog-container">
                    <div class="center-container">
                        <form action="saveSettings.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="input-label">Nutzername</label>
                                <input type="text" name="name" class="input" id="exampleFormControlInput1">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="input-label">Password</label>
                                <input type="password" name="pw1" class="input" id="exampleFormControlInput2">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput3" class="input-label">Password bestätigen</label>
                                <input type="password" name="pw2" class="input" id="exampleFormControlInput3">
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="button">Einstellung Speichern</button>
                        </form> 
                        <form action="logout.php" method="POST">
                            <button type="submit" class="button">Logout</button>
                        </form>
                    </div>
                </div>
            </body>
        </html> 
    <?php


