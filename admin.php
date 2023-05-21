<?php
include('loginWatcher.php');
        ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                    <title>Admin</title>
                </head>
                <body>
                    <input type="button" value="Neuer Beitrag" onclick="redirectToNewBlogEntry()">
                    <input type="button" value="Beitrag Bearbeiten" onclick="redirectToEditBlogEntry()">
                    <input type="button" value="Account verwalten" onclick="redirectToAccount()">
                    <script>
                        function redirectToNewBlogEntry() {
                            window.location.href = "newBlogEntry.php";
                        }
                        function redirectToEditBlogEntry() {
                            window.location.href = "editBlogEntries.php";
                        }
                        function redirectToAccount() {
                            window.location.href = "account.php";
                        }
                    </script>
                </body>
            </html>