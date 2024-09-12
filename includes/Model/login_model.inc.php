<?php

//Add type decleration
declare(strict_types=1);

function getUser(object $pdo, string $email){
    //Send data and query seperately to improve security
    $query = "SELECT * FROM users WHERE email= :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    //fetch the first value from the db
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;   
}