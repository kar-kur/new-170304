<?php
  session_start();
  $db = mysqli_connect("localhost", "hektate", "dobrevece", "hektate");
	mysqli_query($db, "SET NAMES 'utf8'");

  if(isset($_SESSION)) {
     $User = $_SESSION['username'];
      var_dump($_SESSION); //here we have the data of the user
var_dump($User);
  }

$result = mysqli_query($db, "select * from user where ID='$User'");

  mysqli_fetch_array($result);


/* Where from you het that ??? $row even exists!
  $_SESSION["Email"] = $row['Email'];

  $_SESSION["Username"] = $row['username']; 

  $_SESSION["Password"] = $row['Password'];

*/

	if(isset($_POST['Update'])) {


	$UpdateEmail = $_POST['Email'];

	

	$UpdatePassword = $_POST['Password'];


	$result = mysqli_query("Update user SET Username ='{$UpdateUsername}', Password ='{$UpdatePassword}' where UserID = $User");


	header('Location: Updated.php');

}

?>
<!doctype html>

<html>

<head>

<link href="css/Master.css" rel="stylesheet" type="text/css" />

<link href="css/Menu.css" rel="stylesheet" type="text/css" />

<meta charset="utf-8">

<title>Update Account</title>

</head>



<body>

	<div class="Container">
    <?php 
	require_once('Header.php');?>


        <div class="Menu">

       <div id="Menu">

             <nav>

                <ul class="cssmenu">

                    
                   <li><a href="registration.php">Register</a></li>    
                            
                    <li><a href="logout_logic.php">Login</a></li>  
	

	           	       <li><a href="logout_logic.php">Logout</a></li>  

                </ul>

             </nav>

			</div>

    </div> 

        <div class="LeftBody"><p><img src="img/forest.jpg" width="277" height="362" class="img"></p> </div>

        <div class="RightBody">

         <form name="RegisterForm" method="post" action="">

          
            <div class="FormElement">

          	  <input name="Email" type="email" required class="TField" id="Email" placeholder="Email" value="<?php  echo $_SESSION["Email"]; ?>" >

          	</div>

	     

            <div class="FormElement">

          	  <input name="Password" type="password" required class="TField" id="Password" placeholder="Password" value="<?php  echo $_SESSION["Password"]; ?>" >

          	</div>

       	    <div class="FormElement"><input name="Update_account" type="submit" class="button" value="Update Account"></div>
        

          </form>        

      </div> 
</div>

      </div> 
</div>

         <div class="Footer"> <p>&copy;Alien | <a href="logout_logic.php" target="_self" >Admin</a></p></div>
  </div>

 
</body>

</html>