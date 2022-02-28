<?php

include("../../model/database/connectDB.php");

$connection = connectDB();

function getUserList()
{
    $rows = '';
    $connection = connectDB();
    $getUserListString = "SELECT * FROM users;";
    $users = $connection->query($getUserListString);
    if (mysqli_num_rows($users) > 0) {
        $rows = mysqli_fetch_assoc($users);
    }
    return $rows;
}
