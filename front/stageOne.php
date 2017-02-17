<?php

ignore_user_abort(false);

//error_reporting(0);

$newDir = "docs".$_POST['generationDateStamp'];

require_once 'vendor/autoload.php';
include 'php/stageOnePaths.php';
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
  //-------------------------------------------------------------------------------------------------------------------------------------------------------------
$requestData = json_decode($_POST['requestData'], true);
$inputNames = array();
$inputValues = array();

foreach($requestData as $x => $x_value) {
  array_push($inputNames, $x);
  array_push($inputValues, $x_value);
}

for ($x = 0; $x < count($obj[$_POST['stageOneScenario']]); $x++) {

  try {

    fillAndSaveTemplate($obj[$_POST['stageOneScenario']][$x], $newDir, $inputNames, $inputValues); 

  } catch (Exception $e) {

    $logFileName = "logs/".$_POST['generationDateStamp']."log.txt";
    $exceptionMessage = "Exception happened in fillAndSaveTemplate: ".mb_convert_encoding($e->getMessage(), 'utf-8').PHP_EOL."In file: ".$obj[$_POST['stageOneScenario']][$x];
    $exceptionMessage = $exceptionMessage.PHP_EOL."========================================================".PHP_EOL;
    file_put_contents($logFileName, $exceptionMessage, FILE_APPEND);
    //----------------------------------------------------------------------------------------------------------------------------------------------------------
    $userLogFileName = $newDir."/README.txt";
    $userLogMessage = ">>".$obj[$_POST['stageOneScenario']][$x]." wasn`t filled by Templater".PHP_EOL;
    file_put_contents($userLogFileName, $userLogMessage, FILE_APPEND);
  }

  //------------------------------------------------------------------------------------------------------------------------------------------------------------
  $fileToConvert = $newDir . getTemplateDocNameWithForwardingSlash($obj[$_POST['stageOneScenario']][$x]);

  if (file_exists(mb_convert_encoding($fileToConvert, "cp1251")))
    toPdfConversion(getTemplateDocNameWithForwardingSlash($obj[$_POST['stageOneScenario']][$x]), $newDir);
  else {
    $fileToConvert = ">>".$fileToConvert." wasn`t converted to PDF".PHP_EOL;
    file_put_contents($userLogFileName, $fileToConvert, FILE_APPEND);
    file_put_contents($logFileName, $fileToConvert, FILE_APPEND);
    file_put_contents($logFileName, "========================================================".PHP_EOL, FILE_APPEND);
    
  }
}



if (file_exists($userLogFileName))
  file_put_contents($userLogFileName, "========".PHP_EOL."Please, call application support for further details,".PHP_EOL."or try launching both stages of templating again".PHP_EOL, FILE_APPEND);

$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\\'.$newDir.'.rar" "'.getcwd().'\\'.$newDir.'\\*.pdf"';
exec($rarCmd);

$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\\'.$newDir.'.rar" "'.getcwd().'\\'.$newDir.'\\*.txt"';
exec($rarCmd);

$rarCmd = '"C:\Program Files\WinRAR\Rar.exe" a -ep1 -r -m5 -df "'.getcwd().'\buf.rar" "'.getcwd().'\\'.$newDir.'\\*"';
exec($rarCmd);
unlink('buf.rar');

rmdir($newDir);

file_put_contents(interimFileName($_POST['generationDateStamp']), $_POST['requestData']);


//echo var_dump(json_decode(file_get_contents(interimFileName($_POST['generationDateStamp'])), true));


?>

<p>asddddddddddd</p>
