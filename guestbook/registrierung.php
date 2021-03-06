<?php
    session_start();
    $userid = $_SESSION['userid'];

    //$db = new mysqli('localhost', 'lukas', 'password', 'IPRWS1718');
    include 'dbVar.php';
?>
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

            $result = $db->query("SELECT * FROM $dbDatabase.USERS WHERE email = '$email'");
            if ($result->num_rows !== 0)
            {
                $errormsg = $errormsg . 'Diese E-Mail-Adresse ist bereits vergeben<br>';
                $error = true;
            }

            $result = $db->query("SELECT * FROM $dbDatabase.USERS WHERE USERNAME = '$username'");
            if ($result->num_rows !== 0)
            {
                $errormsg = $errormsg . 'Dieser Nutzername ist bereits vergeben<br>';
                $error = true;
            }
        }

        //Keine Fehler, wir können den Nutzer registrieren
        if (!$error) {
            $result = $db->query("INSERT INTO $dbDatabase.USERS (USERNAME, PASSWORD, EMAIL) VALUES ('$username', '$passwort', '$email')");

            if ($result)
            {
                $result     = $db->query("SELECT * FROM $dbDatabase.USERS WHERE USERNAME = '$username'");
                $user       = $result->fetch_assoc();

                //Überprüfung des Passworts
                if ($user !== null)
                {
                    $_SESSION['userid'] = $user['ID'];
                    header('Location: ../guestbook.php' , true, 301);
                    die();
                }
                else
                {
                    header('Location: ./login.php' , true, 301);
                    die();
                }
            }
            else
            {
                $errormsg = $errormsg . 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
            }
        }
    }
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
        <style>
            .modal
            {
                position:           fixed;
                top:                auto;
                color:              #000;
            }
        </style>
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
                            if($showFormular)
                            {
                        ?>

                            <form id="formRegistration" action="./guestbook/registrierung.php?register=1" method="post">
                                E-Mail:<br>
                                <input id="formRegistrationEmailInput" type="email" size="20" maxlength="250" name="email" value="<?php echo $email ?>"><br><br>

                                Nutzername:<br>
                                <input id="formRegistrationNameInput" type="text" size="20" maxlength="250" name="username" value="<?php echo $username ?>"><br><br>

                                Dein Passwort:<br>
                                <input type="password" size="20"  maxlength="250" name="passwort" value="<?php echo $passwort ?>"><br>

                                Passwort wiederholen:<br>
                                <input type="password" size="20" maxlength="250" name="passwort2"><br><br>

                                <input class="btn btn-success" id="formRegistrationSubmitBtn" type="button" value="Abschicken" data-toggle="modal" data-target="#regConfirmModal">
                                <input class="btn btn-warning" type="reset">
                            </form>
                            <p style="color: red;"><?php echo $errormsg ?></p>
                        <?php
                            } //Ende von if($showFormular)
                        ?>
                    </div>
                </div>

                <div class="modal fade" id="regConfirmModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Registrierung bestätigen</h3>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body">
                                <p>Willst du dich wirklich mit folgenden Nutzerdaten registrieren:</p>
                                <ul>
                                    <li id="regConfirmModalEmail"></li>
                                    <li id="regConfirmModalName"></li>
                                </ul>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Abbrechen</button>
                                <button id="regConfirmModalSubmitBtn" type="button" class="btn btn-success" data-dismiss="modal">Registrieren</button>
                            </div>
                        </div>
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
        <script>
        $('#formRegistrationSubmitBtn').click(function()
        {
            $('#regConfirmModalEmail').text("E-Mail: " + $('#formRegistrationEmailInput').val());
            $('#regConfirmModalName').text("Nutzername: " + $('#formRegistrationNameInput').val());
        });

        $('#regConfirmModalSubmitBtn').click(function()
        {
            $('#formRegistration').submit();
        });
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
