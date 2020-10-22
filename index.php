<?php

function isFirstLetterToUpperCase ($str){
    $regexp = '/^[A-Z]/';
    if(preg_match($regexp,$str)){
        echo ("String's first character is uppercase");
    } else {
        echo ("String's first character is not uppercase");
    }
}

isFirstLetterToUpperCase('Fuckoff');
isFirstLetterToUpperCase('fckoff');

