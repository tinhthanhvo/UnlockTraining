<?php

if (!isset($_COOKIE['my_animal'])) {
    if (empty($_POST['my_animal'])) {
        setcookie("my_animal", '', time() + 3600, '/');
    } else {
        setcookie("my_animal", $_POST['my_animal'], time() + 3600, '/');
    }
} elseif (!empty($_POST['my_animal']) && $_COOKIE['my_animal'] != $_POST['my_animal']) {
    setcookie("my_animal", $_POST['my_animal'], time() + 3600, '/');
}
echo "<h2>The animal which you have at home</h2><br>";
if (isset($_COOKIE['my_animal'])) {
    echo "<p>" . $_COOKIE['my_animal'] . "</p>";
} else {
    echo "Set cookie is false.";
}
