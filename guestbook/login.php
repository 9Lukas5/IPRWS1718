<?php 
    session_start();

    //$db = new mysqli('localhost', 'lukas', 'password', 'IPRWS1718');
    include 'dbVar.php';

    /*
    if(isset(filter_input(INPUT_GET, 'login')))
    {
        $email      = filter_input(INPUT_POST, 'email');
        $passwort   = filter_input(INPUT_POST, 'passwort');

        $result     = $db->query("SELECT * FROM IPRWS1718.USERS WHERE email = '$email'");
        $user       = $result->fetch_assoc();

        //Überprüfung des Passworts
        if (!is_null($user) && $passwort === $user['PASSWORD'])
        {
            $_SESSION['userid'] = $user['ID'];
            header('Location: ../guestbook.php' , true, 301);
            die();
        }
        else
        {
            $errorMessage = "E-Mail oder Passwort war ungültig<br>";
        }
    }
    */
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
                            E-Mail:<br>
                            <input type="email" size="20" maxlength="250" name="email"><br><br>

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
