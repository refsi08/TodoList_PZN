<?php

/**
 * Tampilan Halaman Show Todolist
 */

require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Model/Todolist.php";
require_once "Helper/InputData.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";


function viewShowTodoList()
{

    while (true) {
        showTodoList();

        echo " Menu :" . PHP_EOL;
        echo " 1. Input" . PHP_EOL;
        echo " 2. Hapus" . PHP_EOL;
        echo " 3. Exit" . PHP_EOL;

        $pilihan = inputData("Pilihan");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "3") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa Lagi" . PHP_EOL;
}


