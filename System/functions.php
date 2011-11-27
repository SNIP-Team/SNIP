<?php

  function magic_quotes_protect($check_text)
  {
    $marks = array("\\","AND","OR","?",";",".","||","&&","\"","\'");
	
	$ckeck_text = str_replace($marks,"",$check_text);
	
	return $check_text;
  }

?>