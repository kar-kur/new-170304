
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/Master.css" rel="stylesheet" type="text/css" />
        <link href="css/Menu.css" rel="stylesheet" type="text/css" />   
        <title>Register</title>
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

                </ul>
             </nav>

          </div>
    </div> 
        <div class="LeftBody">
          <p><img src="img/summer-evening340.jpg" width="277" height="362" class="img"></p>
     
        </div> 

       <div class="RightBody">
        <!-- Ziel = Quelle = Ziel -->
        <form action="" method="post" >  
     
            <div class="FormElement">
            <input type="text" name="username" required class="TField" maxlength="20" id="username" value="<?php  echo (isset($_POST	    	   ['username'])) ?  htmlspecialchars($_POST['username']) : '' ?>" placeholder="Username"/>
            </div>

            <div class="FormElement">
            <input type="password" name="pass[]" id="pass1" required class="TField"value="" placeholder="Password"/>
            </div>

            <div class="FormElement">
            <input type="password" name="pass[]" id="pass2" required class="TField" value="" placeholder="Confirm Password"/>
            </div>
         
            <div class="FormElement">
            <input type="text" name="email" id="email" required class="TField" value="" placeholder="Email"/>
            </div>

             <div class="FormElement">
            <input type="submit" name="submit" class="button" value="Register" />

            </div> 
  	</form>

       <?php if(isset($error_msg) && !empty($error_msg)) : ?>
       
            <div class="Messages"><?php echo $error_msg; ?></div>
    
        <?php endif; ?>


        <?php if(isset($success_msg) && !empty($success_msg)) : ?>
       
        <div class="Messages"><?php echo $success_msg; ?> </div>
     
        <?php endif; ?> 

  
        </div>

    </div>
             <div class="Footer"><p>&copy;Alien | <a href="logout_logic.php" target="_self">Admin</a></p></div>

    </body>
</html>