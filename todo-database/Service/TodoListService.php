<?php

namespace Service {
    require_once __DIR__ . "/../Entity/TodoList.php";
    require_once __DIR__ . "/../Repository/TodoListRepository.php";

    use Entity\{TodoList};
    use Repository\{TodoListRepository, TodoListRepositoryImpl};

    interface TodoListService
    {

        public function showTodoList(): void;

        public function addTodoList(string $todo): void;

        public function removeTodoList(int $number): void;

    }

    class TodoListServiceImpl implements TodoListService
    {
        // call interface from repository
        private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        public function showTodoList(): void
        {
            echo "TODO LIST " . PHP_EOL;
            // get all todollist from Repository
            $todo = $this->todoListRepository->findAll();
            foreach ($todo as $value) {
                $todo = $value;

                if (isset($value)) {
                    echo "{$value->getId()}. " . $todo->getTodo() . PHP_EOL;
                }
            }
        }

        public function addTodoList(string $todo): void
        {
            $todolist = new TodoList(todo:$todo);
            $success = $this->todoListRepository->save($todolist);
            if (!$success) {
                echo "Oopps , an error onccurred" . PHP_EOL;
            } else {
                echo "Success add todolist" . PHP_EOL;
            }

        }

        public function removeTodoList(int $number): void
        {

            $result = $this->todoListRepository->delete($number);

            if ($result) {
                echo "Success delete todo from list" . PHP_EOL;
            } else {
                echo "Upps, failed to delete todolist" . PHP_EOL;
            }
        }
    }
}
