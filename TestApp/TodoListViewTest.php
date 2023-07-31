<?php
require_once "Entity/TodoList.php";
require_once "Repository/TodoListRepository.php";
require_once "Service/TodoListService.php";
require_once "View/TodoListView.php";
require_once "Helper/InputHelper.php";

use Repository\TodoListRepositoryImpl;
use Service\TodolistserviceImpl;
use View\TodoListView;


function testViewShowTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodolistserviceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();
}

function testViewAddTodoList(): void
{
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodolistserviceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Belajar PHP");
    $todolistService->addTodoList("Belajar PHP OOP");
    $todolistService->addTodoList("Belajar PHP Database");

    $todolistView->showTodoList();
    $todolistView->addTodoList();
    $todolistView->showTodoList();
}

testViewAddTodoList();
