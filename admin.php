<?php
include('loginWatcher.php');
include('conf/blogInfos.php');
echo "
    <link rel='stylesheet' href='css/app.css'>
    <div id='fullscreen-overlay'></div>
    <div class='navbar'>
        <div class='nav-left'>
            <div class='nav-name-container'>
                <a class='nav-name' href='/home'>$name</a>
                <a class='nav-name-hidden' href='/home'>$shortName</a>
            </div>
        </div>
        <div class='nav-right'>
            <a class='nav-right-elements' href='newBlogEntry.php'>Neuer Beitrag</a>
            <a class='nav-right-elements' href='editBlogEntries.php'>Beitrag Bearbeiten</a>
            <a class='nav-right-elements' href='account.php'>Account verwalten</a>
        </div>
        <div class='nav-right-elements-close'>
            <div class='dropdown' onclick='showMenu()'>
                <img class='nav-img' src='imgs/menu.png'>
                <div id='dropdown-content'>
                    <a class='dropdown-element' href='newBlogEntry.php'>Neuer Beitrag</a><br>
                    <a class='dropdown-element' href='editBlogEntries.php'>Beitrag Bearbeiten</a><br>
                    <a class='dropdown-element' href='account.php'>Account verwalten</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        let i = 0;
        function showMenu(){
            if(i == 0){
                document.getElementById('dropdown-content').style.display = 'block';
                document.getElementById('fullscreen-overlay').style.display = 'block';
                i = 1;
            }
            else{
                document.getElementById('dropdown-content').style.display = 'none';
                document.getElementById('fullscreen-overlay').style.display = 'none';
                i = 0;
            }
        }
        const body = document.getElementById('fullscreen-overlay');
        body.addEventListener('click', function(event) {
            document.getElementById('dropdown-content').style.display = 'none';
        });
    </script>
";

?>
    <!DOCTYPE html>
    <html lang="de">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Admin</title>
        </head>
        <body>
            <br>
            <br>
            <br>
            <br>
        </body>
    </html> 
<?php


