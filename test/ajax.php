<?php
$result = json_decode($_POST['requestData'], true);
$i = 0;
foreach($result as $x => $x_value) {
    $fields[$i] = $x;
    $values[$i] = $x_value;
    $i = $i + 1;
}

foreach($fields as $x ) {
    echo "<br>$x<br>";
}
foreach($values as $x ) {
    echo "<br>$x<br>";
}

 ?>
