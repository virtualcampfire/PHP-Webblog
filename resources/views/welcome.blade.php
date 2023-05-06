<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>@include('navbar')</div>

    <div class="container">
        <div class="content">
            <div class="content-container">
                <div class="content-container-element">
                    <div class="content-container-element-img">
                        <img class="img" src="imgs/logoKlein.png">
                    </div>
                    <br>
                    <div class="content-container-element-text">
                        <div class="content-element-text">
                            <a class="willkommen">Willkommen im CodingSpace.</a>
                            <br>
                            <br>
                            Hallo, ich bin Elias,
                            <br>
                            jemand, der sich für die Bereiche <a class="hervorheben">Technik</a>, <a class="hervorheben">Wirtschaft</a> 
                            und <a class="hervorheben">Psychologie</a> interessiert. Mit Leidenschaft tauche 
                            ich in die Welt neuer Ergebnisse ein und versuche ständig, meine Fähigkeiten zu erweitern und mich selbst 
                            zu verbessern. Ich bin überzeugt davon, dass Technologie eine entscheidende Rolle in unserer <a class="hervorheben">Zukunft</a> 
                            spielen wird und diese möchte gerne mitzugestalten. Ich bin immer auf der Suche nach neuen <a class="hervorheben">Herausforderungen</a> und 
                            <a class="hervorheben">Möglichkeiten</a>, meinen Horizont zu erweitern und mein Wissen zu vertiefen.
                            <br>
                            <br>
                            Sie haben Fragen, Ideen und möchten sich mit mir in Verbindung setzten?
                            <br>
                            <br>
                            <a href="mailto:kontakt@thecodingspace.de">kontakt@thecodingspace.de</a>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let i = 0 
        function showMenu(){
            if(i == 0){
                document.getElementById('dropdown-content').style.display = "block"
                i = 1
            }
            else{
                document.getElementById('dropdown-content').style.display = "none"
                i = 0
            }
        }
    </script>
</body>
</html>