<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link href="css/Master.css" rel="stylesheet" type="text/css" />
        <link href="css/Menu.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>

        <?php if(isset($error_msg) && !empty($error_msg)) {
            echo $error_msg;
         }

        ?>
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
          <p><img src="img/valley.jpg" width="277" height="362" class="img"></p>
        </div>

         <div class="RightBody">
        <!-- Ziel = Quelle = Ziel -->
        <form action="" method="post" >
            <div class="FormElement"> 
            <input type="text" required class="TField" name="username" placeholder="Username"/>
            </div>
            <div class="FormElement">
            <input type="password" required class="TField" name="password" placeholder="Password"/>
            </div>
            <div class="FormElement">
            <input type="submit" name="submit" class="button" value="Login" />

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

             <div class="Footer"> <p>&copy;Alien | <a href="login.php" target="_self" >Admin</a></p></div>
    </body>
</html>