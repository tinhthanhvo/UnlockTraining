<?php

function validateEmail($email): bool
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function isEqualPassAndRePass($password, $retypePassword): bool
{
    if ($password !== $retypePassword) {
        return false;
    }
    return true;
}
