<?php

$email = "christiaea@uia.no";

//kaller funksjon "validateemail" med filter_var for å validere e-posten

function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "E-post '$email' er gyldig.";
    } else {
        echo "E-post '$email' er ugyldig.";
    }
}

//validere $email med å kalle på funksjon

validateEmail($email);
?>