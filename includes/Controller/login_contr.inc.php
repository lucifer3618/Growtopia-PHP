<?php

//Add type decleration
declare(strict_types=1);

function isEmailWrong(array|bool $result){
    if(!$result){
        return true;
    } else {
        return false;
    }
}

function isPasswordWrong(string $password, string $hashedPassword){
    if(!password_verify($password, $hashedPassword)){
        return true;
    } else {
        return false;
    }
}