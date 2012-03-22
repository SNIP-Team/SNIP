<?php
/*
  session_start();

  error_reporting(1);
 
  include_once "php/config.php";
  include_once "php/functions.php";
  
  $connect = mysql_connect(Host,MySqlUser,MySqlPw)
  or die("Mysql can't connect to the Datebase. Error Code : " . mysql_error());
  
  mysql_select_db(DB,$connect)
  or die("Mysql can't select the Datebase. Error Code : " . mysql_error());
  
  if($_COOKIE['CookieLoggedIn'] == "1" || $_SESSION['SessionLoggedIn'] == "1")
  {
  ?>
	<meta http-equiv="refresh" content="0; URL=config.php">
  <?php
  }*/
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>SNIP - Login</title>

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
<body style="margin-left:191px;">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">SNIP</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
		<a href="http://github.com/SNIP-Team/SNIP"><img style="position: absolute; top: 40px; right: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/7afbc8b248c68eb468279e8c17986ad46549fb71/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub"></a>

		 <div id="body_left">
	</div>
	<div id="body_main">
	   <center>
	     <img src="img/Login.png" style="width:397px;height:182px;margin-bottom:-117px;" />
		   	     <div id="login_form_text">
					<b>Login</b>
				</div>
	     <form input="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="margin-bottom: 35px; margin-top:-17px;">
	      Benutzername : <input type="text" size="22" maxlength="18" name="username" style="margin-bottom: 4px; margin-left: 16px;" placeholder="Benutzername" required="required" autofocus="autofocus" pattern="\w{6,}"/><br />
		  Passwort : <input type="password" size="22" maxlength="18" name="password" style="margin-left: 45px; margin-top:2px;" placeholder="Passwort" required="required" pattern="\w{6,}" /><br />
		  <input type="checkbox" name="BeLoggedIn" size="22" style=" margin-bottom:7px;"> <span style="margin-right: -137px !important;">Eingeloggt bleiben</span>
		  <input class="btn btn-primary" type="submit" value="Einloggen" name="login" style="margin-left: 289px; margin-top: 10px;" />
	     </form>
		 <a href="register.php">Noch nicht registriert ?</a><p>
		 <?php
		   if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password']))
		   {
		     $user = magic_quotes_protect($_POST['username']);
			 $pw = magic_quotes_protect($_POST['password']);
			 
			 $connect_query = mysql_query("SELECT * FROM account WHERE Username LIKE '$user'");

			 $res = mysql_fetch_assoc($connect_query);
			 
             if($res[Password] == md5($pw))
			 {
			   echo "<script>alert('Erfolgreich eingeloggt !');</script>";
			   
			   if(isset($_POST['BeLoggedIn']))
			   {
			     setcookie("CookieLoggedIn", "1", time() + 86400); // 1 Tag
			   }
			   else
			   {
			     $_SESSION['SessionLoggedIn'] = "1";
			   }
			 }
			 else
			 {
			   echo "<script>alert('Fehler beim einloggen !');</script>";
			 }
		   }	   		   
		 ?>
	  </center>
	</div>
	<div id="body_right">
	  	<a href="register.php" style="position:absolute; margin-left: 225px; margin-top: -130px"></a>
	</div>
		
    </div><!-- /container -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<!-- scripts concatenated and minified via ant build script-->
<script src="js/libs/bootstrap/transition.js"></script>
<script src="js/libs/bootstrap/collapse.js"></script>

<script src="js/script.js"></script>
<!-- end scripts-->

</body>
</html>
