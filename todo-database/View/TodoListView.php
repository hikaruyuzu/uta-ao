<?php

namespace View {
    require_once __DIR__ ."/../Helper/InputHelper.php";
    require_once __DIR__ ."/../Repository/TodoListRepository.php";

    use Helper\{InputHelper};
    use Service\TodoListService;
    use Repository\{TodoListRepository};

    class TodoListView
    {
        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService)
        {
            $this->todoListService = $todoListService;
        }

        public function ShowTodoList(): void
        {
            while (true) {
                $this->todoListService->showTodoList();
                echo "MENU TODOLIST" . PHP_EOL;
                echo "1. Menambah Todo List" . PHP_EOL;
                echo "2. Meghapus Todo List" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $choice = InputHelper::input("Pilih menu");
                if ($choice == "1") {
                    $this->AddTodoList();
                } else if ($choice == "2") {
                    $this->RemoveTodoList();
                } else if ($choice == "x") {
                    break;
                } else {
                    echo "Maaf pilihan tidak di mengerti" . PHP_EOL;
                }
            }

            echo "Sampai jumpa lagi" . PHP_EOL;
        }

        public function AddTodoList(): void
        {

            $todo = InputHelper::input("Masukan todolist [x] jika batal");
            if ($todo == "x") {
                //
                return;
            } else {
                $this->todoListService->addTodoList($todo);
            }

        }

        public function RemoveTodoList(): void
        {
            $number = InputHelper::input("Masukan nomor todo list [x] jika batal");

            if ($number == "x") {
                //
                return;
            } else {

                $numberInteger = (int)$number;
                $this->todoListService->removeTodoList($numberInteger);

            }
        }

    }
}