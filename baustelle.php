<!DOCTYPE html>

<html lang="de">

    <head>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css" type="text/css">
        <title>IPR WS 2017/18 | under construction</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <style>
            body
            {
                background-image:       url("./media/underconstruction.jpg");
                background-position:    center;
                background-repeat:      no-repeat;
                background-size:        cover;
            }

            .contentContainer
            {
                background-color:       rgba(20,20,20,0.95);
            }

            td, th
            {
                border:             1px solid #fff;
                text-align:         left;
                padding:            8px;
            }
        </style>
    </head>

    <body>

        <div id='topNavBar'></div>

        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <h1>
                            <img src="./media/attentionsign.png" alt="" width="50">
                            Baustelle
                        </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h2>Inhalt noch nicht fertiggestellt</h2>
                        <p>An dieser Seite wird noch gearbeitet, bitte komm später nochmal vorbei.</p>
                        <br>
                    </div>
                </div>

                <?php
                    $btnText    = "TestScript";
                    $btnLink    = "./relabelTestButton.php?btnRename=true";
                    $args       = filter_input(INPUT_GET, 'btnRename');

                    echo "  <div class='row'>";
                    echo "      <div class='col-12' id='testBtn'>";
                    echo "          <button class='btn btn-danger' onclick='loadPHP(\"#testBtn\", \"$btnLink\")'>$btnText</button>";
                    echo "      </div>";
                    echo "  </div>";
                ?>
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
            function loadPHP(element, link)
            {
                jQuery(element).load(link);
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
