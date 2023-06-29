<?php
include('conf/blogInfos.php');
echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>$name</title>
    </head>
    <body>
        <div class='container'>
            <div class='content'>
                <div class='content-container'>
                    <div class='content-container-element'>
                        <div class='content-container-element-img'>
                            <img class='img' src='$imgPath'>
                        </div>
                        <br>
                        <div class='content-container-element-text'>
                            <div class='content-element-text'>
                                <a class='willkommen'>$title</a>
                                <br>
                                <br>
                                $mainText
                                <br>
                                <br>
                                $conection
                                <br>
                                <br>
                                <a href='mailto:$mail'>$mailToText</a>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='blog-container'>
                    <div class='impressum'><a href='/impressum.php'>Impressum & Datenschutz­erklärung</a></div>
                </div>
            </div>
        </div>
    </body>
    </html>
";