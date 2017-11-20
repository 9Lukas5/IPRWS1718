<?php 
    session_start();

    include 'dbVar.php';


    if(filter_input(INPUT_GET, 'login') !== null)
    {
        /*
        $username      = filter_input(INPUT_POST, 'username');
        $passwort   = filter_input(INPUT_POST, 'passwort');

        $result     = $db->query("SELECT * FROM IPRWS1718.USERS WHERE USERNAME = '$username'");
        $user       = $result->fetch_assoc();

        //Überprüfung des Passworts
        if ($user !== null && $passwort === $user['PASSWORD'])
        {
            $_SESSION['userid'] = $user['ID'];
            header('Location: ../guestbook.php' , true, 301);
            die();
        }
        else
        {
            $errorMessage = "Nutzername oder Passwort war ungültig<br>";
        }
        */
    }
?>

<!DOCTYPE html>

<html lang="de">
    <head>
        <base href="../">
        <?php define ('ANTIBASE', './guestbook/');?>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>IPR WS 2017/18 | Gästebuch Login</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>

    <body>

        <div id='topNavBar'></div>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h3>Login</h3>
                        <br>

                        <?php
                            if(isset($errorMessage))
                            {
                                echo $errorMessage;
                            }
                        ?>

                        <form action="./guestbook/login.php?login=1" method="post">
                            Nutzername:<br>
                            <input type="text" size="20" maxlength="250" name="username"><br><br>

                            Dein Passwort:<br>
                            <input type="password" size="20"  maxlength="250" name="passwort"><br>

                            <br>
                            <a href="./guestbook/registrierung.php" style="font-size: 10px;">noch keinen Account? Jetzt Registrieren</a><br>
                            <input type="submit" value="Abschicken">
                        </form> 
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
