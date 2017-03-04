
<!doctype html>
<html>
<head>
<link href="css/Master.css" rel="stylesheet" type="text/css" />
<link href="css/Menu.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title>Updated</title>
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

                    <li><a href="login.php">Login</a></li>  

 		    <li><a href="logout_logic.php">Logout</a></li>  

                </ul>
             </nav>
          </div>
    </div> 
        <div class="LeftBody"><p><img src="img/galaxy.jpg" width="277" height="362" class="img"></p></div> 
        <div class="RightBody">
           <div class="h1">Your Account has been successfully updated!</div>


  <form action="" method="post" >
     
            <input type="submit" name="submit" class="button" value="Logout" />
  </form>
     </div> 
</div>
    <div class="Footer"><p>&copy;Alien | <a href="login.php" target="_self">Admin</a></p></div>
	

</body>
</html>