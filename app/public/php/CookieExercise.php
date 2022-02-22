<?php

$myAnimalResponse = '';
$myAnimalInput = '';
if (isset($_POST['myAnimal'])) {
    $myAnimalInput = $_POST['myAnimal'];
}

include('function/CookieFunction.php');

if (!isset($_COOKIE['myAnimal'])) {
    resetCookie("myAnimal", $myAnimalInput, 3600);
    refreshPage();
}
if (($myAnimalInput != '') && $_COOKIE['myAnimal'] != $myAnimalInput) {
    resetCookie("myAnimal", $myAnimalInput, 3600);
    refreshPage();
}

$myAnimalResponse = $myAnimalResponse . "<h6>The animal which you have at home</h6><br>";
if (isset($_COOKIE['myAnimal'])) {
    $myAnimalResponse = $myAnimalResponse ."<p>" . $_COOKIE['myAnimal'] . "</p>";
} else {
    $myAnimalResponse = $myAnimalResponse . "Set cookie is false.";
}
echo $myAnimalResponse;
