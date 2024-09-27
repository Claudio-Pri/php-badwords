
<?php 
    $nome = 'Brodo';
    $cognome = 'Jenkins';
    $eta = 111;
    $onAdventure = true;
    $miPiacciono = ['anelli' , 'formaggio', 'stregoni', 'nani', 'elfi'];
    $personaggio = [
        'nome' => $nome,
        'cognome' => $cognome,
        'eta' => $eta,
        'onAdventure' => $onAdventure,

    ]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <h1>php badwords</h1>
    <span>Il mio nome è</span>
    <span><?php echo $nome; ?></span>
    <span><?php echo $cognome; ?></span>
    <hr>
    <div>
        <form action="./info.php" method="GET">
            <div>
                <label for="paragrafo">Paragrafo</label>
                <textarea name="paragrafo" id="paragrafo"></textarea>
            </div>
            <div>
                <label for="badword">Parola da censurare</label>
                <input type="text" name="badword" id="badword" placeholder="inserisci una parola...">
            </div>
            <button type="submit">
                invia
            </button>
        </form>
    </div>
    <hr>
        <!-- <div>
            <form action="./info.php" method="GET">
                <div>
                    <input type="text" name="first_name" value ="<?php echo $nome ?>" placeholder="inserisci il tuo nome...">
                </div>
                <div>
                    <input type="text" name="last_name" value ="<?php echo $cognome ?>" placeholder="inserisci il tuo cognome...">
                </div>
                <button type="submit">
                    invia
                </button>
            </form>
        </div> -->
    <div>
        <a href="./info.php">Info</a>
    </div>
</body>
</html>