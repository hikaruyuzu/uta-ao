<?php


function validateLoginExeption(LoginRequest $loginRequest) {
    // lakukan validasi disini
    $username = $loginRequest->getUsername();
    $password = $loginRequest->getPassword();
    if (!isset($username)) {
        throw new ValidationExeption("Upps , username is null");
    } else if (!isset($password)) {
        throw new ValidationExeption("Upps , password is null");
    } else if (trim($username == "")) {
        throw new Exception("Upps username is empty");
    } else if (trim($password == "")) {
        throw new Exception("Upps password is empty");
    }
}