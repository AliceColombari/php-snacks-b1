<?php

// Passare come parametri GET name, mail e age e verificare 
// (cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola 
// e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

// variabili con parametri da inserire nell'url
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

// strlen - ottieni lunghezza della stringa
// strpos - trova elemento passato all'interno di una stringa
// is_numeric - trova se una variabile è un numero o una stringa numerica

if ( strlen($name) >= 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age) == true ) {
    $result = "Accesso riuscito";
} else {
    $result = "Accesso negato";
}

// echo $result;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- GET - dati del form inviati come variabili URL -->
    <!-- aggiunge i dati del form all'URL in automatico con l'inserimento di essi nel form + invio -->

    <form method="GET">

        <div class="center">
            <label for="name">Scrivi il tuo nome:</label>
            <input type="text" name="name">
            <label for="email">Scrivi la tua email:</label>
            <input type="text" name="email">
            <label for="age">Scrivi la tua età:</label>
            <input type="text" name="age">
            
            <input class="btn" type="submit">
        </div>

    </form>

    <!-- stampo accesso, consentito o negato richiamando php e variabile risultato -->
    
    <h3>
        <?php echo $result; ?>
    </h3>

</body>
</html>