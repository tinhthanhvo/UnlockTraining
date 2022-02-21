<?php

$width = 0;
$height = 0;

if (isset($_POST['height']) && isset($_POST['width'])) {
    $width = $_POST['width'];
    $height = $_POST['height'];
    if ($width == 1 && $height == 1) {
        echo "*";
    } else {
        for ($j = 0; $j < $width; $j++) {
            echo "* ";
        }
        echo "<br>";

        for ($i = 1; $i < $height - 1; $i++) {
            echo "* ";
            for ($j = 1; $j < $width - 1; $j++) {
                echo "&nbsp&nbsp&nbsp";
            }
            echo "*<br>";
        }

        if ($height > 1) {
            for ($j = 0; $j < $width; $j++) {
                echo "* ";
            }
        }
    }
}
echo "<div><h2><a href='../index.php' class='tn btn-warning'>Back to home page</a></h2></div>";
