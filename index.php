<?php
    session_start();

    $userid = $_SESSION['userid'];
?>

<!DOCTYPE html>

<html lang="de">
    <head>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>IPR WS 2017/18 | Home</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>

    <body>
        <div id='userID' style='display: none;'><?php echo $userid ?></div>
        <div id='topNavBar'></div>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1>Internet-Prog WS17/18 HTML Website</h1>
                        <br>
                        <p>
                            In der Sidebar und der Fusszeile hab ich (dass es dich
                            auch wirklich anspringt :D ) blink Effekte und Textgrößen
                            veränderungen eingebaut, wenn du über den Links bist.<br>
                            Die Sidebar und Fußzeile sind auf deinen Tipp hin ebenfalls
                            durch jeweils einen iFrame eingebunden.<br>
                            <br>
                            Tabelle und eine kleine Bildergalerie findest du unter dem Punkt 'Über mich'<br>
                            <br>
                            Das Video findet sich unter der noch nicht fertig Sammlung,
                            wo alles erstmal untergebracht ist. Nur halt nicht in schön.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <iframe src="./fusszeile.html" class="fusszeileContainer"></iframe>
        </footer>

        <script src="./jquery/jquery-3.1.1.min.js"></script>
        <script src="./cdnjs/tether.min.js"></script>
        <script src="./bootstrap/js/bootstrap.min.js"></script>
        <script src="./loadNavBar.js"></script>
        <script>
            loadContent('#topNavBar');
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
        <script src="./loadFonts.js"></script>
        <script>
            WebFont.load(
               {
                   google:
                       {
                           families: [getFontsToLoad()]
                       }
               });
        </script>

    </body>
</html>
