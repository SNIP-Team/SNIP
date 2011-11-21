<?php
  
  session_start();
  
  include_once "config.php";
  
?>

<html>
  <head>
    <title>SNIP</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <div id="header">
    <!-- HEADDER MARKER -->
	HEAAAAADEEEEER
  </div>
  <body>
    <div id="body_left">
	LEEEEEEEFFFFT
	</div>
	<div id="body_main">
	   <center>
	   BOOOOOOOOODDDDDDDY MAAAIIIN
	     <form input="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	       Username : <input type="text" size="30" name="username" /><br />
		   Password : &nbsp;<input type="password" size="30" name="password" /><br />
		   <input type="submit" value="Login !" name="submit" />
	     </form>
		 <!--?php
		   if(isset($_POST("submit")))
		   {
		     // hier dann die PHP abfrage aus der DB
		   }
		 ?>-->
	  </center>
	</div>
	<div id="body_right">
	BOOODDYYYYYY RIGHT
	</div>
  </body>
  <div id="footer">
    <!-- FOOTER MARKER -->
	FOOOOOOTTTEEEER
  </div>
</html>