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
                margin:             0px 10px 10px 10px;
            }

            .guestbookEntry div
            {
                background:         #00017f;
                border:             solid 1px #fff;
                border-radius:      5px 5px 0 0;
                margin:             0;
                padding:            0;
                display:            flex;
                justify-content:    space-between;
            }

            .guestbookEntry div ul
            {
                list-style-type:    none;
                margin:             0;
                padding:            2px 5px 2px 5px;
                font-size:          12px;
                display:            inline;
            }

            .guestbookEntry div ul li
            {
                display:            inline;
                padding:            0 1em 0 0;
            }

            .guestbookEntry p
            {
                background:         rgba(50,50,50,1);
                padding:            5px 5px 5px 5px;
                border:             solid 1px #fff;
                border-radius:      0 0 5px 5px;
            }

            #guestbookNav ul
            {
                margin:             0 10px 0 10px;
                justify-content:    flex-end;
            }

            #guestbookNav ul li
            {
                padding:            5px;
                color:              orange;
                background:         rgba(50,50,50,1);
                border:             1px solid #000;
                border-radius:      3px;
                cursor:             pointer;
            }

            #guestbookNav ul li.activeSite
            {
                background:         orange;
                color:              #fff;
                border:             solid 1px #fff;
            }

            #guestbookNav ul li:hover
            {
                background:         orange;
                color:              #fff;
            }

            form
            {
                margin:             0 10px 0 10px;
            }

            form textarea
            {
                width:              100%;
                border-radius:      5px;
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
                    <div class="col-12">
                        <div id="guestbookNav">
                            <ul class="pagination">
                                <li><<</li>
                                <li class="activeSite">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>>></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12" id="guestbookContainer">
                        <div class="guestbookEntry">
                            <div>
                                <!-- display as flex with space between -->
                                <!-- => first is displayed left -->
                                <ul>
                                    <li>username</li>
                                    <li>|</li>
                                    <li>Titel</li>
                                </ul>

                                <!-- => second is displayed right -->
                                <ul>
                                    <li>create Time</li>
                                    <li id="postCount1"><a href="#postCount1">postID</a></li>
                                </ul>
                            </div>
                            <p>content</p>
                        </div>
                        <div class="guestbookEntry">
                            <div>
                                <!-- display as flex with space between -->
                                <!-- => first is displayed left -->
                                <ul>
                                    <li>username</li>
                                    <li>|</li>
                                    <li>Titel</li>
                                </ul>

                                <!-- => second is displayed right -->
                                <ul>
                                    <li>create Time</li>
                                    <li id="postCount2"><a href="#postCount2">postID</a></li>
                                </ul>
                            </div>
                            <p>content</p>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <form id="guestbookCreate" action="./guestbook/createNewEntry.php" method="post">
                            Titel:<br>
                            <textarea type="text" rows="1" cols="45" maxlength="50"  name="entryTitel" style="width: auto; max-width: 100%;"></textarea><br>
                            <br>
                            Beitrag:
                            <textarea type="text" cols="20" rows="5" maxlength="2048" name="entryText"></textarea><br>
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
            $("#guestbookCreate").submit(function (event)
            {
                // prevent default action for submit
                event.preventDefault();
                let inputs = document.getElementById('guestbookCreate').querySelectorAll('[name]');
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
                    if (this.readyState === 4 && this.status === 403)
                    {
                        alert ("Sorry, it seems you're not logged in properly.");
                    }

                    if (this.readyState === 4 && this.status === 420)
                    {
                        alert ("Ein leerer Text ist nicht zulässig!");
                    }

                    if (this.readyState === 4 && this.status === 500)
                    {
                        alert ("Da ist was auf dem Server schiefgelaufen. Versuch's bitte später nochmal.");
                    }

                    if (this.readyState === 4 && this.status === 200)
                    {
                        // add reload content in background here later
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
