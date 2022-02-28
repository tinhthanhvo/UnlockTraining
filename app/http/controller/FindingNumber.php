<?php

include ('../utils/FindingNumberFunction.php');

$formInput = $_POST['numberArray'];
$inputFormat = str_replace(",", " ", $formInput);
$inputFormat = explode(" ", $inputFormat);

$numberStringArray = array_filter($inputFormat, "is_numeric");
$numberArray = array_map("convertStrToInt", $numberStringArray);
$response = "<ul class='list-group list-group-flush'>";
if (count($numberArray) != 0) {
    $negativeNumberArray = array_filter($numberArray, "isNegativeNumber");
    $positiveNumberArray = array_filter($numberArray, "isPositiveNumber");
    if(count($positiveNumberArray) > 0){
        $maximumNumber = max($positiveNumberArray);
    }
    elseif (count($negativeNumberArray) > 0){
        $maximumNumber = max($negativeNumberArray);
    }
    else{
        $maximumNumber = "NONE";
    }

    if(count($negativeNumberArray) > 0){
        $minimumNumber = min($negativeNumberArray);
    }
    elseif (count($positiveNumberArray) > 0){
        $minimumNumber = min($positiveNumberArray);
    }
    else{
        $minimumNumber = "NONE";
    }

    $response = $response ."<li class='list-group-item'>The number input list: ".printArray($numberArray)."</li>";
    $response = $response ."<li class='list-group-item'>The negative number list: ".printArray($negativeNumberArray)."</li>";
    $response = $response ."<li class='list-group-item'>The positive number list: ".printArray($positiveNumberArray)."</li>";
    $response = $response ."<li class='list-group-item'>The maximum number is : ".$maximumNumber."</li>";
    $response = $response ."<li class='list-group-item'>The minimum number is : ".$minimumNumber."</li></ul>";
} else {
    $response = $response ."The array input is null or not number array";
}
echo $response;
