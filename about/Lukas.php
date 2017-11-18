<!DOCTYPE html>

<html lang="de">

    <head>
        <base href="../">
        <?php define ('ANTIBASE', './about/');?>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css" type="text/css">
        <link rel="stylesheet" href="./imageGallery.css">
        <title>IPR WS 2017/18 | Über Lukas</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <style>
            .lebenslauf
            {
                border-collapse: collapse;
                background:      rgb(75,75,75);
            }

            .lebenslauf th
            {
                color:          #00cfff;
            }

            .lebenslauf tr:nth-child(even)
            {
                background:     rgb(50,50,50);
            }

            .lebenslauf tr th:nth-child(1)
            {
                background-color:   #00cfff;
            }

            .lebenslauf tr td:nth-child(odd)
            {
                color:          #00cfff;
                text-align:     right;
            }

            .lebenslauf th, td
            {
                border:         solid 1px #fff;
                font-size:      12px;
                padding:        2px 5px 2px 5px;
            }

            .lebenslauf td ul
            {
                padding-left:   15px;
                list-style-type: square;
            }
        </style>
    </head>

    <body>

        <script>
            function changeSource(uri, descriptionTXT)
            {
                var image = document.getElementById("highResPictureImgTag");
                var description = document.getElementById("highResPictureBeschreibung");
                image.src = uri;
                description.innerHTML = descriptionTXT;
            }
        </script>

        <div id='topNavBar'></div>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h2>Lukas Wiest</h2>
                        <br>
                        <h3>Lebenslauf:</h3>
                        <table class="lebenslauf">
                            <tr>
                                <th>&nbsp;</th>
                                <th>Persönliche Daten</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Lukas Wiest</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>E-Mail</td>
                                <td><a href="mailto:62wilu1bif@hft-stuttgart.de">62wilu1bif@hft-stuttgart.de</a></td>
                            </tr>
                            <tr>
                                <td>GnuPG Schlüssel-Kennung</td>
                                <td>
                                    <a
                                        href="./about/Lukas/Lukas.Wiest.-.HFT.Stuttgart.62wilu1bif@hft-stuttgart.de.(0xBD489347).pub.asc"
                                        download
                                    >
                                        0xBD489347
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Threema-ID</td>
                                <td><a href="https://www.threema.ch/de">J55WWV8S</a></td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Schulische Laufbahn</th>
                            </tr>
                            <tr>
                                <td>2001 - 2005</td>
                                <td>Grundschule</td>
                            </tr>
                            <tr>
                                <td>2005 - 2010</td>
                                <td>Gymnasium</td>
                            </tr>
                            <tr>
                                <td>2010 - 2012</td>
                                <td>Realschule</td>
                            </tr>
                            <tr>
                                <td>1. Schulabschluss (2012)</td>
                                <td>Mittlere Reife</td>
                            </tr>
                            <tr>
                                <td>2012 - 2015</td>
                                <td>Berufsschule</td>
                            </tr>
                            <tr>
                                <td>2. Schulabschluss (2015)</td>
                                <td>Berufsausbildung</td>
                            </tr>
                            <tr>
                                <td>2013 - 2016</td>
                                <td>Abendschule</td>
                            </tr>
                            <tr>
                                <td>3. Schulabschluss</td>
                                <td>Fachhochschulreife</td>
                            </tr>
                            <tr>
                                <td>seit 2016</td>
                                <td>
                                    Hochschule<br>
                                    nächster angestrebter Abschluss: B.Sc. Informatik
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Berufliche Laufbahn</th>
                            </tr>
                            <tr>
                                <td>2010 (1 Woche)</td>
                                <td>
                                    W.P. CNC-Technik<br>
                                    Praktikum Industriemechaniker
                                </td>
                            </tr>
                            <tr>
                                <td>2011 (1 Woche)</td>
                                <td>
                                    S-Bahn Stuttgart Ag<br>
                                    Praktikum Industriemechaniker/Eelektroniker<br>
                                    für Betriebstechnik
                                </td>
                            </tr>
                            <tr>
                                <td>2011 (1 Woche)</td>
                                <td>
                                    DB Netz Ag<br>
                                    Praktikum Fahrdienstleiter
                                </td>
                            </tr>
                            <tr>
                                <td>09/2012 - 06/2015</td>
                                <td>
                                    DB Regio AG - VB Württemberg<br>
                                    Ausbildung zum Eisenbahner im Betriebsdienst<br>
                                    Fachrichtung Lokführer und Transport (EiB-L/T)
                                </td>
                            </tr>
                            <tr>
                                <td>07/2015 - 09/2016</td>
                                <td>
                                    DB Regio AG - VB Württemberg<br>
                                    Triebfahrzeugführer Klasse 3 Strecke (Tf)
                                </td>
                            </tr>
                            <tr>
                                <td>seit 07/2017</td>
                                <td>
                                    Bahn Personal und Training GmbH<br>
                                    Triebfahrzeugführer Klasse 3 Strecke (Tf)
                                </td>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Qualifikationen</th>
                            </tr>
                            <tr>
                                <td>Bahnbetrieb</td>
                                <td>
                                    <ul>
                                        <li>Bremsprobeberechtigter</li>
                                        <li>Wagenprüfer Reise & Güterzug</li>
                                        <li>Führerschein Klasse 3 (Strecke)</li>
                                        <li>
                                            Baureihenbefähigungen:
                                            <ul>
                                                <li>BR 143</li>
                                                <li>BR 146/185</li>
                                                <li>BR 193</li>
                                            </ul>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>EDV</td>
                                <td>
                                    Gute Kenntnisse im Bereich Windows 7 und Ubuntu<br>
                                    Grundlegende Kenntnisse im Skripting für kleine Aufgaben<br>
                                    Access-Datenbank<br>
                                    Alternativ-Software Android Smartphone<br>
                                    Java-Programmierung<br>
                                    HTML/CSS<br>
                                    rudimentär Phython<br>
                                </td>
                            </tr>
                        </table>

                        <br>
                    </div>
                </div>

                <?php
                    $pictures = array();
                    $picturepreviews = array();
                    $pictureCaptions = array();
                    $test = array();

                    foreach (glob('./Lukas/*') as $file)
                    {
                        if (preg_match('/.*(Preview)\.(jpg)/', $file) === 1)
                        {
                            $picturepreviews[$file] = $file;
                        }
                        
                        else if (preg_match("/.*(Caption)\.(txt)/", $file) === 1)
                        {
                            $pictureCaptions[$file] = $file;
                        }
                        else if (preg_match("/.*\.(jpg)/", $file) === 1)
                        {
                            $pictures[] = $file;
                        }
                    }
                ?>

                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h3>Bilderstrecke</h3>
                        <br>
                        <div class="slideshow-container" id="slidesContainer1">

                             <?php
                                $pictureCount = count($pictures);
                                echo " <div class='mySlides fade' style='display: block;'\n>";
                                echo "     <div class='numbertext'>" . ($i + 1) . " / " . $pictureCount ."</div>\n";
                                echo "     <img id='slideImage' src='./loading.jpg' alt='something went bad' style='width:100%;'>\n";
                                echo " </div>";
                                for ($i=0; $i < $pictureCount; $i++)
                                {
                                    echo " <div class='mySlidesLinks' style='display: none;'>" . ANTIBASE . $pictures[$i] . "</div>\n";
                                }
                            ?>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <?php
                            for ($i=0; $i < $pictureCount; $i++)
                            {
                                $splitStr   = substr($pictures[$i], 0, -4);
                                $splitStr   = $splitStr . "Caption.txt";
                                $caption    = "";

                                {
                                    $readValues = file($pictureCaptions[$splitStr]);
                                    if (count($readValues) === 1)
                                    {
                                        if (strlen($readValues[0]) > 0)
                                        {
                                            $caption = $readValues[0];
                                        }
                                    }
                                }
                                echo "     <div class='text'>$caption</div>\n";
                            }
                        ?>
                        <br>

                        <div style="text-align:center" id="previewContainer1">

                        <?php
                            for ($i=0; $i < $pictureCount; $i++)
                            {
                                $splitStr = substr($pictures[$i], 0, -4);
                                $splitStr = $splitStr . "Preview.jpg";

                                if (array_key_exists($splitStr, $picturepreviews))
                                {
                                    echo "<img class='dot' onclick='currentSlide(" . ($i +1). ")' src='" . ANTIBASE . $picturepreviews[$splitStr] . "' alt='something went bad'>\n";
                                }
                                else
                                {
                                    echo "<span class='dot' onclick='currentSlide(" . ($i +1). ")' style='border:50%; background-color: rgb(100,100,100);'></span>\n";
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
