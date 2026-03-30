<?php

// Prevents automatically exposing the SESSION ID in link elements we create:
ini_set('session.use_only_cookies', 1);

// To only use session that already exist when we implement session_start(); 
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1880,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

// Creates session;
session_start();

// set the last_regeneration if it hasn't set yet/ first time visiting the page.
if(!isset($_SESSION['last_regeneration'])){
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}else{
    // Seconds * minutes; This one is 30 mins;
    $interval = 60 * 30;

    // Calculate if the session is now greater than 30 mins;
    if(time() - $_SESSION['last_regeneration'] >= $interval){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}