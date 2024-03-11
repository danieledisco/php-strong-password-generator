<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <?php if (isset($_SESSION['error'])) : ?>
            <h1>Errore</h1>
            <h2><?php echo $_SESSION['error']; ?></h2>
        <?php endif ?>

        <?php if (isset($_SESSION['password'])) : ?>
            <h1>La nuova password è:</h1>
            <h2><?php echo $_SESSION['password']; ?></h2>
        <?php endif ?>
    </div>

</body>

</html>