<?php

//Add type decleration
declare(strict_types=1);


//DB connection already on the signup.inc.php
function getUsername( object $pdo, string $username){
    //Send data and query seperately to improve security
    $query = "SELECT username FROM users WHERE username= :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    //fetch the first value from the db
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email){
    $query = "SELECT email FROM users WHERE email= :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function addUser(object $pdo, string $username, string $password, string $email, string $nic){
    $query = "INSERT INTO users (username, email, nic, password) VALUES (:username, :email, :nic, :password);";
    $stmt = $pdo->prepare($query);

    //Hasing password
    $options = [
        'cost' => 12,
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':nic', $nic);
    $stmt->execute();
}