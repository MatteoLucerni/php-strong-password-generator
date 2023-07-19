<?php

function getRandomString($max)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    for ($i = 0; $i < $max; $i++) {
        $random_index = rand(0, strlen($characters) - 1);
        $random_string .= $characters[$random_index];
    }

    return $random_string;
};
