<?php
if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($con,$_POST['username']);
  $passpword = mysqli_real_escape_string($con,$_POST['password']);
  $userlevel = mysqli_real_escape_string($con,$_POST['userlevel']);
} 

$sel_user = "SELECT * FROM $user WHERE username = '$username' AND password = '$password' AND userlevel = '$userlevel'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user > 1){
  if($userlevel == 2) {
    $_SESSION['username'] = $username;
    echo "<script> location.replace('admin_markup_logged_out'); </script>";
  }
  elseif ($userlevel == 2) {
    $_SESSION['Username'] = $Username;
    echo "<script> location.replace('admin_markup_logged_out'); </script>";
  } 
//} else {
   echo "<script>alert('Username or password is not correct, try again!')</script>";

}//
} else {
    $error_msg = "Username or Password is wrong";
}

	header("Location:admin_markup_logged_out.php");
?>

