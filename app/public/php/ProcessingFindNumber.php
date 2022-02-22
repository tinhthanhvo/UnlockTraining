<?php

$formInput = $_POST['arr_num'];
$inputFormat = str_replace(",", " ", $formInput);
$inputFormat = explode(" ", $inputFormat);

include('function/FindNumberFunction.php');

$numberStringArray = delNotNumChar($inputFormat);
$numberArray = array_map("convertStrToInt", $numberStringArray);
$response = '';
if (count($numberArray) != 0) {
    $negativeNumberArray = findNegativeNumber($numberArray);
    $positiveNumberArray = findPositiveNumber($numberArray);
    $maximumNumber = findingMaximumNumber($negativeNumberArray, $positiveNumberArray);
    $minimumNumber = findingMinimumNumber($negativeNumberArray, $positiveNumberArray);
    $response = $response ."The number input list: ";
    $response = $response .printArray($numberArray);
    $response = $response ."The negative number list: ";
    $response = $response .printArray($negativeNumberArray);
    $response = $response ."The positive number list: ";
    $response = $response .printArray($positiveNumberArray);
    $response = $response ."<br>The max number is: " . $maximumNumber;
    $response = $response ."<br>The min number is: " . $minimumNumber;
} else {
    $response = $response ."The array input is null or not number array";
}
echo $response;
