<?php


ignore_user_abort(false);

$newDir = "docs".$_POST['generationDateStamp'];

require_once 'vendor/autoload.php';
include 'php/stageTwoPaths.php';
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
include 'php/createTreeStructure.php';
createOutputDir($newDir);
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
include 'php/dirForConverter.php';

function interimFileName($str) {
  return $str.".txt";
}

function fillAndSaveTemplate($str, $newDir, $inputNames, $inputValues) {
  $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(mb_convert_encoding($str, 'cp1251'));
  //------------------------------------------------------------------------------------------------------------------------------------------------------------
  $templateProcessor->setValue($inputNames, $inputValues);
  //------------------------------------------------------------------------------------------------------------------------------------------------------------

  $newPath = $newDir . getTemplateDocNameWithForwardingSlash($str);

  $newPath = mb_convert_encoding($newPath, 'cp1251');
  
  $templateProcessor->saveAs($newPath);
}

$previousData = file_get_contents(interimFileName($_POST['generationDateStamp']));
$requestData = json_decode($_POST['requestData'], true);
$inputNames = array();
$inputValues = array();

foreach($requestData as $x => $x_value) {
  array_push($inputNames, $x);
  array_push($inputValues, $x_value);
}

array_push($inputNames, 'firstNumber');
array_push($inputNames, 'secondNumber');
array_push($inputValues, $requestData['firstNumber']);
array_push($inputValues, $requestData['secondNumber']);


for ($x = 0; $x < count($obj[$_POST['stageTwoScenario']]); $x++) {

  fillAndSaveTemplate($obj[$_POST['stageTwoScenario']][$x], $newDir); 

  //------------------------------------------------------------------------------------------------------------------------------------------------------------

  toPdfConversion(getTemplateDocNameWithForwardingSlash($obj[$_POST['stageTwoScenario']][$x]), $newDir);
}



$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\\'.$newDir.'.rar" "'.getcwd().'\\'.$newDir.'\\*.pdf"';
echo exec($rarCmd);

$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\buf.rar" "'.getcwd().'\\'.$newDir.'\\*"';
echo exec($rarCmd);
unlink('buf.rar');

rmdir($newDir);


//$result = json_decode($_POST['requestData'], true);
//echo $_POST['requestData'];

//file_put_contents(interimFileName($_POST['generationDateStamp']), $_POST['requestData']);
/*function EH($e) {echo $e->getMessage();}
//set_error_handler(EH);
set_exception_handler(EH);
if (!file_get_contents(interimFileName($_POST['generationDateStamp'])))
  throw new Exception("No such file");
else 
  echo var_dump(json_decode(file_get_contents(interimFileName($_POST['generationDateStamp'])), true));*/



?>
<p>asddddddddddd</p>
