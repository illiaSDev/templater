<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<?php
ignore_user_abort(false);

$newDir = "compress\\";

require_once 'vendor/autoload.php';
include 'php/obj.php';
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
include 'php/createTreeStructure.php';
createTreeStructure($newDir);
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
include 'php/dirForConverter.php';



function fillAndSaveTemplate($str, $newDir) {
  $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(mb_convert_encoding($str, 'cp1251'));
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
  $templateProcessor->setValue('Name', 'John Doe');
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
  $newPath = $newDir . $str;

  $newPath = mb_convert_encoding($newPath, 'cp1251');
  
  $templateProcessor->saveAs($newPath);
}
//$result = json_decode('{"name": "John", "surname": "Doe", "tel": 1234567 }');



for ($x = 0; $x < count($obj); $x++) {


  fillAndSaveTemplate($obj[$x], $newDir);
  
  
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
  $filepath = '"' . getcwd() . '\\'.$newDir . $obj[$x] . '"';

  $command = 'E:\Illia\program\soffice.exe -headless -convert-to pdf ' . $filepath .' -outdir "'. getcwd() . '\\' .$newDir .dirForConverter($obj[$x]).'"';
  $command = mb_convert_encoding($command, 'cp1251');

  exec($command);

  echo (connection_aborted());
  if(connection_aborted() == 1) {
    
   // kill_the_process();//this will kill the running process launched by script
    die("Error");
  }

}


$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\compress1.rar" "'.getcwd().'\\'.$newDir.'*.pdf"';
echo exec($rarCmd);

$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\buf.rar" "'.getcwd().'\\'.$newDir.'*"';
echo exec($rarCmd);
//unlink('buf.rar');

//rmdir($newDir);

?>


<p>asddddddddddd</p>

</body>
</html>
