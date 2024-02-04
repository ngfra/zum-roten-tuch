<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zum roten Tuch</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/basis.css" />
    <link rel="stylesheet" href="css/navigation.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/component.css" />
    <script src="js/nav.js" defer></script>
    <script src="js/function.js" defer></script>
    <script src="js/bootstrap.min.js" defer></script>
</head>

<body>
    <?php include('nav.php') ?>

    <header>
        <div class="container">
            <div class="siteheader__container row">
                <h1 class="siteheader__h1">Besuchen uns am Markt</h1>
                <div class="siteheader__text">
                    <p>
                        Es erfüllt uns mit Freude, Ihnen unsere Produkte persönlich am Marktplatz vorstellen zu können.
                        Im Jahr 2024 werden wir an verschiedenen Terminen und Locations präsent sein. Unten finden Sie
                        die genauen Daten und Orte unseres Auftritts.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- map and event list -->
            <div class="row calendarDesktop">
                <div class="col-md-8 col-sm-12">
                    <?php include('map.php') ?>
                </div>

                <div class="col-md-4 col-sm-12">
                    <p class="event-text wien">
                        <span class="calendar__item--titel">Veranstaltungen in Wien</span> <br>
                        - Ritterfest Alt Erlaa <br>
                        - Montur und Pulverdampf <br>
                        - Mittelalterfest Schloss Neugebäude <br>
                        - HGM
                    </p>

                    <p class="event-text NO">
                        <span class="calendar__item--titel">Veranstaltungen in Niederösterreich</span> <br>
                        - Mittelalter erleben <br>
                        - Ritterfest Burgwiese Burg Lichtenstein <br>
                        - Lagerleben 2024 <br>
                        - Mittelalterfest in Klosterneuburg <br>
                        -Mittelalterliches Spektakel Hainburg <br>
                        - Burgtreyben zu Plankenstein <br>
                        - Mittelalterfest Aggstein <br>
                        - Gaudium zur Purg <br>
                        - Zeitreise ins Mittelalter Eggenburg <br>
                        - Ritterturnier zu Pferde Laxenburg 2, 3
                    </p>

                    <p class="event-text Tirol">
                        <span class="calendar__item--titel">Veranstaltungen in Tirol</span> <br>
                        - Mittelalterspektakel zu Rattenberg <br>
                        - Ritter-Fest-Kufstein <br>
                        - Haller Freudenfeuer<br>
                    </p>

                    <p class="event-text OBO">
                        <span class="calendar__item--titel">Veranstaltungen in Oberösterreich </span><br>
                        - Weihnachtsmarkt
                    </p>

                    <p class="event-text DE">
                        <span class="calendar__item--titel">Veranstaltungen in Deutschland </span> <br>
                        - Mystica Hamelon <br>
                        - Oster- Ritterturnier Loreley <br>
                        - Ortenburger Ritterspiele <br>
                        - Mittelaltermarkt Stadt Laufen <br>
                        - Historisches Burgfest Burghausen <br>
                        - Drachenfest <br>
                        - Conquest of Mythodea <br>
                        - Cave Gladium
                    </p>

                    <p class="event-text ST">
                        <span class="calendar__item--titel">Veranstaltungen in Südtirol </span><br>
                        - Südtiroler Ritterspiele
                    </p>

                    <p class="event-text karnten">
                        <span class="calendar__item--titel">Veranstaltungen in Kärnten</span><br>
                        - Spectaculum zu Friesach <br>
                        - Ritterfest Burg Hochosterwitz <br>
                    </p>

                    <p class="event-text SB">
                        <span class="calendar__item--titel">Veranstaltungen in Salzburg</span><br>
                        - Burgfest Kaprun
                    </p>

                    <p class="event-text STM">
                        <span class="calendar__item--titel">Veranstaltungen in Steiermark</span><br>
                        - 23. Ritterfest Burg Oberkapfenberg
                    </p>
                </div>

            </div>

            <!-- event list mobile -->
            <div class="row list-mobile">
                <div class="fw-bold fs-3 ps-4">
                    Top-Veranstaltungen 2024
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Wien
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Ritterfest Alt Erlaa <br>
                                        - Montur und Pulverdampf <br>
                                        - Mittelalterfest Schloss Neugebäude <br>
                                        - HGM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- events in Wien -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Oberösterreich
                            </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Weihnachtsmarkt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Oberösterreich -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Niederösterreich
                            </button>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Mittelalter erleben <br>
                                        - Ritterfest Burgwiese Burg Lichtenstein <br>
                                        - Lagerleben 2024<br>
                                        - Mittelalterfest in Klosterneuburg<br>
                                        -Mittelalterliches Spektakel Hainburg<br>
                                        - Burgtreyben zu Plankenstein<br>
                                        - Mittelalterfest Aggstein<br>
                                        - Gaudium zur Purg<br>
                                        - Zeitreise ins Mittelalter Eggenburg<br>
                                        - Ritterturnier zu Pferde Laxenburg 2, 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- events in Niederösterreich -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                Steiermark
                            </button>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- 23. Ritterfest Burg Oberkapfenberg
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Steiermark -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                Salzburg
                            </button>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Burgfest Kaprun
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Salzburg -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingSix">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                Kärnten
                            </button>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Spectaculum zu Friesach <br>
                                        - Ritterfest Burg Hochosterwitz
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Kärnten -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingSeven">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                Tirol
                            </button>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Mittelalterspektakel zu Rattenberg <br>
                                        - Ritter-Fest-Kufstein <br>
                                        - Haller Freudenfeuer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Tirol -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingEight">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                Deutschland
                            </button>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Mystica Hamelon <br>
                                        - Oster- Ritterturnier Loreley <br>
                                        - Ortenburger Ritterspiele<br>
                                        - Mittelaltermarkt Stadt Laufen<br>
                                        - Historisches Burgfest Burghausen<br>
                                        - Drachenfest<br>
                                        - Conquest of Mythodea<br>
                                        - Cave Gladium
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Deutschland -->

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingNine">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                Südtirol
                            </button>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample" style="">
                                <div class="accordion-body">
                                    <p>- Südtiroler Ritterspiele
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- event in Südtirol -->
            </div>

            <div class="hre">
                <img src="images/hre.png" alt="" />
            </div>

            <!-- Calendar -->
            <div class="content content__container">
                <div>
                    <div class="content__title">
                        <div class="content__title">
                            <div class="content__h2">
                                <h2>Der Marktkalender</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row calendar">
                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    März 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">01–03.03.24</div>
                                        <div class="col">Mystica Hamelon - Hameln/DE</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">30–31.03.24</div>
                                        <div class="col">Oster- Ritterturnier Loreley - St. Goarshausen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Marz-->

                        <div class="calendar__item">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    April 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">06–07.04.24</div>
                                        <div class="col">Mittelalter erleben - Gloggnitz/NÖ</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">13–14.04.24</div>
                                        <div class="col">Ritterfest Burgwiese Burg Lichtenstein - Maria Enzersdorf/NÖ
                                        </div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">18–21.04.24</div>
                                        <div class="col">Lagerleben 2024 - Purgstall/NÖ</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">26–28.04.2024</div>
                                        <div class="col">Mittelalterspektakel zu Rattenberg - Rattenberg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--April-->

                        <div class="calendar__item">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    Mai 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">04–05.05.24</div>
                                        <div class="col">Mittelalterfest in Klosterneuburg - Klosterneuburg/NÖ</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">04–05.05.24</div>
                                        <div class="col">Ritterfest Alt Erlaa - Zirkuswiese/Wien</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">09–12.05.24</div>
                                        <div class="col">Burgtreyben zu Plankenstein - Plankenstein/NÖ</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">17–20.05.24</div>
                                        <div class="col">Ritter-Fest-Kufstein - Rattenberg</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">19–20.05.24</div>
                                        <div class="col">Mittelalterliches Spektakel Hainburg - Hainburg</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">24–26.05.24</div>
                                        <div class="col">Wikingerfest</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--May-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    Juni 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">30.05–01.06.24</div>
                                        <div class="col">Ortenburger Ritterspiele - Ortenburg/DE</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">15–16.06.24</div>
                                        <div class="col">Mittelalterfest Aggstein - Aggstein/NÖ</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">22–23.06.24</div>
                                        <div class="col">23. Ritterfest Burg Oberkapfenberg - Oberkapfenberg</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">28–30.06.24</div>
                                        <div class="col">Mittelaltermarkt Stadt Laufen - Laufen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--June-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    Juli 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">12–14.07.24</div>
                                        <div class="col">Historisches Burgfest Burghausen - Burghausen</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">13–14.07.24</div>
                                        <div class="col">Montur und Pulverdampf - Arsenal, Wien</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">19–21.07.24</div>
                                        <div class="col">Burgfest Kaprun - Kaprun/SBG</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">23–28.07.24</div>
                                        <div class="col">Drachenfest - Am Quast, Diemelstadt</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">27–28.07.24</div>
                                        <div class="col">Spectaculum zu Friesach - Friesach</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--July-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    August 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">31.07–04.08.24</div>
                                        <div class="col">Conquest of Mythodea - Brokeloh/DE</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">08–11.08.24</div>
                                        <div class="col">Ritterfest Burg Hochosterwitz - Hochosterwitz</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">15–18.08.24</div>
                                        <div class="col">Cave Gladium - Furth im Wald</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">16–18.08.24</div>
                                        <div class="col">Südtiroler Ritterspiele - Schluderns</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">30.08–01.09.24</div>
                                        <div class="col">Gaudium zur Purg - Purgstall</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--August-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    September 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">07–08.09.24</div>
                                        <div class="col">Zeitreise ins Mittelalter Eggenburg - Eggenburg</div>

                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">13–15.09.24</div>
                                        <div class="col">Mittelalterfest Schloss Neugebäude - Wien</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">21–22.09.24</div>
                                        <div class="col">Ritterturnier zu Pferde Laxenburg 2 - Laxenburg</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">28–29.09.24</div>
                                        <div class="col">Ritterturnier zu Pferde Laxenburg 3 - Laxenburg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--September-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    Oktober 2024 </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">04–06.10.24</div>
                                        <div class="col">Haller Freudenfeuer - Hall in Tirol</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--October-->

                        <div class="calendar__item col-12">
                            <div class="calendar__item--icon">
                                <img class="" src="images/calender_icon02.svg" alt="">
                            </div>

                            <div class="calendar__item--text">
                                <div class="calendar__item--titel">
                                    Termine werden aktuallisiert </div>

                                <div class="calendar__item--elm">
                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">TBA</div>
                                        <div class="col">Weihnachtsmarkt - Vöcklabruck</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">TBA</div>
                                        <div class="col">HGM - Arsenal, Wien</div>
                                    </div>

                                    <div class="row mb-3 calendar__item--detail">
                                        <div class="col-md-3 calendar--date">TBA</div>
                                        <div class="col">Weihnachtsmarkt - Linz</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--TBA-->
                    </div>
                </div>



            </div>
            <!--content-->
        </div>
        <!--container-->
        </div>
    </main>

    <?php include('footer.php') ?>

</body>

</html>