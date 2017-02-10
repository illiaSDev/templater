<?php 

/*
function shutdown() {
    $error = error_get_last();
    if (
        // если в коде была допущена ошибка
        is_array($error))
         {
        // очищаем буфер вывода (о нём мы ещё поговорим в последующих статьях)
        while (ob_get_level()) {
            ob_end_clean();
        }
        // выводим описание проблемы

       
        die();
    }
        echo("success");
}
register_shutdown_function('shutdown');

function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr";
}

//set error handler
//set_error_handler("customError", E_ALL);

function myException($exception)
{
    echo "<strong>Exception:</strong> " , $exception->getMessage();
}
   // set_exception_handler('myException');

//echo($test);

class Generic
 {

     private $someVar;

     public function __construct($someVar)
     {
         $this->someVar = $someVar;
     }

     public function testValue($someOtherVar)
     {
         if($someOtherVar > 3) {
             throw new Exception('Значение параметра не может быть больше 3!');
         } else {
             echo $this->someVar + $someOtherVar;
         }
     }
 }

    $gen = new Generic(3);
    $gen->testValue(4);*/

?>