<html>
<head>
<title>
adasdsd  
</title>
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
<style>
* {margin: 0px;font-family: "Ubuntu Mono";}
body {padding: 20px;}
  .button {
    background-color: lightgrey;
    border-radius: 10px;
    padding: 5px;
    width: 50%;
    cursor: pointer;
    z-index: 5;
  }
  .button:hover {background-color: grey;}
  .info {
    cursor: pointer;
    position: relative;
    transition: height 0.3s;
    overflow: hidden;
    background-color: white;
    color: black;
    width: 50%;
  }
  .info div p {transition: all 0.2s; margin: 6px;}
  .info div p:nth-of-type(5n-4):hover,
  .info div p:nth-of-type(5n-3):hover {background-color: grey;color: white;}
  .info div p span {color: red; background-color: yellow;}
</style>
</head>
<body>
<?php

echo "<h1>".getcwd()."</h1>";
echo "<h1>Error logs</h1>";

function getRenderedHTML($z){
  ob_start();
  echo "<div><h2 class='button'>$z</h2>";
  echo "<h4 class='info'><div>";
  $file = fopen('logs/'.$z, "r");
  while(! feof($file)) {
    echo "<p>".fgets($file). "</p>";
  }
  fclose($file);
  echo "</div></h4></div>";
  $var=ob_get_contents(); 
  ob_end_clean();
  return $var;
}

$files = scandir('logs');
foreach ($files as $z){
  if ($z != "." && $z != "..") {
    echo getRenderedHTML($z);
  } 
}
?>
<script>
  function makeAppropriateName() {
    var headers = document.querySelectorAll('h2');

    for (var i = 0; i < headers.length; i++) {
      headers[i].innerHTML = new Date(+headers[i].innerHTML.slice(0, -7));
      headers[i].nextElementSibling.style.height = "0px";
      headers[i].onclick = function(e)  {
        if (e.ctrlKey) {
          deleteAjaxRequest(this);
          this.parentElement.removeChild(this);
          return;
        }
        toggleInfo(this);
      };
        
      var pElements = headers[i].nextElementSibling.firstElementChild.children

      for (var j = 0; j < pElements.length; j++) {
        if (j % 5 == 0)
          pElements[j].innerHTML = "<span>" + pElements[j].innerHTML.slice(0, 41) + "</span>" + pElements[j].innerHTML.slice(41);
        if (j % 5 == 1)
          pElements[j].innerHTML = "<span>" + pElements[j].innerHTML.slice(0, 8) + "</span>" + pElements[j].innerHTML.slice(8);
        if (j % 5 == 3)
          pElements[j].innerHTML = "<span>" + pElements[j].innerHTML + "</span>";
      }
    }
  }

function toggleInfo(elem) {
  if (getComputedStyle(elem.nextElementSibling).height == "0px") {
    elem.nextElementSibling.style.height = elem.nextElementSibling.scrollHeight + "px";
    elem.style.backgroundColor= "green";
    elem.style.color = "white";
  }
  else   {
    elem.nextElementSibling.style.height = "0px";
    elem.style.backgroundColor  = "lightgrey";
    elem.style.color = "black";
 }
}

function deleteAjaxRequest(elem) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", 'deleteLog.php', true)
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
  var json='logName=' + Date.parse(elem.innerHTML) + 'log.txt';
  xhr.send(json);
}

  document.onload = makeAppropriateName();
</script>
</body>
</html>