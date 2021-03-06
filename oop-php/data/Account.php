<?php

namespace Data;

class Account {
    private string $username;
    private string $address;

    public function __construct(string $username, string $address)
    {
        $this->username = $username;
        $this->address =$address;
    }

    public function getUsername() : string
    {
        return $this->username;
    }

    public function getAddress() : string
    {
        return $this->address;
    }


    public function getDataAccount() : string
    {
        return "Data account with username $this->username have address $this->address" . PHP_EOL;
    }


}

class AccountPremium extends Account {
    // disini kita bisa override costructornya
    public function __construct(string $username)
    {
        // disini sangat direkoomendasikan untuk mengakses parent dari costructnya, atapi ga waajib
        parent::__construct($username, "Tokyo, Japan");
    }

    public function getUsername(): string
    {
        return parent::getUsername(); // TODO: Change the autogenerated stub
    }

    public function getAddress(): string
    {
        return parent::getAddress(); // TODO: Change the autogenerated stub
    }

    public function getDataAccount() : string {
        return "Data account premium with username " .$this->getUsername() . "and have address " . $this->getAddress() . PHP_EOL;
    }

}