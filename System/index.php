<?php

  session_start();

  error_reporting(0);
 
  include_once "config.php";
  include_once "functions.php";
  
  $connect = mysql_connect(Host,MySqlUser,MySqlPw)
  or die("Mysql can't connect to the Datebase. Error Code : " . mysql_error());
  
  mysql_select_db(DB,$connect)
  or die("Mysql can't select the Datebase. Error Code : " . mysql_error());
  
?>

<html>
  <head>
    <title>SNIP</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <div id="header">
    <center>header Content</center>
  </div>
  <body>
    <div id="body_left">
	  <center>body_left Content</center>
	</div>
	<div id="body_main">
	   <center>
	   <center>body_main Content</center>
	     <img src="img/Login.png" style="width:397px;height:182px;margin-bottom:-117px;" />
	     <form input="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	      <input type="text" size="22" maxlength="18" name="username" style="margin-bottom: 4px; margin-left: 97px;" /><br />
		  <input type="password" size="22" maxlength="18" name="password" style="margin-left: 97px;" /><br />
		  <input type="submit" value="Einloggen" name="submit" style="margin-left: 289px; margin-top: 20px;" />
	     </form>
		 <?php
		   if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
		   {
		     $user = $_POST['username'];
			 $pw = $_POST['password'];
			 
			 $connect_query = mysql_query("SELECT * FROM account WHERE Username LIKE '$user'");

			 $res = mysql_fetch_assoc($connect_query);
			 
             if($res[Password] == $pw)
			 {
			   echo "Successfully logged in !";
			 }
			 else
			 {
			   echo "Login Failed !";
			 }
		   }
		 ?>
	  </center>
	</div>
	<div id="body_right">
	<center>body_right Content</center>
	</div>
  </body>
  <div id="footer">
    <center>footer Content</center>
  </div>
</html>