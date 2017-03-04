<?php   session_start(); ?>
<?php header("Content-Type: text/html; charset=UTF-8"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <head>
  <meta charset="utf-8">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                    
                    <li><a href="login.php">Back to Account</a></li>  
 		    <li><a href="logout_logic.php">Logout</a></li>  

                </ul>
             </nav>
          </div>
    </div> 
   <div class="LeftBody">

           <div class="fancybox img">

 <a class="fancybox img" rel="group" title="Glas-Elephant Maxipark in Hamm, largest Elephant of the World" href="img/elephant_herbstleuchten_gross.jpg"><img src="img/elephant_herbstleuchten_klein.jpg" border"1" alt=""/> </a> 
 
</div>

        </div> 

   <div class="RightBody">

       
         <div class="Welcome"> <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, your account has been succsessfully updated! 
  
</div>         

     

<form action="logout_logic.php" form method="post"> 

           <input type="submit" name="submit"  class="WelcomeButton1" value="Good bye"/>
        
        </form>
         <?php if(isset($error_msg) && !empty($error_msg)) : ?>
       
            <div class="Messages"><?php echo $error_msg; ?></div>
    
        <?php endif; ?>


        <?php if(isset($success_msg) && !empty($success_msg)) : ?>
       
        <div class="Messages"><?php echo $success_msg; ?> </div>
     
        <?php endif; ?> 

  </div>
</div>
 </div>

</div>

    <?php require_once('Footer.php'); ?>

    </body>

</html>