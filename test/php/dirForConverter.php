<?php 
function toPdfConversion($str, $newDir) {
  $filepath = '"' . getcwd() . '\\'.$newDir . $str . '"';
  
  $command = 'E:\Illia\program\soffice.exe -headless -convert-to pdf ' . $filepath .' -outdir "'. getcwd() . '\\' .$newDir .'"';
  $command = mb_convert_encoding($command, 'cp1251');

  exec($command);

  if(connection_aborted() == 1) {
    
   // kill_the_process();//this will kill the running process launched by script
    die("Error");
  }
}

function dirForConverter($str) {
  $lastOccurance = strrpos($str, "/");
  return substr($str, 0, $lastOccurance);
}
?>