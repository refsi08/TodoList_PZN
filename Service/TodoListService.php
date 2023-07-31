<?php

namespace Service {

    use Repository\TodoListRepository;

    interface TodoListService
    {
        function showTodoList(): void;

        function addTodoList(string $todo): void;

        function removeTodoList(int $number): void;
    }

    class TodolistserviceImpl implements TodoListService
    {
        // properti
        private TodoListRepository $todolistRepository;

        // constructor
        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todolistRepository = $todoListRepository;
        }

        function showTodoList(): void
        {
            /**
             * Judul Halaman
             */
            echo "TODOLIST" . PHP_EOL;

            $todolist = $this->todolistRepository->findAll();

            //logic menampilkan data
            foreach ($todolist as $index => $value) {
                echo "$index. $value" . PHP_EOL;
            }
        }

        function addTodoList(string $todo): void
        {
        }

        function removeTodoList(int $number): void
        {
        }
    }
}
