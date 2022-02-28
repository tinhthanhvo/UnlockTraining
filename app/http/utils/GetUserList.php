<?php

include("../model/database/connectDB.php");

function getUserList()
{
    $rows = '';
    $connection = connectDB();
    $getUserListString = "SELECT * FROM users;";
    $users = $connection->query($getUserListString);
    if (mysqli_num_rows($users) > 0) {
        return $users;
    }
    return $rows;
}
