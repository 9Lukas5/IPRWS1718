<?php
    session_start();
    $userid = $_SESSION['userid'];

    //$db = new mysqli('localhost', 'lukas', 'password', 'IPRWS1718');
    include 'dbVar.php';
?>

<!DOCTYPE html>

<html lang="de">
    <head>
        <base href="../">
        <?php define ('ANTIBASE', './guestbook/');?>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>IPR WS 2017/18 | Gästebuch Registrierung</title>
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
                        <h3>Registrierung</h3>
                        <br>

                        <?php
                            $showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

                            $email = "";
                            $username = "";
                            $passwort = "";
                            $errormsg = "";

                            if (filter_input(INPUT_GET, 'register') !== null)
                            {
                                $error      = false;
                                $email      = filter_input(INPUT_POST, 'email');
                                $username   = filter_input(INPUT_POST, 'username');
                                $passwort   = filter_input(INPUT_POST, 'passwort');
                                $passwort2  = filter_input(INPUT_POST, 'passwort2');

                                if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                                {
                                    $errormsg = $errormsg . "Bitte eine gültige E-Mail-Adresse eingeben<br>";
                                    $error = true;
                                }

                                if (strlen($username) == 0)
                                {
                                    $errormsg = $errormsg . "Bitte username angeben<br>";
                                }

                                if (strlen($passwort) == 0)
                                {
                                    $errormsg = $errormsg . 'Bitte ein Passwort angeben<br>';
                                    $error = true;
                                }

                                if ($passwort != $passwort2)
                                {
                                    $errormsg = $errormsg . 'Die Passwörter müssen übereinstimmen<br>';
                                    $error = true;
                                }

                                //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
                                if (!$error)
                                {

                                    $result = $db->query("SELECT * FROM IPRWS1718.USERS WHERE email = '$email'");
                                    if ($result->num_rows !== 0)
                                    {
                                        $errormsg = $errormsg . 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                                        $error = true;
                                    }

                                    $result = $db->query("SELECT * FROM IPRWS1718.USERS WHERE USERNAME = '$username'");
                                    if ($result->num_rows !== 0)
                                    {
                                        $errormsg = $errormsg . 'Dieser Nutzername ist bereits vergeben<br>';
                                        $error = true;
                                    }
                                }

                                //Keine Fehler, wir können den Nutzer registrieren
                                if (!$error) {
                                    $result = $db->query("INSERT INTO IPRWS1718.USERS (USERNAME, PASSWORD, EMAIL) VALUES ('$username', '$passwort', '$email')");

                                    if ($result)
                                    {
                                        echo 'Du wurdest erfolgreich registriert.<br>';
                                        echo '<a href="./guestbook/login.php" class="btn btn-primary">Zum Login</a>';
                                        $showFormular = false;
                                    }
                                    else
                                    {
                                        $errormsg = $errormsg . 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
                                    }
                                }
                            }

                            if($showFormular)
                            {
                        ?>

                            <form action="./guestbook/registrierung.php?register=1" method="post">
                            E-Mail:<br>
                            <input type="email" size="20" maxlength="250" name="email" value="<?php echo $email ?>"><br><br>

                            Nutzername:<br>
                            <input type="text" size="20" maxlength="250" name="username" value="<?php echo $username ?>"><br><br>

                            Dein Passwort:<br>
                            <input type="password" size="20"  maxlength="250" name="passwort" value="<?php echo $passwort ?>"><br>

                            Passwort wiederholen:<br>
                            <input type="password" size="20" maxlength="250" name="passwort2"><br><br>

                            <input type="submit" value="Abschicken">
                            </form>
                            <p style="color: red;"><?php echo $errormsg ?></p>
                        <?php
                            } //Ende von if($showFormular)
                        ?>
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
