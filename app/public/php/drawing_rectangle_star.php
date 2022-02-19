<?php
$array_number = '';
if (isset($_POST["width"]) && isset($_POST["height"])) {
    $width = $_POST['width'];
    $height = $_POST['height'];
}
else{
    $width = 0;
    $height = 0;
}

if(isset($_POST['height']) && isset($_POST['width'])){
    if($width == 1 && $height == 1) echo "*";
    else{
        $width = $_POST['width'];
        $height = $_POST['height'];

        for($j=0; $j<$width; $j++){
            echo "* ";
        }
        echo "<br>";

        for($i=1; $i<$height-1; $i++){
            echo "* ";
            for($j=1; $j<$width-1; $j++){
                echo "&nbsp&nbsp&nbsp";
            }
            echo "*<br>";
        }

        if($height >1){
            for($j=0; $j<$width; $j++){
                echo "* ";
            }
        }
    }
}