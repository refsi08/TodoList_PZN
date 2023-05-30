<?php

/**
 * Tampilan Halaman Tambah TodoList
 */

require_once "Helper/InputData.php";
require_once "Model/Todolist.php";
require_once "BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah TODO" . PHP_EOL;

    // masukkan function input data
    $inputTodo = inputData("Masukkan Todo (x untuk batal)");

    if ($inputTodo == "x") {
        echo "Batal Menambahkan todo" . PHP_EOL;
    } else {
        addTodoList($inputTodo);
    }
}