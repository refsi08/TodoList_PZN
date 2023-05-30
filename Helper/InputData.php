<?php
/**
 * Membuat fungsi input data
 */
function inputData(string $info): string
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}
