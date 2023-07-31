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
        }

        function removeTodoList(): void
        {
        }
    }
}
