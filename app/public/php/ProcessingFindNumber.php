<?php

$formInput = $_POST['arr_num'];
$inputFormat = str_replace(",", " ", $formInput);
$inputFormat = explode(" ", $inputFormat);

include('function/FindNumberFunction.php');

$numberStringArray = delNotNumChar($inputFormat);
$numberArray = array_map("convertStrToInt", $numberStringArray);
if (count($numberArray) != 0) {
    $negativeNumberArray = findNegativeNumber($numberArray);
    $positiveNumberArray = findPositiveNumber($numberArray);
    $maximumNumber = findingMaximumNumber($negativeNumberArray, $positiveNumberArray);
    $minimumNumber = findingMinimumNumber($negativeNumberArray, $positiveNumberArray);
    echo "The number input list: ";
    printArray($numberArray);
    echo "The negative number list: ";
    printArray($negativeNumberArray);
    echo "The positive number list: ";
    printArray($positiveNumberArray);
    echo "<br>The max number is: " . $maximumNumber;
    echo "<br>The min number is: " . $minimumNumber;
} else {
    echo "<h3 style='color: red'>The array input is null or noi number array.</h3>";
}
echo "<div><h2><a href='../index.php' class='tn btn-warning'>Back to home page</a></h2></div>";
