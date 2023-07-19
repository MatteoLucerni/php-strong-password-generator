<?php

function getRandomString($max)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    while (strlen($random_string) < $max) {
        $random_index = rand(0, strlen($characters) - 1);

        if (str_contains($random_string, $characters[$random_index])) {
            $random_index = rand(0, strlen($characters) - 1);
        } else {
            $random_string .= $characters[$random_index];
        }
    }

    return $random_string;
};
