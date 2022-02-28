<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encodedPassword = md5($password);
    include("./inputValidation.php");
    include("../../model/database/connectDB.php");
    $connection = connectDB();
    $getUserString = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $encodedPassword . "';";
    $user = $connection->query($getUserString);
    if (mysqli_num_rows($user) > 0) {
        $row = mysqli_fetch_assoc($user);
        $_SESSION['successLogin'] = "Login account successful!";
        $_SESSION['login'] = true;
        header("Location: /index.php");
    }
}
