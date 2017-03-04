<?php
session_start();
unset($_SESSION["UserID"]);

if(@session_destroy()) {
echo "Logout successful!";
}
else {
 die('Not pssible to log out!');
}

header('Location: login.php');
?>