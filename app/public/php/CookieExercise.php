<?php

$myAnimalInput = (isset($_POST['myAnimal'])) ? $_POST['myAnimal'] : '';
$myAnimalCookie = (isset($_COOKIE['myAnimal'])) ? $_COOKIE['myAnimal'] : '';

if ($myAnimalInput != '') {
    if (($myAnimalCookie !=  $myAnimalInput)) {
        setrawcookie('myAnimal', $myAnimalInput, time() + 3600, '/');
    }
}
