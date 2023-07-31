<?php

use Repository\TodoListRepositoryImpl;
use Service\TodolistserviceImpl;
use View\TodoListView;

require_once "Entity/TodoList.php";
require_once "Helper/InputHelper.php";
require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";
require_once "View/TodoListView.php";


echo "APLIKASI TODOLIST";

$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodolistserviceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();