<?php

$width = 0;
$height = 0;

if (isset($_POST['height']) && isset($_POST['width'])) {
    $width = $_POST['width'];
    $height = $_POST['height'];
    $shape = '';
    if ($width == 1 && $height == 1) {
        $shape = $shape ."*";
    } else {
        for ($j = 0; $j < $width; $j++) {
            $shape = $shape ."* ";
        }
        $shape = $shape ."<br>";

        for ($i = 1; $i < $height - 1; $i++) {
            $shape = $shape ."* ";
            for ($j = 1; $j < $width - 1; $j++) {
                $shape = $shape ."&nbsp&nbsp";
            }
            $shape = $shape ."*<br>";
        }

        if ($height > 1) {
            for ($j = 0; $j < $width; $j++) {
                $shape = $shape ."* ";
            }
        }
    }
    echo $shape;
}
