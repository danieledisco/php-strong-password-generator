<?php
session_start();
/**
 * Logica da implementare:
 * 0 - Definiamo lunghezza della password
 * 1 - Creiamo una stringa contenente tutte le lettere maiuscole e minuscole i numeri ed i simboli che vogliamo considerare.
 * 2 - Effettuiamo un loop sulla lunghezza e generiamo un numero casuale tra 0 e la lunghezza della stringa creata prima
 * 3 - accodiamo alla password il carattere selezioato
 * 
 * NB cercando è emerso che per una migliore generazione di numeri casuali interi invece di rand() è consigliato usare 
 * random_in()
 */



/* 
Verifiche
echo strlen($characters);
echo $characters[0];
echo $characters[1];
echo $characters[2];
echo $characters[3];
echo '<br>';

$password .=  $characters[2];
$password .=  $characters[45];
$password .=  $characters[69];

echo $password; */

include __DIR__ . '/functions.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="get">
            <div class="container_length">
                <label for="lengthpw">Password Length</label><input type="number" name="lengthpw" min="1" id="lengthpw" placeholder="Length of password?">

            </div>

            <div class="container_type">
                <h3>Tipo di caratteri</h3>
                <div class="checkBoxs">
                    <label for="letters">Lettere</label><input type="checkbox" name="letters" id="letters">
                    <br>
                    <label for="numbers">Numeri</label><input type="checkbox" name="numbers" id="numbers">
                    <br>
                    <label for="symbols">Simboli</label><input type="checkbox" name="symbols" id="simbols">
                </div>
            </div>




            <button type="submit">Send</button>
        </form>
    </div>
    <div class="div">
        <?php if ($_GET['lengthpw'] > 0) : ?>

            <?php $password = generatePassword($_GET['lengthpw']);
            // clear old session
            session_unset();

            $_SESSION['password'] = $password;
            // redirect the user to a success page
            header('Location: ./show_password.php');
            ?>
        <?php endif ?>
    </div>
</body>

</html>