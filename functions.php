<?php

/**
 * Function that generate a strong password
 * @param Number $length
 * @return String $password
 * 
 * V. 1 20240308
 */
function generatePassword($length)
{
    /*    if (isset($_GET['letters'])) {
        echo 'letters';
        echo '<br>';
    }

    if (isset($_GET['numbers'])) {
        echo "numbers";
        echo '<br>';
    }

    if (isset($_GET['symbols'])) {
        echo "symbols";
        echo '<br>';
    } */

    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '@#$%?!_.';

    /* Costruzione dell'insieme dei caratteri sulla base degli input */
    /* Bisogna gestire il caso in cui non sia stato selezionato neanche un campo */
    $characters = '';
    if (isset($_GET['letters'])) {
        $characters .= $letters;
    }
    if (isset($_GET['numbers'])) {
        $characters .= $numbers;
    }
    if (isset($_GET['symbols'])) {
        $characters .= $symbols;
    }



    $password = '';
    $len = strlen($characters);
    if ($len == 0) {
        $password = -1;
        return $password;
    }

    for ($i = 0; $i < $length; $i++) {
        $c = $characters[random_int(0, $len - 1)];
        if ($_GET['repYesNo'] === 'repNo') {
            while (stristr($password, $c)) {
                $c = $characters[random_int(0, $len - 1)];
            }
        }
        $password .= $c;
    }
    return $password;
}
