<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drawing Rectangle Star</title>
</head>
<body>
    <div>
        <?php
            $array_number = '';
        if (isset($_POST["width"]) && isset($_POST["height"])) {
            $width = $_POST['width'];
            $height = $_POST['height'];
        } else {
            $width = 0;
            $height = 0;
        }
        ?>
    </div>

    <div>
        <h2>Please input width and height for the Rectangle Star</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="width">Input width: <span style="color: red"> *</span></label>
            <input type="number" id="width" name="width" required placeholder="Please typing integer, Ex: 1">
            <br><br>
            <label for="height">Input height: <span style="color: red"> *</span></label>
            <input type="number" id="height" name="height" required placeholder="Please typing integer, Ex: 1">
            <br><br>
            <input type="submit" name="submit" value="Draw" style="background-color: cyan">
        </form>
    </div>

    <div>
        <?php
        if (isset($_POST['height']) && isset($_POST['width'])) {
            if ($width == 1 && $height == 1) {
                echo "*";
            } else {
                $width = $_POST['width'];
                $height = $_POST['height'];

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
        ?>
    </div>
</body>
</html>
