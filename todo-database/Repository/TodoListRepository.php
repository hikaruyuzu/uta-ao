<?php

namespace Repository {

    require_once __DIR__ . "/../Entity/TodoList.php";

    use Entity\{TodoList};

    interface TodoListRepository
    {

        public function save(TodoList $todo): bool;

        public function delete(int $number): bool;

        public function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository
    {


        var \PDO $connection;
        public function __construct(\PDO $connection)
        {
            $this->connection = $connection;
        }

        public array $todolist = array();

        public function save(TodoList $todo): bool
        {
//            if (!(isset($todo))) {
//                return;
//            } else {
//                $this->todolist[count($this->todolist)] = $todo;
//            }
            $this->connection->beginTransaction();

            $sql = "INSERT INTO todolist(todo) VALUES (?)";

            try {
                $statement = $this->connection->prepare($sql);
                $statement->execute([$todo->getTodo()]);
                $this->connection->commit();
                return true;

            } catch (\PDOException $exception) {
                $this->connection->rollBack();
                echo "Oopps => " . $exception->getMessage() . PHP_EOL;
                return false;
            }
     }

        public function delete(int $number): bool
        {
//            if ($number > sizeof($this->todolist)) {
//                return false;
//            }
//
//            for ($i = $number-1; $i < sizeof($this->todolist)-1; $i++) {
//
//                $this->todolist[$i] = $this->todolist[$i + 1];
//
//            }
//            unset($this->todolist[sizeof($this->todolist)-1]);
//
//            return true;

            $this->connection->beginTransaction();

            // check id availability in databse
            $sql = "SELECT (id) FROM todolist WHERE id=(?)";
            try {
                $statement = $this->connection->prepare($sql);
                $statement->execute([$number]);

            } catch (\PDOException $exception) {
                $this->connection->rollBack();
                echo "Oopps => " . $exception->getMessage() . PHP_EOL;
                return false;
            }

            if ($statement->fetch()) {
                // if id available, delete data
                $sql = "DELETE FROM todolist WHERE id=(?)";
                try {
                    $statement = $this->connection->prepare($sql);
                    $statement->execute([$number]);
                    $this->connection->commit();
                    return true;
                } catch (\PDOException $exception) {
                    $this->connection->rollBack();
                    echo "Oopps => " . $exception->getMessage() . PHP_EOL;
                    return false;
                }

            } else {
                $this->connection->rollBack();
                return false;
            }

        }

        public function findAll(): array
        {
//            return $this->todolist;
            $sql = "SELECT id, todo FROM todolist";
            $statement = $this->connection->query($sql);

            if (!$statement) {
                echo "Oopps , an error onccurred"  . PHP_EOL;
            }

            $todolist = array();

            if ($result = $statement->fetchAll()) {
                foreach ($result as $row) {
                    $todolist[] = new TodoList(
                        id: $row["id"],
                        todo: $row["todo"],
                    );
                }
            }

            return $todolist;
        }
    }
}
