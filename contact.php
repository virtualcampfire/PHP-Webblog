<?php 
include('blogInfos.php');
echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Contact</title>
    </head>
    <body>
        <div style='position: relative; width: 100%; display: flex; justify-content: center;'>
            <div style='margin-top: 40px; width: 80%;' class='content-element-text'>
                $contact
            </div>
        </div>
    </body>
    </html>
";