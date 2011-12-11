<?php

  function magic_quotes_protect($check_text)
  {
    $marks = array("AND","OR","?",";",".","||","&&","\"","\'");
	
	$new_text = str_replace($marks,"",$check_text);
	
	return $new_text;
  }
  
?>