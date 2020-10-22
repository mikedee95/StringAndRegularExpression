<?php


function valid_email($str)
{
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if (!valid_email("mikedee1295@gmail")) {
    echo "Invalid email address.";
} else {
    echo "Valid email address.";
}

