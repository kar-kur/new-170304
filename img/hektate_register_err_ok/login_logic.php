<?php

if(isset($_POST['logout'])) {
    unset($_SESSION);
    session_destroy();
    return;
}

if(!isset($_POST['submit'])) return;

if(!isset($_POST['username']) || !isset($_POST['password']) ||
        empty($_POST['username']) || empty($_POST['password'])) {
        $error_msg = "Please fill all fields";
        return;
}

if(login($_POST['username'], $_POST['password'], $db, $salt)) {
    header('Location: login.php');
} else {
    $error_msg = "Username or Password is wrong";
}
?>
