<?php

/**
 * Tampilan Halaman Remove TodoList
 */

require_once "Helper/InputData.php";
require_once "BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus ToDo" . PHP_EOL;

    $pilihan = inputData("Input nomor (x untuk batal)") . PHP_EOL;

    if ($pilihan == "x") {
        echo "Batal untuk menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Suksess menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
