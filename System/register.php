<?php

  session_start(); // session
 
  include_once "config.php";
  include_once "functions.php";
  
  $connect = mysql_connect(Host,MySqlUser,MySqlPw)
  or die("Mysql can't connect to the Datebase. Error Code : " . mysql_error());
  
  mysql_select_db(DB,$connect)
  or die("Mysql can't select the Datebase. Error Code : " . mysql_error());
  
?>