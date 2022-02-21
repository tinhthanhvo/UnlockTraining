<?php

$number_array_input = $_POST['arr_num'];
$formated_input = str_replace(",", " ", $number_array_input);
$formated_input = explode(" ", $formated_input);
/**
 * @param array<string> $number_string_array
 * @return array<string>
 */
function delNotNumChar(array $number_string_array): array
{
    foreach ($number_string_array as $index => $number) {
        if (!is_numeric($number)) {
            unset($number_string_array[$index]);
        }
    }
    return $number_string_array;
}

/**
 * @param string $number_string
 * @return int
 */
function convertStrToInt(string $number_string): int
{
    return (int) $number_string;
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
    $positive_number_array = [];
    /** @var int $number */
    foreach ($array_numbers as $number) {
        if ($number > 0) {
            $positive_number_array[] = $number;
        }
    }
    return $positive_number_array;
}

/**
 * @param array<int> $negative_number_array
 * @param array<int> $positive_number_array
 * @return int
 */
function find_max_number(array $negative_number_array = [], array $positive_number_array = []): int
{
    if (count($positive_number_array) == 0) {
        return max($negative_number_array);
    }
    return max($positive_number_array);
}

/**
 * @param array<int> $negative_number_array
 * @param array<int> $positive_number_array
 * @return int
 */
function find_min_number(array $negative_number_array = [], array $positive_number_array = []): int
{
    if (count($negative_number_array) == 0) {
        return min($positive_number_array);
    }
    return min($negative_number_array);
}

/**
 * @param array<int> $array
 * @return void
 */
function printArray(array $array = []): void
{
    if (count($array) == 0) {
        echo "None";
    } else {
        foreach ($array as $item) {
            echo $item . " ";
        }
    }
    echo "<br>";
}

$number_string_array = delNotNumChar($formated_input);
$number_array = array_map("convertStrToInt", $number_string_array);
if (count($number_array) != 0) {
    $negative_number_array = find_negative_number($number_array);
    $positive_number_array = find_positive_number($number_array);
    $max_number = find_max_number($negative_number_array, $positive_number_array);
    $min_number = find_min_number($negative_number_array, $positive_number_array);
    echo "The number input list: ";
    printArray($number_array);
    echo "The negative number list: ";
    printArray($negative_number_array);
    echo "The positive number list: ";
    printArray($positive_number_array);
    echo "<br>The max number is: " . $max_number;
    echo "<br>The min number is: " . $min_number;
} else {
    echo "<h3 style='color: red'>The array input is null or noi number array.</h3>";
}
