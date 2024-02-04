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
                <h1 class="siteheader__h1">Kontaktieren uns!</h1>
                <div class="siteheader__text">
                    <p>
                        Haben Sie Fragen oder Ideen, die Sie gerne mit uns teilen möchten? Wir freuen uns auf Ihre
                        Kontaktaufnahme!
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container contactContainer">
            <div class="row flex-row-reverse">
                <div class="col-md-6 col-sm-12 contactDetails">
                    <address>
                        <span class="address--title">Zum roten Tuch </span><br />
                        <span>Telefon: <a href="tel:0660 2503740">0660 2503740</a></span> <br />
                        <span>Email: <a href="mailto:office@zum-roten-tuch.at">office@zum-roten-tuch.at</a></span><br />
                        <span>Adresse: Saglstraße 35, 6410 Telfs, Austria </span>

                    </address>

                    <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2705.0779560711753!2d11.076291112146142!3d47.312815571044005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479d656f969f61fb%3A0x7f54786b71384687!2sZum%20roten%20Tuch!5e0!3m2!1sde!2sat!4v1706006117037!5m2!1sde!2sat"
                            width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 form">
                    <p class="ps-2">Wir freuen uns, Ihre Nachricht zu bekommen!</p>

                    <form action="/mail.php" method="post">
                        <label for="fname"></label>
                        <input required type="text" id="fname" name="fname" placeholder="Vorname"><br>
                        <label for="lname"></label>
                        <input required type="text" id="lname" name="lname" placeholder="Nachname"><br>
                        <label for="lname"></label>
                        <input required type="text" id="lname" name="lname" placeholder="Email"><br>
                        <textarea required name="" id="" cols="30" rows="10" placeholder="Deine Nachricht"></textarea>
                        <br>
                        <input type="submit" value="SENDEN">
                    </form>
                    </form>
                </div>
            </div>

        </div>

    </main>

    <?php include('footer.php') ?>

</body>

</html>