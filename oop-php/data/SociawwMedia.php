<?php

class SosilMedia {
    public string $name;
}

final class Facebook extends SosilMedia {
    final public function login() : bool{
        return true;
    }
}

// dia akan error jika di set final di parent extendnya
//class FakeFacebook extends Facebook {
//    public function login() : bool{
//        return false;
//    }
//}
