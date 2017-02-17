<?php

ignore_user_abort(false);

//error_reporting(0);
function interimFileName($str) {
  return $str.".txt";
}



  if (file_exists(interimFileName($_POST['generationDateStamp']))) {
    $returnTxt = file_get_contents(interimFileName($_POST['generationDateStamp']));
    echo $returnText;
  }
  else echo 'error encountered';



?>
