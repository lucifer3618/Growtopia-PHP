<?php


//Check if the user really submit the form
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    $password = $_POST['password'];

    
    try {
        //importing files
        require_once './Model/dbh.inc.php';
        require_once './Model/signup_model.inc.php';
        require_once './Controller/signup_contr.inc.php';

        //Error Handlers
        $errors = [];

        if (isEmailIvalid($email)){
            $errors["invalid_email"] = "Email you provided is invalid!";  
        }
        if (isUsernmeTaken($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";  
        }
        if (isEmailRegistered($pdo, $email)){
            $errors["registered_email"] = "Email already registered!";  
        }

        //import config to start the session
        require_once 'config_session.inc.php';


        //If array is empty returns false
        if ($errors){
            $_SESSION["errors_signup"] = $errors;

            //store sign up information input by the user
            $signupData = [
                "username" => $username,
                "email" => $email,
                "nic" => $nic
            ];
            $_SESSION["signup_data"] = $signupData;

            header("Location: ../login.php");
            die();
        }
        
        createUser($pdo, $username, $password, $email, $nic);
        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;
        die();


    } catch (PDOException $exception) {
        die("Query filed:" . $exception->getMessage());
    }

} else{
    //If not sed user to homepage
    header("Location: ../login.php");
    die();
}