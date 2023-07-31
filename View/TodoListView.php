<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView
    {
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }
        function showTodoList(): void
        {
            while (true) {
                $this->todoListService->showTodoList();
                echo " Menu :" . PHP_EOL;
                echo " 1. Input" . PHP_EOL;
                echo " 2. Hapus" . PHP_EOL;
                echo " 3. Exit" . PHP_EOL;

                $pilihan = InputHelper::input('Pilihan');

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "3") {
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodoList(): void
        {
            echo "Menambah TODO" . PHP_EOL;

            // masukkan function input data
            $inputTodo = InputHelper::input("Masukkan Todo (x untuk batal)");

            if ($inputTodo == "x") {
                echo "Batal Menambahkan todo" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($inputTodo);
            }
        }

        function removeTodoList(): void
        {
            echo "Menghapus ToDo" . PHP_EOL;

            $pilihan = InputHelper::input("Input nomor (x untuk batal)") . PHP_EOL;

            if ($pilihan == "x") {
                echo "Batal untuk menghapus Todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($pilihan);
            }
        }
    }
}
