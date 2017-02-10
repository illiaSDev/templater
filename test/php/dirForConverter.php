<?php 
function dirForConverter($str) {
  $lastOccurance = strrpos($str, "/");
  return substr($str, 0, $lastOccurance);
}
?>