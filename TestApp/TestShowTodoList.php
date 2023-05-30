<?php

/**
 * Tes aplikasi
 */

require_once "Model/Todolist.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "Helper/InputData.php";

// Menambahka Data
addTodoList("Belajar PHP");
addTodoList("Belajar Javascript");
addTodoList("Belajar Dart");
addTodoList("Belajar Piano");


// // input data
// $name = inputData("Nama");
// echo "$name";
// $name1 = inputData("Kelas");
// echo "$name1";
// $name2 = inputData("apakabar");
// echo "$name2";

// echo "Nama : $name";
// echo "Kelas : $name1";
// echo "Kabar : $name2";

// // Menampilkan Data
// showTodoList();

// // Menghapus Data Array
// removeTodoList(4);

showTodoList();

