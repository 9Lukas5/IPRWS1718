<!DOCTYPE html>

<html lang="de">

    <head>
        <base href="../">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css" type="text/css">
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

            .bigPictureOfPreviewOuter
            {
                max-width:      1000px;
            }

            .bigPictureOfPreview
            {
                position:       relative;
                width:          100%;
                height:         0;
                padding-top:    56.25%;
                z-index:        2;
            }

            .bigPictureOfPreview img
            {
                position:       absolute;
                top:            0;
                left:           0;
                bottom:         0;
                right:          0;
                max-width:      100%;
                max-height:     100%;
            }

            .galerie
            {
                max-width:      800px;
            }

            .galerie img
            {
                width:          100px;
                cursor:         pointer;
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
                                <td><a href="mailto: 62wilu1bif@hft-stuttgart.de">62wilu1bif@hft-stuttgart.de</a></td>
                            </tr>
                            <tr>
                                <td>GnuPG Schlüssel-Kennung</td>
                                <td>
                                    <a
                                        href="file:./about/Lukas/Lukas.Wiest.-.HFT.Stuttgart.62wilu1bif@hft-stuttgart.de.(0xBD489347).pub.asc"
                                        download>
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
                <div class="row">
                    <div class="col-md-8">
                        <h3>Bilderstrecke</h3>
                        <div class="bigPictureOfPreviewOuter">
                            <div class="bigPictureOfPreview">
                                <img src="" alt="< Bild aus Gallerie anklicken um das Große nachzuladen >" id="highResPictureImgTag">
                            </div>
                            <br>
                            <p id="highResPictureBeschreibung"></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="galerie">
                            <img
                                src="./about/Lukas/WerkstattPlochingenPreview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/WerkstattPlochingen.jpg',
                                            'Betriebswerk Plochingen der S-Bahn Stuttgart')"
                            >
                            <img
                                src="./about/Lukas/ET420FstPreview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/ET420Fst.jpg',
                                            'Führerstand ET420')"
                            >
                            <img
                                src="./about/Lukas/V60Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/V60.jpg',
                                            'V60 beim Bremsprobe Berechtigung Lehrgang')"
                            >
                            <img
                                src="./about/Lukas/BwMannheimPreview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/BwMannheim.jpg',
                                            'Bahnbetriebswerk DB Cargo Mannheim')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140212_122614Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140212_122614.jpg',
                                            'Ausbildung im Bahnbetriebswerk Stuttgart<br>\n\
                                                in Theorie....')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140210_140101Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140210_140101.jpg',
                                            'Ausbildung im Bahnbetriebswerk Stuttgart<br>\n\
                                                ....und Praxis')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140226_111031Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140226_111031.jpg',
                                            'Brandbekämpfung wird auch geübt.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140312_133049Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140312_133049.jpg',
                                            'Im Maschinenraum von Altbaumaschinen hats\n\
                                                an manchen Stellen nicht sehr viel Platz.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140806_122623Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140806_122623.jpg',
                                            '143 012 - meine spätere Prüfungslok')"
                            >
                            <img
                                src="./about/Lukas/IMG_20140923_110139Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20140923_110139.jpg',
                                            'Wer einen Kfz Führerschein hat, sollte schoneinmal\n\
                                                den Begriff Wolke gehört haben.<br>\n\
                                                Bei der Eisenbahn wird das tatsächlich täglich und mit\n\
                                                deutscher Genauigkeit gemacht.<br>\n\
                                                Z.B. Bremsen sollte man können, deshalb wird bevor gefahren wird\n\
                                                erstmal gecheckt, dass es bremst.<br>\n\
                                                Das üben wir hier.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20141014_112144Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20141014_112144.jpg',
                                            'Sogar auf der Schiene gibt es Fahrschulfahrten.<br>\n\
                                                I.d.R. finden diese aber im normalen Betrieb mit Fahrgästen statt.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20141014_113848Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20141014_113848.jpg',
                                            'Die praktische Fahrausbildung wird in Kleingruppen von 2-3 Leuten gemacht.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20141103_104309Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20141103_104309.jpg',
                                            'Normal fährt ein Zug auf gesicherten Fahrwegen, signalisiert.<br>\n\
                                                Manchmal ist aber auch mal irgendwas gestört, dann muss das dem\n\
                                                Lokführer der fährt, vom Fahrdienstleiter der für die Strecke\n\
                                                zuständig ist, mitgeteilt werden.<br>\n\
                                                Das passiert schriftlich, in Form eines Befehls.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20150720_093318Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20150720_093318.jpg',
                                            'Manchmal finden sich in Bahnbetriebswerken, wie hier in Ulm,\n\
                                                noch richtige optische Schönheiten die sich vom einheitsrot abheben.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20150812_021701Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20150812_021701.jpg',
                                            'Die neue Instandhaltungswerkstatt in Ulm')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151121_131158Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151121_131158.jpg',
                                            'Blick hinter die Abdeckungen einer Drehstromlok in der Werkstatt.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_065020Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_065020.jpg',
                                            'Bahnhof Herrenberg im Winter 2015 mit einem der ersten Züge des morgens.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_092737Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_092737.jpg',
                                            'Einfahrt in den Bf Engen, kurz vor Singen')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_093134Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_093134.jpg',
                                            'Bergauf auf Richtung Hattingen.<br>\n\
                                                Begegnung mit der Schwarzwaldbahn von Karlsruhe kommend.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_093651Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_093651.jpg',
                                            'Bf Hattingen, jetzt gehts wieder bergab nach Tuttlingen.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_095850Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_095850.jpg',
                                            'Im Bf Aldingen bei Spaichingen wird auf den Gegenzug gewartet,\n\
                                                Zeit genug für einen Schnappschuss.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_101916Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_101916.jpg',
                                            'So langsam lichten sich die Wolken ein wenig, was einen beim fahren\n\
                                                mit tollen Ausblicken belohnt.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_102057Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_102057.jpg',
                                            'Die Sonne macht daraus dann ein Winterwonderland.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20151122_102450Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20151122_102450.jpg',
                                            'Die Sonne macht daraus dann ein Winterwonderland.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20160421_122154Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20160421_122154.jpg',
                                            'Bf Geislingen an der Steige bei der Mittagspause.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20160525_150939Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20160525_150939.jpg',
                                            'Die BR 146.2<br>\n\
                                                Eigengewicht: 84t<br>\n\
                                                Länge: 18.9m<br>\n\
                                                Nennleistung: 5600KW<br>\n\
                                                Vmax: 160km/h')"
                            >
                            <img
                                src="./about/Lukas/IMG_20160608_144813Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20160608_144813.jpg',
                                            'Werbelok für das Großprojekt Stuttgart-Ulm und Stuttgart21')"
                            >
                            <img
                                src="./about/Lukas/IMG_20170904_144251Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20170904_144251.jpg',
                                            'Bei der Eisenbahn gibts auch Ampeln. Die heißen hier allerdings &quot;Signale&quot;<br>\n\
                                                Dieses Signal ist eine Kombination aus Hauptsignal(oberer rechteckiger Schirm) und Vorsignal (unterer diagonaler Schirm)<br>\n\
                                                Das Hauptsignal zeigt &quot;Langsamfahrt&quot; und sagt uns, dass ab hier mit höchstens 40km/h gefahren werden darf.<br>\n\
                                                Das Vorsignal darunter zeigt &quot;halt erwarten&quot; und kündigt uns an, dass das nächste Hauptsignal rot sein wird.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20170822_101627Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20170822_101627.jpg',
                                            'Vectron mit Lackierung zum 25 jährigen Mauerfall')"
                            >
                            <img
                                src="./about/Lukas/IMG_20170822_101844Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20170822_101844.jpg',
                                            'Aushubzug von der Stuttgart21 Baustelle.<br>\n\
                                                Vom Nordbahnhof Stuttgart kommend, gehts z.B. zu einem Steinbruch bei Schwäbisch Hall<br>\n\
                                                Die Züge sind 300m-350m lang und 1650t-2000t schwer.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20170823_154220Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20170823_154220.jpg',
                                            'Mittags um dreiviertel vier beim Feierabend, sieht man schon seine Wagen für den nächsten Tag.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20171014_111632Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20171014_111632.jpg',
                                            'BR 193 (Vectron)<br>\n\
                                                Eigengewicht: 87t<br>\n\
                                                Länge: 18.9m<br>\n\
                                                Nennleistung: 6400KW<br>\n\
                                                Vmax: 160-200km/h (versch. Varianten)<br>\n\
                                                Auf diesem Bild versammeln sich also 12.800KW, die einem einzelnen Menschen gehorchen.')"
                            >
                            <img
                                src="./about/Lukas/IMG_20171014_123825Preview.jpg"
                                alt=""
                                onclick="changeSource(
                                            './about/Lukas/IMG_20171014_123825.jpg',
                                            'Warten auf Gegenzug mit dem leeren Zug und einer Doppeltraktion Vectron im Bf Fornsbach im Murrtal.')"
                            >
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
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
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