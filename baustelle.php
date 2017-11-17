<!DOCTYPE html>

<html lang="de">

    <head>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="stylesheet" href="./imageGallery.css">
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

                <!--
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        Um alle Anforderungen trotzdem bereits zu erfüllen, hier eine Tabelle:
                        <br>
                        <table>
                            <tr>
                                <th>Spalte 1</th>
                                <th>Spalte 2</th>
                                <th>Spalte 3</th>
                            </tr>
                            <tr>
                                <th>Zeile 1 / Sp 1</th>
                                <th>Zeile 1 / Sp 2</th>
                                <th>Zeile 1 / Sp 3</th>
                            </tr>
                            <tr>
                                <th>Z 2 / Sp 1</th>
                                <th>Z 2 / Sp 2</th>
                                <th>Z 2 / Sp 3</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <br>
                        Und hier ein Video in einem iFrame:
                        <br>

                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                class="embed-responsive-item"
                                src="https://www.youtube.com/embed/JmvCpR45LKA"
                                style="border: 0; max-width: 1080px;"
                                allowfullscreen>
                            </iframe>
                        </div>

                    </div>
                </div>
                -->

                <?php
                    $btnText    = "TestScript";
                    $btnLink    = "./relabelTestButton.php?btnRename=true";
                    $args       = filter_input(INPUT_GET, 'btnRename');

                    echo "  <div class='row'>";
                    echo "      <div class='col-12' id='testBtn'>";
                    echo "          <button class='btn btn-danger' onclick='loadPHP(\"#testBtn\", \"$btnLink\")'>$btnText</button>";
                    echo "      </div>";
                    echo "  </div>";

                    
                    $pictures = array();
                    $picturepreviews = array();
                    $pictureCaptions = array();
                    $test = array();

                    foreach (glob( './about/Lukas/*.jpg') as $file)
                    {
                        if (preg_match('/.*(Preview)\.(jpg)/', $file) === 1)
                        {
                            $picturepreviews[$file] = $file;
                        }
                        
                        else if (preg_match("/.*(Caption)\.(txt)/", $file) === 1)
                        {
                            $pictureCaptions[] = $file;
                        }
                        else if (preg_match("/.*\.(jpg)/", $file) === 1)
                        {
                            $pictures[] = $file;
                        }
                    }

                    for ($i=0; $i < count($pictures); $i++)
                    {
                        
                    }

                ?>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                         <div class="slideshow-container" id="slidesContainer1">

                             <?php
                                $pictureCount = count($pictures);
                                for ($i=0; $i < $pictureCount; $i++)
                                {
                                    echo " <div class='mySlides fade'>";
                                    echo "     <div class='numbertext'>" . ($i + 1) . " / " . $pictureCount ."</div>";
                                    echo "         <img src='$pictures[$i]' style='width:100%;'>";
                                    echo "     <div class='text'>Caption Text</div>";
                                    echo " </div>";
                                }
                            ?>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <div style="text-align:center" id="previewContainer1">

                            <?php
                            for ($i=0; $i < count($pictures); $i++)
                            {
                                $splitStr = substr($pictures[$i], 0, -4);
                                $splitStr = $splitStr . "Preview.jpg";

                                if (array_key_exists($splitStr, $picturepreviews))
                                {
                                    echo "<img class='dot' onclick='currentSlide(" . ($i +1). ")' src='" . $picturepreviews[$splitStr] . "'></img>";
                                }
                                else
                                {
                                    echo "<span class='dot' onclick='currentSlide(" . ($i +1). ")' style='border:50%; background-color: rgb(100,100,100);'></span>";
                                }
                            }

                            ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
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

        <script src="./slideshow.js"></script>

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
