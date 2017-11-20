<?php
    session_start();

    $userid = $_SESSION['userid'];
    if (!$userid)
    {
        header('Location: ./guestbook/login.php' , true, 301);
        die();
    }
?>

<!DOCTYPE html>

<html lang="de">
    <head>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>IPR WS 2017/18 | Gästebuch Login</title>
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
                        <h3>Gästebuch</h3>
                        <br>
                        <a href="./guestbook/logout.php" class="btn btn-primary">Logout</a>

                        <br>
                        <br>
                        <form id="alertForm" action="./guestbook/ajaxTest.php" method="post">
                            To alert:<br>
                            <input type="text" size="20" maxlength="250" name="alertText"><br>
                            <br>
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

        <script>
            $("#alertForm").submit(function (event)
            {
                // prevent default action for submit
                event.preventDefault();
                let inputs = document.getElementById('alertForm').querySelectorAll('[name]');
                $form = $(this);
                let url = $form.attr('action');
                let data = [];

                for (let j=0; j < inputs.length; j++)
                {
                    data[inputs[j].getAttribute('name')] = inputs[j].value;
                }

                sendData(data, url);
            });

            function sendData(data, url)
            {
                let XHR = new XMLHttpRequest();
                let FD = new FormData();

                for (name in data)
                {
                    FD.append(name, data[name]);
                }

                XHR.onreadystatechange = function()
                {
                    if (this.readyState == 4 && this.status == 200)
                    {
                        alert (this.responseText);
                    }
                };

                XHR.addEventListener('error', function (event)
                {
                    alert ('Ooops, smth. failed');
                });

                XHR.open('POST', url);
                XHR.send(FD);
            }
            
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
