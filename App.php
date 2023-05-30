<?php
// Import Model
require_once "Model/Todolist.php";

// Import Business Logic
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

// Import View
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Model/Todolist.php";
require_once "Helper/InputData.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";

// Data Sementara
addTodoList("Belajar PHP Dasar");
addTodoList("Belajar Dart Dasar");
addTodoList("Belajar Javascript Dasar");
addTodoList("Belajar HTML Dasar");


viewShowTodoList();