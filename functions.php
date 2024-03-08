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
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%?!';
    $password = '';
    $len = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, $len - 1)];
    }
    return $password;
}
