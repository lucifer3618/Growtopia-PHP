<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();

if (isset($_SESSION["user_id"])) {
    //If session does not exsist inside the website
if (!isset($_SESSION['last_gen'])) {
    regen_session_id_loggedIn();
 }else{
     $interval = 60 * 30;
     if(time() - $_SESSION['last_gen'] >= $interval){
         regen_session_id();
     }
 }

}else{
    //If session does not exsist inside the website
if (!isset($_SESSION['last_gen'])) {
    regen_session_id();
 }else{
     $interval = 60 * 30;
     if(time() - $_SESSION['last_gen'] >= $interval){
         regen_session_id();
     }
 }
}


function regen_session_id(){
    //generate more secure id than than default
    session_regenerate_id(true); 
    //saves every time session id updated
    $_SESSION['last_gen'] = time();
}

function regen_session_id_loggedIn(){
    session_regenerate_id(true); 

    $userId = $_SESSION["user_id"];
    //create new session id
    $newSessionId = session_create_id();
    $sessionId = $newSessionId."_".$userId;
    session_id($sessionId);

    $_SESSION['last_gen'] = time();
}