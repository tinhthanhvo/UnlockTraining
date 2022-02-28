<?php

$myFavoriteImageInput = (isset($_POST['myFavoriteImage'])) ? $_POST['myFavoriteImage'] : '';
$myFavoriteImageCookie = (isset($_COOKIE['myFavoriteImage'])) ? $_COOKIE['myFavoriteImage'] : '';

if ($myFavoriteImageInput != '') {
    setrawcookie('myFavoriteImage', $myFavoriteImageInput, time() + 3600, '/');
}

$myFavoriteImageCookie = (isset($_COOKIE['myFavoriteImage'])) ? $_COOKIE['myFavoriteImage'] : '';
header("Location: /?pageName=cookie");
