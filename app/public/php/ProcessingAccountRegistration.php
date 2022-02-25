<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypePassword = $_POST['retypePassword'];

    include ("./inputValidation.php");
    include ("../database/connectDB.php");

    $connection = connectDB();

    if(validateEmail($email) && isEqualPassAndRePass($password, $retypePassword));
    if(!isEqualPassAndRePass($password, $retypePassword)){
        echo "Password is not match.";
    }

    if(!validateEmail($email)){
        echo "Email is not correct formation.";
    }

    $encodedPassword = md5($password);

    $addUserString = "INSERT INTO users(fullName, username, email, password) VALUES ('".$fullName."', '".$username."','".$email."','".$encodedPassword."');";

    $user = $connection->query($addUserString);

    if($user) {
        $_SESSION['successRegister'] = "Register account successful!";
        $_SESSION['login'] = true;
        header("Location: /index.php");
    }
}





