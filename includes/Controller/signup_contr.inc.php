<?php

//Add type decleration
declare(strict_types=1);


function isEmailIvalid(string $email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else{
        return false;
    }
}

function isUsernmeTaken(object $pdo, string $username) {
    if(getUsername($pdo, $username)){
        return true;
    } else{
        return false;
    }
}

function isEmailRegistered(object $pdo, string $email){
    if(getEmail($pdo, $email)){
        return true;
    } else{
        return false;
    }
}

function createUser(object $pdo, string $username, string $password, string $email, string $nic){
    addUser( $pdo, $username, $password, $email, $nic);
    echo "<script>window.alert('Account Created Sucessfully!')</script>";
}