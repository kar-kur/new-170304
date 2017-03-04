<?php


function login($username, $password, $db, $salt) {
    $password = hash('sha256', $password.$salt);

    $sql = '
        SELECT
                COUNT(*)
        FROM
                user
        WHERE
                Username = ?
        AND
                Password = ?
                ';
    $stmt = $db->prepare($sql);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->bind_result($result);
    $stmt->fetch();
    $stmt->close();

    if($result == 1) {
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $username;
          $_SESSION['user'] = $row->nick;
      return true;
    } else {
        return false;
    }
}

function check_login() {
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        return true;
    }
    return false;   
}






?>