<?php
/**
 * Membuat fungsi input data
 */
function inputData(string $info): string // return value string
{
    echo "$info : ";
    $result = fgets(STDIN); // fungsi menginputkan value di php
    return trim($result);
}
