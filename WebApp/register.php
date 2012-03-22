<?php
 
  include_once "php/config.php";
  include_once "php/functions.php";
  
  $connect = mysql_connect(Host,MySqlUser,MySqlPw)
  or die("Mysql can't connect to the Datebase. Error Code : " . mysql_error());
  
  mysql_select_db(DB,$connect)
  or die("Mysql can't select the Datebase. Error Code : " . mysql_error());
  
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>SNIP - Registrieren</title>

	<!-- Metadata -->	
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
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
	     <img src="img/login_register.png" style="width:397px;height:182px;margin-bottom:-117px;" />
		   	     <div id="login_form_text">
					<b style="margin-left:16px;">Register</b>
				</div>
	     <form input="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-bottom: 35px;">
	      Benutzername : <input type="text" size="22" maxlength="18" name="username" style="margin-bottom: 4px; margin-left: 17px; margin-top: -3px;" /><br />
		  Passwort : <input type="password" size="22" maxlength="18" name="password" style="margin-left: 46px;" /><br />
		  <input type="submit" value="Register" name="login" style="margin-left: 289px; margin-top: 20px;" />
	     </form>
		 <a href="index.php">Zurrück zum Login !</a><p>
		 <?php
			
			$active = false;
			
		   if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) // check all inputs
		   {
				$check_user = $_POST['username'];
				$check_pw = $_POST['password'];
				
				$query = mysql_query("SELECT * FROM account WHERE username LIKE '$check_user'");			
				$res = mysql_num_rows($query);
				
				if($res >= 1)
				{
					echo "Benutzername ist bereits vergeben !";
				}
				else if(strlen($check_user) < 6 || strlen($check_pw) < 6 || (strlen($check_user) < 6 && strlen($check_pw) < 6))
				{
					echo "Benutzername und Passwort müssen mindestens aus 6 Zeichen bestehen !";
				}
				else
				{
					$active = true;
				}		
		   }
		   if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']) && $active)
		   {
		     $user = magic_quotes_protect($_POST['username']);
			 $pw = magic_quotes_protect($_POST['password']);
			 $pw = md5($pw);
			 			 
             $insert_query = mysql_query("INSERT INTO account(Username,Password,Permissions) VALUES('$user','$pw',1)");
			
			 echo "Sie haben sich erfolgreich registriert ! ( Weiterleitung in 2 Sekunden... )";
			?>
			<meta http-equiv="refresh" content="2; URL=index.php">
			<?php
		   }	
			if(isset($_POST['login']) && ((empty($_POST['username']) || empty($_POST['password'])) || (empty($_POST['username']) && empty($_POST['password']))))
		   {
			   echo "Es ist notwendig einen Benutzernamen und ein Passwort einzugeben !";
		   }	   		   
			?>
	  </center>
	</div>
  <div id="body_right">
	  	<a href="register.php" style="position:absolute; margin-left: 225px; margin-top: -130px"></a>
	</div>
	</body>
  <div id="footer">
    <center><a href="https://github.com/SNIP-Team/SNIP">>>> Folge uns auf Github <<<</a></center>
  </div>
  </body>
</html>
