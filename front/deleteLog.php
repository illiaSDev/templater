<?php
$path = "logs/" . $_POST['logName'];
unlink($path);
?>