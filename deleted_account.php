<?php   session_start(); ?>
<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	       <link href="css/Master.css" rel="stylesheet" type="text/css" />
         <link href="css/Menu.css" rel="stylesheet" type="text/css" />   

   <!-- Add jQuery library -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Add fancyBox -->

<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">

         $(document).ready(function() {

        $("a.fancybox").fancybox();

     });

    $(document).ready(function(){

    $('a[rel="gallery"]').fancybox();

  });

</script>

	<title>Successfully Deleted</title>

	<body>
        <div class="Container">

      <?php 

require_once('Header.php');?>

	 <div cs="Menu">

       <div id="Menu">

             <nav>

                <ul class="cssmenu">

                    <li><a href="registration_markup.php">Register</a></li>    
                    <li><a href="login.php">Login</a></li>  

                </ul>

             </nav>

          </div>

    </div>  
    
   <div class="LeftBody">

  <div class="fancybox img">

    <a class="fancybox img" rel="group" title="Go to Hell or come back if you want (::" href="img/cat_gross.jpg" alt=""/> <img src="img/cat_klein.jpg" border"1" alt=""/> </a>    
</div>

  </div> 

 <div class="RightBody">
    
          <div class="GoodBye">  Good bye <b><?php echo htmlspecialchars($_SESSION['username']); ?>,<br /></b> your account has been <br/ >successfully deleted!
          </div>
      
           <form action="logout_logic.php" form method="post"> 

           <input type="submit" name="submit"  class="WelcomeButton" value="Register"/>
        
        </form>

    
        <?php if(isset($error_msg) && !empty($error_msg)) : ?>

        <?php echo $error_msg; ?>

        <?php endif; ?>

        <?php if(isset($success_msg) && !empty($success_msg)) : ?>

        <?php echo $success_msg; ?>

        <?php endif; ?>

        </div>

  </div>
             <?php require_once('Footer.php'); ?>

</body>

</html>