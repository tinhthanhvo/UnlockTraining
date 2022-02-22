<?php

$myAnimalInput = (isset($_POST['myAnimal'])) ? $_POST['myAnimal'] : '';
$myAnimalCookie = (isset($_COOKIE['myAnimal'])) ? $_COOKIE['myAnimal'] : '';

include('function/CookieFunction.php');

if ($myAnimalInput != '') {
    if (($myAnimalCookie !=  $myAnimalInput) || $myAnimalCookie == '') {
        setrawcookie('myAnimal', $myAnimalInput, time() + 3600, '/');
    }
}
