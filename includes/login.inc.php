<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        //importing files
        require_once './Model/dbh.inc.php';
        require_once './Model/login_model.inc.php';
        require_once './Controller/login_contr.inc.php';

        //Error Handlers
        $errors = [];

        $result = getUser($pdo, $email);

        if (isEmailWrong($result)) {
            $errors["login_incorrect"] = "Incorrect Login info!";
        }
        if (!isEmailWrong($result) && isPasswordWrong($password, $result['password'])) {
            $errors["login_incorrect"] = "Incorrect Login info!";
        }        


        //import config to start the session
        require_once 'config_session.inc.php';


        //If array is empty returns false
        if ($errors){
            $_SESSION["errors_signin"] = $errors;

            header("Location: ../login.php");
            die();
        }

        //create new session id
        // $newSessionId = session_create_id();
        // $sessionId = $newSessionId."_".$result["nic"];
        // session_id($sessionId);

        $_SESSION["user_id"] = $result["nic"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);

        $_SESSION['last_gen'] = time();


        echo  
        '<script>
            window.alert("Account Created Sucessfully!");
             window.location.href = "../index.php?sigin=success";
            document.querySelector(".signin-btn").textContent = "Logout";
        </script>';

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