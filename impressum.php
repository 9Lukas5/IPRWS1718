<?php
    session_start();

    $userid = $_SESSION['userid'];
?>

<!DOCTYPE html>

<html lang="de">

    <head>
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./style.css" type="text/css">
        <title>IPR WS 2017/18 | Impressum</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <style>
            h1
            {
                text-decoration:    underline;
            }

            h3
            {
                margin:             0;
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
                        <h1>Impressum</h1>

                        <p>Angaben gemäß § 5 TMG<br>
                            <br>
                            Max Muster<br> 
                            Musterweg<br> 
                            12345 Musterstadt <br> 
                            <br>
                        </p>
                        <h3>Vertreten durch: </h3>
                        <p>
                            Max Muster<br>
                            <br>
                        </p>
                        <h3>Kontakt:</h3>
                        <p>
                            Telefon: 01234-789456<br>
                            Fax: 1234-56789<br>
                            E-Mail: <a href='mailto:max@muster.de'>max@muster.de</a><br>
                            <br>
                            <strong>Umsatzsteuer-ID: </strong><br>
                            Umsatzsteuer-Identifikationsnummer gemäß §27a Umsatzsteuergesetz: Musterustid.<br>
                            <br>
                            <strong>Wirtschafts-ID: </strong><br>
                            Musterwirtschaftsid<br>
                            <br>
                            <strong>Aufsichtsbehörde:</strong><br>
                            Musteraufsicht Musterstadt<br>
                            <br>
                            <strong>Haftungsausschluss: </strong><br>
                            <br>
                            <strong>Haftung für Links</strong><br>
                            <br>
                            Unser Angebot enthält Links zu externen Webseiten Dritter, 
                            auf deren Inhalte wir keinen Einfluss haben. Deshalb können 
                            wir für diese fremden Inhalte auch keine Gewähr übernehmen. 
                            Für die Inhalte der verlinkten Seiten ist stets der jeweilige 
                            Anbieter oder Betreiber der Seiten verantwortlich. Die 
                            verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf 
                            mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren 
                            zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente 
                            inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne 
                            konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. 
                            Bei Bekanntwerden von Rechtsverletzungen werden wir derartige 
                            Links umgehend entfernen.<br>
                            <br>
                            <strong>Urheberrecht</strong><br>
                            <br>
                            Die durch die Seitenbetreiber erstellten Inhalte und Werke 
                            auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die 
                            Vervielfältigung, Bearbeitung, Verbreitung und jede Art der 
                            Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen 
                            der schriftlichen Zustimmung des jeweiligen Autors bzw. 
                            Erstellers. Downloads und Kopien dieser Seite sind nur für 
                            den privaten, nicht kommerziellen Gebrauch gestattet. Soweit 
                            die Inhalte auf dieser Seite nicht vom Betreiber erstellt 
                            wurden, werden die Urheberrechte Dritter beachtet. Insbesondere 
                            werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie 
                            trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, 
                            bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden 
                            von Rechtsverletzungen werden wir derartige Inhalte umgehend 
                            entfernen.<br>
                            <br>
                            <strong>Datenschutz</strong><br>
                            <br>
                            Die Nutzung unserer Webseite ist in der Regel ohne Angabe 
                            personenbezogener Daten möglich. Soweit auf unseren Seiten 
                            personenbezogene Daten (beispielsweise Name, Anschrift oder 
                            eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, 
                            stets auf freiwilliger Basis. Diese Daten werden ohne Ihre 
                            ausdrückliche Zustimmung nicht an Dritte weitergegeben.<br>
                            Wir weisen darauf hin, dass die Datenübertragung im Internet 
                            (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken 
                            aufweisen kann. Ein lückenloser Schutz der Daten vor dem 
                            Zugriff durch Dritte ist nicht möglich.<br>
                            Der Nutzung von im Rahmen der Impressumspflicht 
                            veröffentlichten Kontaktdaten durch Dritte zur Übersendung 
                            von nicht ausdrücklich angeforderter Werbung und 
                            Informationsmaterialien wird hiermit ausdrücklich 
                            widersprochen. Die Betreiber der Seiten behalten sich 
                            ausdrücklich rechtliche Schritte im Falle der unverlangten 
                            Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.<br>
                        </p>
                        <br>
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
