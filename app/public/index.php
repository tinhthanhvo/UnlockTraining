<?php
if (isset($_POST['animal'])) {
    $_COOKIE['animal'] = $_POST['animal'];
    setcookie("animal", $_POST['animal'], time() + 5, '/');
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <style>
    </style>
    <title>Exercise PHP</title>
</head>
<body>

<div>
    <?php
    $array_number = '';
    if (empty($_POST["array_number"])) {
        $array_numberErr = "Input is empty.";
    } else {
        $array_number = $_POST["array_number"];
    }

    /**
     * @param array<int> $array
     * @return void
     */
    function printArray(array $array = []): void
    {
        if (is_array($array)) {
            foreach ($array as $value) {
                echo($value . " ");
            }
        }
    }
    ?>
</div>
<div>
    <h2>Please input array number (different by ",")</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="array_number">Input Array Number</label>
        <input type="text" id="array_number" name="array_number"
               value="<?php if (is_array($array_number)) {
                    printArray($array_number) ;
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
    $format_input = str_replace(",", " ", $array_number);
    $array_numbers = explode(" ", $format_input);
    if (is_array($array_numbers)) {
        echo("The list input number is format: ");
        foreach ($array_numbers as $number) {
            echo($number . " ");
        }
        echo('<br>');
    }

    /**
     * @param array<string> $array_numbers
     * @return array<int>
     */
    function find_negative_number(array $array_numbers = []): array
    {
        $array_negative_numbers = [];
        /** @var int $number */
        foreach ($array_numbers as $number) {
            if ($number < 0) {
                $array_negative_numbers[] = $number;
            }
        }
        return $array_negative_numbers;
    }

    /**
     * @param array<string> $array_numbers
     * @return array<int>
     */
    function find_positive_number(array $array_numbers = []): array
    {
        $array_positive_numbers = [];
        /** @var int $number */
        foreach ($array_numbers as $number) {
            if (!($number < 0)) {
                $array_positive_numbers[] = $number;
            }
        }
        return $array_positive_numbers;
    }

    $array_negative_numbers = find_negative_number($array_numbers);
    $array_positive_numbers = find_positive_number($array_numbers);

    if (count($array_positive_numbers) > 0) {
        echo("The greatest number is: " . max($array_positive_numbers) . '<br>');
    }

    if (count($array_negative_numbers) > 0) {
        echo("The smallest number is: " . min($array_negative_numbers) . '<br>');
    }

    if (count($array_negative_numbers) > 0) {
        echo("The list negative number is: ");
        printArray($array_negative_numbers);
        echo('<br>');
    }

    if (count($array_positive_numbers) > 0) {
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
        <a href="./cookie_exercise.php"><?php isset($_COOKIE['animal']) ? print "Change option" : print "Chose the animal, you love."?></a>
    </h2>
    <h2>
        <a href="./drawing_rectangle_star.php">Exercise 3</a>
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
