<?php

//Add type decleration
declare(strict_types=1);

function setErrors(string $id, string $name, string $error, string $errorId){
    echo 
        '<div class="inputs">
            <input type="text" class="input-box" id="'. $id .'" name="'. $name .'" autocomplete="off">
            <label for="'. $name .'">'.ucwords($name).'</label>
        </div>
        <div class="error-msg-signup error" id="'. $errorId .'">'. $error .'</div>';
}


function signupInput(){

    if(isset($_SESSION["errors_signup"]["username_taken"])){
            setErrors('name', 'username', $_SESSION["errors_signup"]["username_taken"], 'name-error-signup');
            unset($_SESSION["errors_signup"]["username_taken"]);
            echo "<script>window.alert('Username Already Taken!')</script>";
    } else {
        setErrors('name', 'username', '', 'name-error-signup');
    }

    if (isset($_SESSION["errors_signup"]["registered_email"])) {
        setErrors('email', 'email', $_SESSION["errors_signup"]["registered_email"], 'email-error-signup');
        echo "<script>window.alert('Email Already Registered!')</script>";
        unset($_SESSION["errors_signup"]["registered_email"]);
    } else {
        setErrors('email', 'email', "", 'email-error-signup');
    }

    echo'
    <div class="inputs">
        <input type="text" class="input-box" id="nic" name="nic" autocomplete="off">
        <label for="nic">NIC</label>
    </div>
    <div class="error-msg-signup" id="nic-error-signup"></div>';
    
    echo'
    <div class="inputs">
        <input type="password" class="input-box" id="password" name="password" autocomplete="off">
        <label for="password">Password</label>
    </div>
    <div class="error-msg-signup" id="password-error-signup"></div>';

}



// function checkSignupErrors() {
//     if (isset($_SESSION["errors_signup"])) {
//         $errors = $_SESSION["errors_signup"];

//         echo "<br>";
//         foreach($errors as $error){
//             echo '<p class="form-error">'. $error .'</p>';
//         }

//         //Remove _SESSION["errors_signup"] from session
//         unset($_SESSION["errors_signup"]);
//     } else if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
//         echo "<br>";
//         echo '<p class="form-error">Sign Up Succeess!</p>';
//     }
// }
