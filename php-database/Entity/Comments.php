<?php

namespace Comments {
    class Comments {

        public function __construct(?int $id = null, ?string $name, ?string $comment)
        {
           $this->id = $id;
           $this->name = $name;
           $this->comment = $comment;
        }

        private ?int $id;
        private ?string $name;
        private ?string  $comment;

        /**
         * @return int|null
         */
        public function getId(): ?int
        {
            return $this->id;
        }

        /**
         * @param int|null $id
         */
        public function setId(?int $id): void
        {
            $this->id = $id;
        }

        /**
         * @return string|null
         */
        public function getName(): ?string
        {
            return $this->name;
        }

        /**
         * @param string|null $name
         */
        public function setName(?string $name): void
        {
            $this->name = $name;
        }

        /**
         * @return string|null
         */
        public function getComment(): ?string
        {
            return $this->comment;
        }

        /**
         * @param string|null $comment
         */
        public function setComment(?string $comment): void
        {
            $this->comment = $comment;
        }
    }
}
