<?php

ignore_user_abort(false);

//error_reporting(0);
function interimFileName($str) {
  return $str.".txt";
}


try{
  $returnTxt = file_get_contents(interimFileName($_POST['generationDateStamp']));
  $returnObj = json_decode( $returnTxt, true);
  echo(json_encode($returnObj));
} catch(Exception $e) {
  echo 'error encountered';
}

?>
