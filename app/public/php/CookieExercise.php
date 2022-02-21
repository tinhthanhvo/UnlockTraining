<?php

$myAnimalInput = '';
if (isset($_POST['myAnimal'])) {
    $myAnimalInput = $_POST['myAnimal'];
}

include('function/CookieFunction.php');

if (!isset($_COOKIE['my_animal'])) {
    resetCookie("my_animal", $myAnimalInput, 3600);
    refreshPage();
}
if (!empty($myAnimalInput) && $_COOKIE['my_animal'] != $myAnimalInput) {
    resetCookie("my_animal", $myAnimalInput, 3600);
    refreshPage();
}

echo "<h2>The animal which you have at home</h2><br>";
if (isset($_COOKIE['my_animal'])) {
    echo "<p>" . $_COOKIE['my_animal'] . "</p>";
} else {
    echo "Set cookie is false.";
}
echo "<div><h2><a href='../index.php' class='tn btn-warning'>Back to home page</a></h2></div>";
