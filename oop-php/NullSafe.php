<?php

class Address {
    public ?string $country;
}

class User {
    public ?Address $address;
}

// jika tidak menggunakan null safe
function getUserAddressWithoutNullSafe(?User $user) : ?string{
    if ($user != null) {
        if ($user->address != null) {
            return $user->address->country;
        }
    }
    return null;
}

// jika menggunakan null safe
function getAddressUserWithNullsafe(?User $user) : ?string {
    // cukup seperti ini saja
    return $user?->address?->country;
}



// getUserAddressWithoutNullSafe(null);
$data = getAddressUserWithNullsafe(null);
echo $data . PHP_EOL;


