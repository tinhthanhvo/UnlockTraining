<?php

/**
 * @return mysqli|void
 */
function connectDB()
{

    $servername = "db";
    $username = "root";
    $dbname = "training_nfq";
    $password = "password";
    $connection = mysqli_connect($servername, $username, $password, $dbname, 3306);
    if (!$connection) {
        die('Could not connect');
    }
    return $connection;
}
