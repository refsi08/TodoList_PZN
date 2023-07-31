<?php

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {
        private array $todoList = [];

        function save(TodoList $todoList): void
        {
        }

        function remove(int $number): bool
        {
        }

        function findAll(): array
        {
            return $this->todoList;
        }
    }
}
