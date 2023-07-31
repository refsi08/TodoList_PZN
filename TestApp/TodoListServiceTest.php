<?php

require_once "Entity/TodoList.php";
require_once "Service/TodoListService.php";
require_once "Repository/TodoListRepository.php";

use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodolistserviceImpl;

// test show
function testShowTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = new TodoList("Belajar PHP");
    $todoListRepository->todoList[2] = new TodoList("Belajar Dart");
    $todoListRepository->todoList[3] = new TodoList("Belajar javascript");

    $todoListService = new TodolistserviceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();

// test add
function testAddTodoList(): void
{
    $todoListRepository = new TodoListRepositoryImpl();
    
    $todoListService = new TodolistserviceImpl($todoListRepository);
    $todoListService->addTodoList("Belajar PHP");
    $todoListService->addTodoList("Belajar Dart");
    $todoListService->addTodoList("Belajar Java");

    $todoListService->showTodoList();
}

testAddTodoList();
