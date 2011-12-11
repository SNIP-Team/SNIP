<?php

  session_start();

  error_reporting(1);
 
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
	<link rel="stylesheet" type="text/css" href="github.css" />
	<link rel="icon" type="favicon" href="img/tomtom_icon.ico" />
  </head>
  <div id="header">
    <center>
	  <b>Willkommen auf der Projekt-Seite von SNIP ( Schul Navigation In PHP )</b>
	</center>
  </div>
  <body>
    <div id="body_left">
	</div>
	<div id="body_main">
	   <center>
	     <img src="img/Login.png" style="width:397px;height:182px;margin-bottom:-117px;" />
		   	     <div id="login_form_text">
					<b>Login</b>
				</div>
	     <form input="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-bottom: 35px;">
	      Benutzername : <input type="text" size="22" maxlength="18" name="username" style="margin-bottom: 4px; margin-left: 17px; margin-top: -3px;" /><br />
		  Passwort : <input type="password" size="22" maxlength="18" name="password" style="margin-left: 46px;" /><br />
		  <input type="submit" value="Einloggen" name="login" style="margin-left: 289px; margin-top: 20px;" />
	     </form>
		 <?php
		   if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
		   {
		     $user = magic_quotes_protect($_POST['username']);
			 $pw = magic_quotes_protect($_POST['password']);
			 
			 $connect_query = mysql_query("SELECT * FROM account WHERE Username LIKE '$user'");

			 $res = mysql_fetch_assoc($connect_query);
			 
             if($res[Password] == $pw)
			 {
			   echo "Erfolgreich eingeloggt !";
			   // weiterleitung auf die richtige seite einbauen und die session setzen und die perms
			 }
			 else
			 {
			   echo "Fehler beim einloggen !";
			 }
		   }	
			if(isset($_POST['login']) && ((empty($_POST['username']) || empty($_POST['password'])) || (empty($_POST['username']) && empty($_POST['password']))))
		   {
			   echo "Es ist notwendig einen Benutzernamen und ein Passwort einzugeben !";
		   }	   		   
		 ?>
	  </center>
	</div>
	<div id="body_right">
	</div>
  </body>
  <div id="footer">
    <center><a href="https://github.com/SNIP-Team/SNIP" target="_blank">>>> Folge uns auf Github <<<</a></center>
  </div>
</html>