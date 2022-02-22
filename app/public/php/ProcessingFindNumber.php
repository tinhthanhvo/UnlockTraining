<?php

$formInput = $_POST['arr_num'];
$inputFormat = str_replace(",", " ", $formInput);
$inputFormat = explode(" ", $inputFormat);

include('function/FindNumberFunction.php');

$numberStringArray = delNotNumChar($inputFormat);
$numberArray = array_map("convertStrToInt", $numberStringArray);
$response = "<ul class='list-group list-group-flush'>";
if (count($numberArray) != 0) {
    $negativeNumberArray = findNegativeNumber($numberArray);
    $positiveNumberArray = findPositiveNumber($numberArray);
    $maximumNumber = findingMaximumNumber($negativeNumberArray, $positiveNumberArray);
    $minimumNumber = findingMinimumNumber($negativeNumberArray, $positiveNumberArray);
    $response = $response . "<li class='list-group-item'>The number input list: " . printArray($numberArray) . "</li>";
    $response = $response . "<li class='list-group-item'>The negative number list: " . printArray($negativeNumberArray) . "</li>";
    $response = $response . "<li class='list-group-item'>The positive number list: " . printArray($positiveNumberArray) . "</li>";
    $response = $response . "<li class='list-group-item'>The maximum number is : " . $maximumNumber . "</li>";
    $response = $response . "<li class='list-group-item'>The minimum number is : " . $minimumNumber . "</li></ul>";
} else {
    $response = $response . "The array input is null or not number array";
}
echo $response;
