<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Error <?= $_GET['code']; ?></title>
</head>

<body>

    <h1>ERROR HELP MEEEE<?= $_GET['code']; ?></h1>
    <p>
        HTTP 400 - Bad Request<br>
        Error 401 - Unauthorized<br>
        Error 404 - Not found<br>
        Error 405 - Method Not Allowed<br>
        HTTP 408 - Timeout Error<br>
        Error 502 - Bad Gateway<br>
        HTTP 504 - Gateway Timeout
    </p>

</body>

</html>