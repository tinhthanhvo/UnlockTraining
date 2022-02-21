<?php

function resetCookie($cookieName, $cookieValue, $timeOut): void
{
    setcookie($cookieName, $cookieValue, time() + $timeOut, '/');
}

function refreshPage(): void
{
    $url1 = $_SERVER['REQUEST_URI'];
    header("Refresh: 0; URL=$url1");
}
