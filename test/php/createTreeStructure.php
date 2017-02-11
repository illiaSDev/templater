<?php
function createOutputDir($newDir) {
  mkdir(mb_convert_encoding($newDir, 'cp1251'), 0777, true);
} 

function getTemplateDocNameWithForwardingSlash($str) {
  $lastOccurance = strrpos($str, "/");
  return substr($str, $lastOccurance);
}
?>