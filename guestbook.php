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
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="stylesheet" href="./guestbookStyleSheet.css" type="text/css">
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
                    <div class="col-12">
                        <h3>Gästebuch</h3>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12">
                        <div id="guestbookNav">
                            <!--
                            <ul class="pagination">
                                <li><<</li>
                                <li class="activeSite">1</li>
                                <li>2</li>
                                <li>3</li>
                                <li>>></li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12" id="guestbookContainer">
                        <!--
                        <div class="guestbookEntry">
                            <div>
                                <ul>
                                    <li>username</li>
                                    <li>|</li>
                                    <li>Titel</li>
                                </ul>

                                <ul>
                                    <li>create Time</li>
                                    <li id="postCount1"><a href="#postCount1">postID</a></li>
                                </ul>
                            </div>
                            <p>content</p>
                        </div>
                        <div class="guestbookEntry">
                            <div>
                                <ul>
                                    <li>username</li>
                                    <li>|</li>
                                    <li>Titel</li>
                                </ul>
                                <ul>
                                    <li>create Time</li>
                                    <li id="postCount2"><a href="#postCount2">postID</a></li>
                                </ul>
                            </div>
                            <p>content</p>
                        </div>
                        -->
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
                        replaceGuestbookEntries(this.responseText);
                        $('textarea[name="entryTitel"]').val('');
                        $('textarea[name="entryText"]').val('');

                        <?php
                            $targetID = filter_input(INPUT_GET, 'target');
                            if (!$targetID)
                            {
                                $targetID = "";
                            }
                        ?>

                    }
                };

                XHR.addEventListener('error', function (event)
                {
                    alert ('Ooops, smth. failed');
                });

                XHR.open('POST', url);
                XHR.send(FD);
            }

            function replaceGuestbookEntries (serverResponse)
            {
                let split = serverResponse.split("<CUTHERE>");

                if (split.length === 2)
                {
                    $('#guestbookNav').html(split[0]);
                    $('#guestbookContainer').html(split[1]);
                }
            }

            function getGuestbookEntries(url)
            {
                response = $.get(url, function(serverResponse)
                {
                    replaceGuestbookEntries(serverResponse);
                },'text');
                
            }
        </script>

        <?php
            $pageToLoad = "\"./guestbook/getGuestbookContent.php";
            $specificPage = filter_input(INPUT_GET, 'page');
            if ($specificPage)
            {
                $pageToLoad .= "?page=$specificPage";
            }
            $pageToLoad .= "\"";
        ?>
        <script>getGuestbookEntries(<?php echo $pageToLoad ?>);</script>

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
