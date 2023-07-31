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

        function remove(int $todoNumber): bool
        {
            // validation
            if ($todoNumber > sizeof($this->todoList)) {
                return false;
            }

            // menggeser data yang ingin dihapus
            for ($i = $todoNumber; $i < sizeof($this->todoList); $i++) {
                $this->todoList[$i] = $this->todoList[$i + 1];
            }

            unset($this->todoList[sizeof($this->todoList)]);

            return true;
        }

        function findAll(): array
        {
            return $this->todoList;
        }
    }
}
