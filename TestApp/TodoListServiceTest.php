<?php

require_once "Entity/TodoList.php";
require_once "Service/TodoListService.php";
require_once "Repository/TodoListRepository.php";

use Repository\TodoListRepositoryImpl;
use Service\TodolistserviceImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = "Belajar Dart";
    $todoListRepository->todoList[2] = "Belajar PHP";
    $todoListRepository->todoList[3]= "Belajar Javascript";

    $todoListService = new TodolistserviceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();
