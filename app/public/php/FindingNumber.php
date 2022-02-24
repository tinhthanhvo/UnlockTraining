<!DOCTYPE HTML>
<html lang="en">
<head>
    <style>
    </style>
    <title>Exercise PHP</title>
</head>
<body>
<?php
if (isset($_POST['animal'])) {
    $_COOKIE['animal'] = $_POST['animal'];
    setcookie("animal", $_POST['animal'], time() + 5, '/');
}
?>
    <div>
        <?php
            $array_number = '';
        if (empty($_POST["array_number"])) {
            $array_numberErr = "Name is required";
        } else {
            $array_number = $_POST["array_number"];
        }
        ?>
    </div>
    <div>
        <h2>Please input array number (different by ",")</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="array_number">Input Array Number</label>
            <input type="text" id="array_number" name="array_number"
                   value="<?php if (isset($array_number)) {
                        echo $array_number;
                          }?>" required
                   placeholder="Ex: 1,2,3...">
            <br>
            <label id="alert" style="color: red"></label>
            <br>
            <input type="submit" name="submit" value="Submit" onclick="return checkInputValidation()">
        </form>
    </div>
    <div>
        <?php
            $formated_input = str_replace(",", " ", $array_number);
            echo("The list input number is formated: " . $formated_input);
            $array_numbers = explode(" ", $formated_input);
        if (isset($array_numbers)) {
            echo("The list input number is formated: ");
            foreach ($array_numbers as $number) {
                echo($number . " ");
            }
            echo('<br>');
        }

        function find_negative_number($array_numbers)
        {
            foreach ($array_numbers as $number) {
                if ($number < 0) {
                    $array_negative_numbers[] = $number;
                }
            }
            if (isset($array_negative_numbers)) {
                return $array_negative_numbers;
            }
        }

        function find_positive_number($array_numbers)
        {
            foreach ($array_numbers as $number) {
                if (!($number < 0)) {
                    $array_positive_numbers[] = $number;
                }
            }
            if (isset($array_positive_numbers)) {
                return $array_positive_numbers;
            }
        }

            $array_negative_numbers = find_negative_number($array_numbers);
            $array_positive_numbers = find_positive_number($array_numbers);
            echo("The greatest number is: " . max($array_positive_numbers) . '<br>');
            echo("The smallest number is: " . min($array_numbers) . '<br>');
        if (isset($array_negative_numbers)) {
            echo("The list negative number is: ");
            foreach ($array_negative_numbers as $number) {
                echo($number . " ");
            }
            echo('<br>');
        }

        if (isset($array_positive_numbers)) {
            echo("The list positive number is: ");
            foreach ($array_positive_numbers as $number) {
                echo($number . " ");
            }
        }
        ?>
    </div>

    <div>
        <?php
        if (isset($_COOKIE['animal'])) {
            echo "<h2>* The animal which you love is  " . $_COOKIE['animal'] . "</h2>";
        }
        ?>
    </div>

    <div style="margin-top: 10px">
        <h2>
            <a href="cookie_exercise.php"><?php isset($_COOKIE['animal']) ? print "Change option" : print "Chose the animal, you love."?></a>
        </h2>
        <h2>
            <a href="drawing_rectangle_star.php">Exercise 3</a>
        </h2>
    </div>

    <script>
        function checkInputValidation() {
            let input_string = document.getElementById("array_number").value;
            let number_string = input_string.replace(/[, ]+/g,' ');
            let number_array = number_string.split(' ');
            let flag = true;
            for (let number of number_array) {
                if(isNaN(number)) {
                    flag = false;
                    let element = document.getElementById("alert");
                    element.innerHTML = 'Please enter input is string number!';
                }
            }
            return flag;
        }
        </script>
</body>
</html>

