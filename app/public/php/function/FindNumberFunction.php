<?php

/**
 * @param array<string> $numberStringArray
 * @return array<string>
 */
function delNotNumChar(array $numberStringArray): array
{
    foreach ($numberStringArray as $index => $number) {
        if (!is_numeric($number)) {
            unset($numberStringArray[$index]);
        }
    }
    return $numberStringArray;
}

/**
 * @param string $numberString
 * @return int
 */
function convertStrToInt(string $numberString): int
{
    return (int) $numberString;
}

/**
 * @param array<string> $numberArray
 * @return array<int>
 */
function findNegativeNumber(array $numberArray = []): array
{
    $negativeNumberArray = [];
    /** @var int $number */
    foreach ($numberArray as $number) {
        if ($number < 0) {
            $negativeNumberArray[] = $number;
        }
    }
    return $negativeNumberArray;
}

/**
 * @param array<string> $numberArray
 * @return array<int>
 */
function findPositiveNumber(array $numberArray = []): array
{
    $positiveNumberArray = [];
    /** @var int $number */
    foreach ($numberArray as $number) {
        if ($number > 0) {
            $positiveNumberArray[] = $number;
        }
    }
    return $positiveNumberArray;
}

/**
 * @param array<int> $negativeNumberArray
 * @param array<int> $positiveNumberArray
 * @return int
 */
function findingMaximumNumber(array $negativeNumberArray = [], array $positiveNumberArray = []): int
{
    if (count($positiveNumberArray) == 0) {
        return max($negativeNumberArray);
    }
    return max($positiveNumberArray);
}

/**
 * @param array<int> $negativeNumberArray
 * @param array<int> $positiveNumberArray
 * @return int
 */
function findingMinimumNumber(array $negativeNumberArray = [], array $positiveNumberArray = []): int
{
    if (count($negativeNumberArray) == 0) {
        return min($positiveNumberArray);
    }
    return min($negativeNumberArray);
}

/**
 * @param array<int> $array
 * @return string
 */
function printArray(array $array = []): string
{
    $resultString = '';
    if (count($array) == 0) {
        $resultString = $resultString ."None";
    } else {
        foreach ($array as $item) {
            $resultString = $resultString .$item . "&nbsp&nbsp";
        }
    }
    return $resultString ."<br>";
}
