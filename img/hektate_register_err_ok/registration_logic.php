<?php
// Formular gesendet?
if(!isset($_POST['submit'])) return;
// Wenn ja ... dann weiter...

// Daten vorhanden ?
if(!isset($_POST['username']) || !isset($_POST['pass']) || !isset($_POST['email']) ||
        empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['email'])) {

        $error_msg = "Please fill empty Fields.";
        return;
}
// Wenn ja ... weiter

// "1" == 1  || TRUE    "1" === 1 || FALSE

// Passwörter gleich?
if($_POST['pass'][0] !== $_POST['pass'][1]) {
    $error_msg = "Passwords are not equal";
    return;
}
// Wenn ja ... dann weiter

// username =(sha256)=> "834j3nb2hsdfhgsdhgf823u4kj23j4jkmsdfnbmdsfmjsafbwejkrkqwre"
$_POST['pass'] = hash('sha256', $_POST['pass'][0].$salt);

if(strlen($_POST['username']) > 20) {
    $error_msg = "Username is longer as allowed";
    return;
}

// "  username  " trim("  username  ") => "username"
$_POST['username'] = trim($_POST['username']);

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error_msg = "Email Address is invalid";
    return;
}

// 25.123.44.32
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $user_ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $user_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
    $user_ip=$_SERVER['REMOTE_ADDR'];
}
$user_ip = ip2long($user_ip);
/*echo $user_ip; for testing*/

$sql = '
        INSERT INTO
                    user
                    (Username, Password, Email, IP, date)
        VALUES
                    (?, ?, ?, ?, NOW())';
$stmt = $db->prepare($sql);
$stmt->bind_param('sssi', $_POST['username'], $_POST['pass'], $_POST['email'], $user_ip);

if(!$stmt->execute()) {

    if(strpos($db->error, 'Duplicate') !== false) {
        $error_msg = "Username or Email is already in use";
    } else {
       $error_msg = "An Error occured.";
    }    
    return;
}
$stmt->close();

$success_msg = "Useraccount ".htmlspecialchars ($_POST['username'])." is successfully registered";
 