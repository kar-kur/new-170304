<?php require_once('Header.php');?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/Master.css" rel="stylesheet" type="text/css" />
        <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
        <title>Logged In</title>
 
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
                    
                    <li><a href="update_account.php">Update Account</a></li>  

                    <li><a href="logout_logic.php">Logout</a></li>

                </ul>
             </nav>
          </div>
    </div>  

    <div class="LeftBody">
          <p><img src="img/Tor.jpg" width="277" height="362" class="img"></p>

        </div> 

          <div class="RightBody">
          
         <div class="h1">  Welcome Admin<b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, you are logged in! </div>           
     
       <form action="" method="post">
            <input type="submit" class="Button" name="logout" value="Logout" echo "You have logged out"/>
        </form>

  <?php if(isset($error_msg) && !empty($error_msg)) : ?>
       
            <div class="Messages"><?php echo $error_msg; ?></div>
    
        <?php endif; ?>


        <?php if(isset($success_msg) && !empty($success_msg)) : ?>
       
        <div class="Messages"><?php echo $success_msg; ?> </div>
     
        <?php endif; ?> 



        </div>
    </body>
</html>
