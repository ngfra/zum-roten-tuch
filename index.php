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
    <div id="home-header">
        <?php include('nav.php') ?>

        <header class="header">
            <div class="header__container">
                <div id="page" class="container">
                    < <div class="row">
                        <div class="col-md-6">
                            <div class="header__container--box">
                                <h1>Die individeuelle Schneiderei</h1>
                                <p>
                                    Wir sind Zum roten Tuch – eine Schneiderei,
                                    die auf
                                    das
                                    Herstellen und Verkaufen mittelalterlicher
                                    Gewandung spezialisiert ist. Neben unseren Kollektionen bieten wir auch individuelle
                                    Maßschneiderei an. Wir stehen für authentische, praktische Bekleidung, die mit
                                    qualitativ hochwertigen Materialien und erstklassiger Verarbeitung von uns gefertigt
                                    wird.
                                </p>
                                <a href="calendar.php"><button class="main-btn">Besuchen uns am Markt</button></a>
                            </div>
                        </div>
                        <!--col-->
                </div>
                <!--row-->
            </div>
    </div>
    <!--header__container-->
    </header>
    </div>

    <main>
        <div class="container">
            <div class="hre">
                <img src="images/hre.png" alt="" />
            </div>

            <!-- content container (slider + h2 + text) -->
            <div class="content">
                <div>
                    <div class="content__title--absolut">
                        <div class="content__title">
                            <div class="content__h2">
                                <h2>Beliebte Produkte</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row flex-row-reverse content__row">
                        <div class="col-md-12 col-lg-8 content__slider">
                            <div id="carouselExample" class="carousel slide content__carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="w-100" src="images/cl01.jpeg" alt="Damen Kleid" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/cl02.jpeg" alt="Herren Set" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/cl03.jpeg" alt="Damen Kleid" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/cl04.jpeg" alt="Damen Kleid" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/cl05.jpeg" alt="Kinder Kleid" />
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4">
                            <div class="content__text">
                                <p>
                                    Willkommen in unserer exklusiven Auswahl der 'Beliebten Produkte', einer sorgfältig
                                    kuratierten Kollektion, die von unseren Kunden geliebt und geschätzt wird. Tauchen
                                    Sie
                                    ein und entdecken Sie die Favoriten, die für ihre Qualität, Einzigartigkeit und
                                    Beliebtheit aus der Masse hervorstechen.
                                </p>
                            </div>

                            <a href="products.php"><button class="main-btn">Mehr erfahren</button></a>
                        </div>
                    </div>
                </div>

            </div>
            <!--content-->
        </div>
        <!--container-->
    </main>

    <?php include('footer.php') ?>
</body>

</html>