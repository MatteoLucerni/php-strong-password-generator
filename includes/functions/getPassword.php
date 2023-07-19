<?php

function getCharacters($hasLetters, $hasCapitalLetters, $hasNumbers, $hasSpecialChars)
{
    $characters = '';

    if ($hasLetters) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    };

    if ($hasCapitalLetters) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    };

    if ($hasNumbers) {
        $characters .= '0123456789';
    };

    if ($hasSpecialChars) {
        $characters .= '!@#$%^&*()_+-={}[]|:;<>,.?/';
    };

    return $characters;
};

function getPassword($characters, $max, $noRepeat)
{
    $random_string = '';
    while (mb_strlen($random_string) < $max) {
        $random_index = rand(0, strlen($characters) - 1);

        if (str_contains($random_string, $characters[$random_index]) && $noRepeat) {
            $random_index = rand(0, strlen($characters) - 1);
        } else {
            $random_string .= $characters[$random_index];
        }
    }

    return $random_string;
};
