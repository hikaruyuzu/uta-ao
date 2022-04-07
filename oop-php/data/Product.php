<?php

// access modifier di php dibagi menjadi 3 yaitu
// ppublic , protecated dan jug private
// dimana protected ini hanya bisa di akses di class parent dan turunannya, dan private hanya bisa di aksess di class itu sendiri


namespace Product\Manga{
    class Manga {
        private string $title;
        private int $price;

        // jika kamu ingn mengakses private field kamu harus membuat getter ataupun seternya dengan konstructor ataupun function
        public function __construct(string $title, string $price) {
            $this->title = $title;
            $this->price = $price;
        }

        public function getMangaTitle() : string {
            return $this->title;
        }

        public function getMangaPrice() : string {
            return $this->price;
        }

    }

    class MangaRomance extends Manga {
        // jikakamu ingin menggunakan private field di parentkamu harus menggunakan getter/setter dari parent atau mengubahny amenjadi peritected

    }
}
