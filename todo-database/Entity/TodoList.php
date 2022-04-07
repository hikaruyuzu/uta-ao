<?php

namespace Entity {

    class TodoList
    {

        public function __construct(?int $id = null, string $todo= "")
        {
            $this->id = $id;
            $this->todo = $todo;
        }

        private string $todo;
        private ?int $id;


        public function getId(): int
        {
            return $this->id;
        }

        public function setId(int $id): void
        {
            $this->id = $id;
        }

        public function getTodo(): string
        {
            return $this->todo;
        }

        public function setTodo(string $todo): void
        {
            $this->todo = $todo;
        }

    }
}
