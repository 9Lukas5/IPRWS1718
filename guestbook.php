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
                        <div id="guestbookNavUpper" class="guestbookNav"></div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12" id="guestbookContainer"></div>
                </div>

                <br>

                <div class="row">
                    <div class="col-12">
                        <div id="guestbookNavLower" class="guestbookNav"></div>
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

                // get array of elements with the name attribute
                let inputs = document.getElementById('guestbookCreate').querySelectorAll('[name]');

                // get url the form normally would have loaded, as this is the url we'll make our
                // request to
                $form = $(this);
                let url = $form.attr('action');

                // declare data array and fill it with the data from the forms fields
                let data = [];
                for (let j=0; j < inputs.length; j++)
                {
                    data[inputs[j].getAttribute('name')] = inputs[j].value;
                }

                // call the send data method with the generated array and the url
                sendData(data, url);
            });

            function sendData(data, url)
            {
                let XHR = new XMLHttpRequest();
                let FD = new FormData();

                // fill the formdata with the data array content
                for (name in data)
                {
                    FD.append(name, data[name]);
                }

                // define what get's called if the ready state of our request changes
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

                    // if successful finished
                    if (this.readyState === 4 && this.status === 200)
                    {
                        // replace guestbook content with the new content from the server response
                        replaceGuestbookEntries(this.responseText);

                        // if successful, the post is saved in the db, therefore clear the fields of the form
                        $('textarea[name="entryTitel"]').val('');
                        $('textarea[name="entryText"]').val('');

                        <?php
                            // for later remove if no problems occur because of outcommenting this
                            /*
                            $targetID = filter_input(INPUT_GET, 'target');
                            if (!$targetID)
                            {
                                $targetID = "";
                            }
                            */
                        ?>
                    }
                };

                // don't know if really needed....or if this is handled by the readystateChange event yet.
                XHR.addEventListener('error', function (event)
                {
                    alert ('Ooops, smth. failed');
                });

                // open the request and set up the transmission type and the url
                XHR.open('POST', url);

                // fire it up with our FormData object
                XHR.send(FD);
            }

            function replaceGuestbookEntries (serverResponse)
            {
                // I defined my own interface if you could call it that way.
                // this uses a '<CUTHERE>' tag to split the HTML code for navigation
                // and the guestbook posts
                let split = serverResponse.split("<CUTHERE>");

                // check that the array has two indexs after split, instead s.th.
                // went terribly wrong
                if (split.length === 2)
                {
                    $('#guestbookNavUpper').html(split[0]);
                    $('#guestbookNavLower').html(split[0]);
                    $('#guestbookContainer').html(split[1]);
                }
            }

            /**
             * this function is called if you navigate between the pages to load
             * the next page asynchroniously.
             *
             * On creating a new post, this is done server side automatically,
             * so no need to call it extra.
             *
             * @param {type} url
             * @returns {undefined}
             */
            function getGuestbookEntries(url)
            {
                response = $.get(url, function(serverResponse)
                {
                    replaceGuestbookEntries(serverResponse);
                },'text');
                
            }
        </script>

        <?php
            // check if we should load a specifics site posts
            $pageToLoad = "\"./guestbook/getGuestbookContent.php";
            $specificPage = filter_input(INPUT_GET, 'page');
            if ($specificPage)
            {
                $pageToLoad .= "?page=$specificPage";
            }
            $pageToLoad .= "\"";
            // set the link to load posts on site load
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
