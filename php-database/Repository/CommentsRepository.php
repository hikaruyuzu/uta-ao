<?php

namespace CommentsRepository {

    use Comments\Comments;
    use http\Exception;

    interface CommentsRepository
    {
        function insert(Comments $comments): ?Comments;

        function findById(int $id): ?Comments;

        function findAll(): ?array;
    }


    class CommentsRepositoryImpl implements CommentsRepository
    {

        public function __construct(private \PDO $connection)
        {

        }

        function insert(Comments $comments): ?Comments
        {
            $this->connection->beginTransaction();

            $sql = "INSERT INTO comments(name, comment) VALUES (?, ?)";
            $statement = $this->connection->prepare($sql);

            try {
                $statement->execute([$comments->getName(), $comments->getComment()]);
                $this->connection->commit();
            } catch (\PDOException $exception) {
                if (isset($exception)) {
                    $this->connection->rollBack();
                }

                echo "Oppss an error occured " . $exception->getMessage() . PHP_EOL;
            }

            $id = $this->connection->lastInsertId();

            if (isset($id)) {
                $comments->setId($id);
            }

            return $comments;

        }

        function findById(int $id): ?Comments
        {
            $sql = "SELECT id, name, comment FROM comments WHERE id = ?";
            $statement = $this->connection->prepare($sql);

            try {
                $statement->execute([$id]);
            } catch (\PDOException $exception) {
                echo "Oppss an error occured " . $exception->getMessage() . PHP_EOL;
            }

            if ($row = $statement->fetch()) {
                return new Comments(
                    id: $row["id"],
                    name: $row["name"],
                    comment: $row["comment"],
                );
            } else {
                return null;
            }
        }

        function findAll(): ?array
        {

            $sql = "SELECT id, name, comment FROM comments";
            $statement = null;

            try {
                $statement = $this->connection->query($sql);
            } catch (\PDOException $exception) {
                echo "Oppss an error occured " . $exception->getMessage() . PHP_EOL;
            }

            // temp comment object
            $comments = array();

            if ($result = $statement->fetchAll()) {
                foreach ($result as $row) {
                    $comments[] = new Comments(
                        id: $row["id"],
                        name: $row["name"],
                        comment: $row["comment"],
                    );
                }
            }

            if (!empty($comments)) {
                return $comments;
            } else {
                return null;
            }
        }
    }
}
