<?php

/**
 * @param string $numberString
 * @return int
 */
function convertStrToInt(string $numberString): int
{
    return (int) $numberString;
}

/**
 * @param int $number
 * @return bool
 */
function isNegativeNumber(int $number = 0): bool
{
    return $number < 0;
}

/**
 * @param int $number
 * @return bool
 */
function isPositiveNumber(int $number = 0): bool
{
    return $number > 0;
}

/**
 * @param array<int> $array
 * @return string
 */
function printArray(array $array = []): string
{
    $resultString = '';
    if (count($array) == 0) {
        $resultString = $resultString . "None";
    } else {
        foreach ($array as $item) {
            $resultString = $resultString . $item . "&nbsp&nbsp";
        }
    }
    return $resultString;
}
