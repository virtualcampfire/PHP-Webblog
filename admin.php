<?php
include('loginWatcher.php');
        ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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