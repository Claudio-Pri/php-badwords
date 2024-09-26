
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
    <title>hello php</title>
</head>
<body>
    <h1>Hello php</h1>
    <span>Il mio nome è</span>
    <span><?php echo $nome; ?></span>
    <span><?php echo $cognome; ?></span>
    <div>
        <a href="./info.php">Info</a>
    </div>
</body>
</html>