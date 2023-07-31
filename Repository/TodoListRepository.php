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
        public array $todoList = [];

        function save(TodoList $todoList): void
        {
            $number = sizeof($this->todoList) + 1; // memeriksa jumlah data array ditambahkan 1
            $this->todoList[$number] = $todoList; // memasukkan data todo kedalam variabel todolist
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
