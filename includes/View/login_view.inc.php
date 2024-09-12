<?php

//Add type decleration
declare(strict_types=1);

function setLoginErrors(string $id, string $name, string $error, string $errorId){
    echo 
        '<div class="inputs">
            <input type="text" class="input-box" id="'. $id .'" name="'. $name .'" autocomplete="off">
            <label for="'. $name .'">'.ucwords($name).'</label>
        </div>
        <div class="error-msg-signin error" id="'. $errorId .'">'. $error .'</div>';
}


function signInInput(){

    if(isset($_SESSION["errors_signin"]["login_incorrect"])){
            setErrors('login-email', 'email', $_SESSION["errors_signin"]["login_incorrect"], 'email-error-signin');

            setErrors('login-password', 'password', $_SESSION["errors_signin"]["login_incorrect"], 'pass-error-signin');

            unset($_SESSION["errors_signin"]["login_incorrect"]);

    } else {
        setErrors('login-email', 'email', '', 'email-error-signin');
        setErrors('login-password', 'password', "", 'pass-error-signin');
    }
}

