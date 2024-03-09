<?php
session_start();
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show password</title>
</head>

<body>
    <h1>The new password is:</h1>
    <h2>
        <?= $password ?>
    </h2>
</body>

</html>