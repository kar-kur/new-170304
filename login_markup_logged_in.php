<?php require_once('news.php'); ?>

<?php 

error_reporting(-1);
ini_set('display_errors', TRUE);  

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
    
                    <li><a href="login.php">Login</a></li>  

                    <li><a href="update_account.php">Update Account</a></li>  

                    <li><a href="logout_logic.php">Logout</a></li>

                </ul>
             </nav>
          </div>
    </div>  

    <div class="LeftBody">
           <div class="fancybox img">

 <a class="fancybox img" rel="group" title="Sculpture Park 'Arboretum' in Essen" href="img/parkleuchte_skulptur_gross.jpg"><img src="img/parkleuchte_klein.jpg" border"1" alt=""/> </a> 


</div>

        </div> 

   <div class="RightBody">

         <div class="Welcome">  Welcome <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, you are logged in!

<form action="" method="post">
  <textarea div class="Text" id="news" name='news' placeholder="Leave me a Message" ></textarea>
   <?php  if(@$result) {

   echo "<h4><br><b><b><b><b><b>Your Message has been successfully sent"; 

 
  }

?>


            <input type="submit" class="button1" name="send_text" value="Send" />
            <input type="reset" class="button2" name="reset" value="Reset" />
            <input type="submit" class="WelcomeButton2" name="logout" value="Good bye" />


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
</div>
    <?php require_once('Footer.php'); ?>
       

    </body>
</html>
