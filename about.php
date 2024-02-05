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
    <script src="js/bootstrap.min.js" defer></script>
</head>

<body>
    <?php include('nav.php') ?>

    <header>
        <div class="container">
            <div class="siteheader__container row">
                <h1 class="siteheader__h1">Unsere Geschichte</h1>
                <div class="siteheader__text">
                    <p>
                        Wir sind eine Schneiderei, die auf das Herstellen und Verkaufen mittelalterlicher Gewandung
                        spezialisiert ist. Neben unseren Kollektionen bieten wir auch individuelle Maßschneiderei an.
                        Wir stehen für authentische, praktische Bekleidung, die mit qualitativ hochwertigen Materialien
                        und erstklassiger Verarbeitung von uns gefertigt wird.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="content">
            <div class="container team__container">
                <div class="row team__box">
                    <!--Team Block left-->
                    <div class="col-sm-12 col-md-4 team__image">
                        <img class="w-100" src="images/staff02.jpg" alt="Team" title="Team" />
                    </div>

                    <div class="col-sm-12 col-md-4 team__text">
                        <p>
                            <span class="team__name">Moni </span>ist Familienoberhaupt und kreativer Kopf ist zuständig
                            für
                            die Entwürfe, die Stoffwahl, das
                            Schneidern und bringt fundiertes historisches Wissen mit.
                        </p>
                    </div>
                </div>

                <div class="row flex-row-reverse team__box">
                    <!--Team Block right-->
                    <div class="col-sm-12 col-md-4 team__image">
                        <img class="w-100" src="images/staff03.jpg" alt="Team" title="Team" />
                    </div>

                    <div class="col-sm-12 col-md-4 team__text">
                        <p>
                            <span class="team__name">Thomas</span> ist zuständig für den Zuschnitt der Stoffe, die
                            Konstruktion unserer Marktzelte und
                            Stände sowie für das technische Drumherum.
                        </p>
                    </div>
                </div>

                <div class="row team__box">
                    <!--Team Block left-->
                    <div class="col-sm-12 col-md-4 team__image">
                        <img class="w-100" src="images/staff01.jpg" alt="Team" title="Team" />
                    </div>

                    <div class="col-sm-12 col-md-4 team__text">
                        <p>
                            <span class="team__name">Oliver</span> kümmert sich um alle wirtschaftlichen und
                            organisatorischen Belange, vom Kassazettel bis
                            hin zum Marktkalender.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="hre">
                <img src="images/hre.png" alt="" />
            </div>

            <!-- content container (slider + h2 + text) -->
            <div class="content">
                <div class="content__title--absolut">
                    <div class="content__title">
                        <div class="content__h2">
                            <h2>Die Herstellung</h2>
                        </div>
                    </div>
                </div>

                <div class="row flex-row-reverse content__row">
                    <div class="col-md-12 col-lg-7 content__slider">
                        <div id="carouselExample02" class="carousel slide content__carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="w-100" src="images/Faden.jpg" alt="Faden" />
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="images/Detail-Haube.jpg" alt="Detail Haube" />
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample02"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample02"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-5">
                        <div class="content__text">
                            <p>
                                Unsere Bekleidung entsteht aus hochwertigen Naturstoffen wie Leinen, Wolle und
                                Walkstoffen. Die Stoffe stammen aus Europa und werden unter Berücksichtigung
                                historischer Aufbereitungsverfahren verarbeitet. Wir legen großen Wert auf ansprechende,
                                historisch getreue Farben, um den Wünschen unserer Kunden gerecht zu werden. Durch die
                                Handfertigung sichtbarer Nähte gewährleisten wir nicht nur Authentizität, sondern
                                verleihen unseren Produkten auch eine besondere optische Wertigkeit.
                            </p>
                        </div>

                        <a href="products.php"><button class="main-btn">Unsere Produkte entdecken</button></a>
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