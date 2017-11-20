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
        <style>
            .guestbookEntry
            {
                background:         rgba(0,0,0,0);
                border:             1px solid #fff;
                border-radius:      5px;
            }

            .guestbookEntry ul
            {
                background:         #00017f;
                border-bottom:      1px solid #fff;
                list-style:         none;
                margin:             0;
                padding:            2px 2px 2px 2px;
            }
        </style>
    </head>

    <body>

        <div id='userID' style='display: none;'><?php echo $userid ?></div>
        <div id='topNavBar'></div>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h3>Gästebuch</h3>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12" id="guestbookContainer">
                        <div class="guestbookEntry">
                            <ul>
                                <li>username</li>
                                <li>create Time</li>
                            </ul>
                            <p>content</p>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <form id="alertForm" action="./guestbook/ajaxTest.php" method="post">
                            neuer Eintrag:<br>
                            <textarea type="text" cols="20" rows="5" maxlength="250" name="alertText"></textarea><br>
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
