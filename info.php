<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <h1>Info</h1>
    <p>
        Paragrafo: <?php echo $_GET['paragrafo'] ?>
    </p>
    <div>
        Lunghezza del paragrafo: <?php echo strlen($_GET['paragrafo'])  ?>
    </div>
    <p>
    Parola da censurare: <?php echo $_GET['badword'] ?>
    </p>
    <hr>
    <p>
        Paragrafo censurato: <?php echo str_replace($_GET['badword'], '***', $_GET['paragrafo'])  ?>
    </p>
    <div>
        Lunghezza del paragrafo censurato: <?php echo strlen(str_replace($_GET['badword'], '***', $_GET['paragrafo']))  ?>
    </div>
    <div>
        <a href="./index.php"> < Index</a>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime animi eveniet ipsum et ratione sequi?
        </p>
    </div>
</body>
</html>