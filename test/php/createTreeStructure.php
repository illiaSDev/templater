<?php
function createTreeStructure($newDir) {
  
  $structure = $newDir.'Через КУА\Фізична особа - ФОП\P - Комірка';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
  $structure = $newDir.'Через КУА\Фізична особа - ФОП\А - Квартира';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
  $structure = $newDir.'Через КУА\Фізична особа - ФОП\С - Комерція';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
  
  $structure = $newDir.'Через КУА\Юридична особа\P - Комірка';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
  $structure = $newDir.'Через КУА\Юридична особа\А - Квартира';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
  $structure = $newDir.'Через КУА\Юридична особа\С - Комерція';
  mkdir(mb_convert_encoding($structure, 'cp1251'), 0777, true);
} 
?>