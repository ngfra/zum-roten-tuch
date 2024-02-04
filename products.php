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
                <h1 class="siteheader__h1">Unsere Produkte</h1>
                <div class="siteheader__text">
                    <p>
                        Wir stehen für authentische, praktische Bekleidung, die mit qualitativ hochwertigen Materialien
                        und erstklassiger Verarbeitung von uns gefertigt wird. Unsere Produkte gliedern sich in zwei
                        bedeutende Kategorien – Gewandung und Schmuck.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- content container (Produkt 1) -->
            <div class="content product__container">
                <div>
                    <div class="content__title--absolut">
                        <div class="content__title">
                            <div class="content__h2">
                                <h2>Gewandung</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row flex-row-reverse content__row">
                        <div class="col-md-12 col-lg-7 content__slider">
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

                        <div class="col-md-12 col-lg-5">
                            <div class="content__text">
                                <p>
                                    Entdecken Sie unsere einzigartige Gewandung, die Eleganz und Authentizität vereint.
                                    Jedes Stück erzählt eine Geschichte, geprägt von Handwerkskunst und Liebe zum
                                    Detail.
                                    <br>
                                    In dieser Kategorie präsentieren wir exklusive Auswahl für Herren, Damen und Kinder.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <!--content-->

            <div class="hre">
                <img src="images/hre.png" alt="" />
            </div>

            <!-- content container (Produkt 2) -->
            <div class="content product__container">
                <div>
                    <div class="content__title--absolut">
                        <div class="content__title">
                            <div class="content__h2">
                                <h2>Schmuck</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row flex-row-reverse content__row">
                        <div class="col-md-12 col-lg-7 content__slider">
                            <div id="carouselExample02" class="carousel slide content__carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="w-100" src="images/sm01.jpeg" alt="Damen Kleid" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/sm02.jpeg" alt="Herren Set" />
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="images/sm03.jpeg" alt="Damen Kleid" />
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
                                    Entdecken Sie unsere faszinierende Schmuckkollektion, in der Eleganz auf
                                    Handwerkskunst
                                    trifft. Von zeitlosen Ringen über kunstvoll gestaltete Ketten bis hin zu
                                    bezaubernden
                                    Ohrringen und stilvollen Armreifen - jede Kategorie birgt einzigartige
                                    Schmuckstücke,
                                    die Ihre Persönlichkeit unterstreichen.
                                </p>
                            </div>
                            <a href="contact.php"><button class="main-btn">Kontaktieren uns!</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--main container-->
        </div>

    </main>

    <?php include('footer.php') ?>

</body>

</html>