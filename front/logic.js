alert(document.cookie);
var calendar = {
  "01": "січня",
  "02": "лютого",
  "03": "березня",
  "04": "квітня",
  "05": "травня",
  "06": "червня",
  "07": "липня",
  "08": "серпня",
  "09": "вересня",
  "10": "жовтня",
  "11": "листопада",
  "12": "грудня"
}
var anotherCalendar = ["01",  "02",  "03",  "04", "05",  "06",  "07",  "08",  "09",  "10",  "11",  "12"];

function ukrainazeDates(date, anotherCalendar) {
  var dateMas = date.split('/');
  return "«" + dateMas[1] + "»" + " " + calendar[dateMas[0]] + " " + dateMas[2];
}

function getOsobaInputs(whichDiv, data) {
  var inputs = document.querySelectorAll(whichDiv + " input");

  for (var i = 0; i < inputs.length; i++){
    if (inputs[i].type == "radio") {
      if (inputs[i].checked) {
        data[inputs[i].parentElement.parentElement.id] = trimWhitespaceCharacters(inputs[i].nextSibling.nodeValue);
      }
      continue;
    }

    if (trimWhitespaceCharacters(inputs[i].value) == '') {
      alert("Заповніть поле '" + inputs[i].placeholder + "'");
      return false;
    } else {
      data[inputs[i].id] = trimWhitespaceCharacters(inputs[i].value);
    }
  }

  return true;
}

function scenarioOneChoose(person, basement) {
  var obj = {};
  obj['FO'] = {};
  obj['YO'] = {};

  obj['FO']['А - Комірка'] = 0;
  obj['FO']['Р - Квартира'] = 1;
  obj['FO']['С - Комерція'] = 2;
  obj['YO']['А - Комірка'] = 3;
  obj['YO']['Р - Квартира'] = 4;
  obj['YO']['С - Комерція'] = 5;

  return obj[person][basement];
}

function scenarioTwoChoose(person, basement, payment) {
  var obj = {};

  obj['FO'] = {};
  obj['YO'] = {};

  obj['FO']['Р - Квартира'] = {};
  obj['FO']['А - Комірка'] = {};
  obj['FO']['С - Комерція'] = {};
  obj['YO']['Р - Квартира'] = {};
  obj['YO']['А - Комірка'] = {};
  obj['YO']['С - Комерція'] = {};

  obj['FO']['А - Комірка']['rozstr'] = 0;
  obj['FO']['Р - Квартира']['rozstr'] = 1;
  obj['FO']['С - Комерція']['rozstr'] = 2;
  obj['YO']['А - Комірка']['rozstr'] = 3;
  obj['YO']['Р - Квартира']['rozstr'] = 4;
  obj['YO']['С - Комерція']['rozstr'] = 5;
  obj['FO']['А - Комірка']['razova'] = 6;
  obj['FO']['Р - Квартира']['razova'] = 7;
  obj['FO']['С - Комерція']['razova'] = 8;
  obj['YO']['А - Комірка']['razova'] = 9;
  obj['YO']['Р - Квартира']['razova'] = 10;
  obj['YO']['С - Комерція']['razova'] = 11;

  return obj[person][basement][payment];
}


  function getDateStamp() {

    var dateStamp = document.cookie.split(";").filter(function(name) {
      return name.search(/generationDateStamp/) != -1;
    });

    if (dateStamp.length == 0)
      return false;

    dateStamp = dateStamp[0].split('=');
    
    return dateStamp[1];
  }

  function trimWhitespaceCharacters(str) {
    while (str[0] == " " || str[0] == "\n") {
      str = str.slice(1);
    }
    while( str[str.length-1] == " " || str[str.length-1] == "\n") {
      str = str.slice(0, str.length-1);
    }
    return str;
  }



  function stageOne() {
    var todayPluseOneWeek = new Date();
    todayPluseOneWeek.setDate(todayPluseOneWeek.getDate() + 7);
    alert(todayPluseOneWeek);
    document.cookie = "generationDateStamp=" + Date.parse(new Date()) + ";expires=" + todayPluseOneWeek;
    alert(document.cookie);
    var insertData = {};
    var whichDivOsoba = document.querySelector('.personType div.checked');
    var dictionary = {'FO': ".fizOsoba", 'YO': ".yurOsoba"};

    if (!getOsobaInputs(dictionary[whichDivOsoba.parentElement.classList], insertData)) {
      return;
    }

    var divBasement = document.querySelector('.basement');
    insertData['stageOneScenario'] = scenarioOneChoose(whichDivOsoba.parentElement.classList, divBasement.querySelector('select').value);

    var divPaymentType = document.querySelector('.paymentType div.checked');
    insertData['stageTwoScenario'] = scenarioTwoChoose(
      whichDivOsoba.parentElement.classList,
      divBasement.querySelector('select').value,
      divPaymentType.parentElement.classList);

    if (!getOsobaInputs(".basement", insertData)) {
      return;
    }

    var dependString = "";

    var dependGens = document.querySelectorAll('.dependGen');

    for (var i = 0; i < dependGens.length; i++) {

      if (getComputedStyle(dependGens[i]).display != "none") {
        dependString += "\n";
        
        var dependGenInputs = dependGens[i].querySelectorAll('input');

        for (var j = 0; j < dependGenInputs.length; j++)
          if (trimWhitespaceCharacters(dependGenInputs[j].value) == "")
            return alert("Заповніть поле '" + dependGenInputs[j].placeholder + "'");
          else
            dependString += dependGenInputs[j].value + "  ";
      }

      
    }

    insertData['dependString'] = dependString;   
    insertData['single_cal2'] = document.getElementById('single_cal2').value;   
    insertData['surnameAndInitials'] = insertData['individual_surname'] + "." + insertData['individual_name'].slice(0, 1) + "." + insertData['individual_middlename'].slice(0, 1);

    //insertData['expireDate'] = 

    insertData['single_cal1_ukrainazed'] = ukrainazeDates(insertData['single_cal1']);
    insertData['single_cal2_ukrainazed'] = ukrainazeDates(insertData['single_cal2']);
    insertData['single_cal3_ukrainazed'] = ukrainazeDates(insertData['single_cal3']);

    var datePlusThree = new Date(insertData['single_cal2']);
    datePlusThree.setDate(datePlusThree.getDate() + 3);
    insertData['expireDate'] = ukrainazeDates(anotherCalendar[datePlusThree.getMonth()] + "/" + datePlusThree.getDate() + "/" + datePlusThree.getFullYear(), true);
    //for (var z in insertData)
      //alert("insertData[" + z + "] = " + insertData[z]);
    /*var xhr = new XMLHttpRequest();

    xhr.open("POST", '../../stageOne.php', true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

    xhr.onreadystatechange = function() { // (3)
      if (xhr.readyState != 4) return;

      if (xhr.status != 200) {
        alert(xhr.status + ': ' + xhr.statusText);
      } else {
        ajaxResponse.innerHTML = xhr.responseText;
      }

    }
    var json='requestData=' + JSON.stringify(insertData) + '&generationDateStamp=' + getDateStamp() + "&stageOneScenario=0";
    xhr.send(json);*/

  }

  function stageTwo() {

    if (!getDateStamp())
      return alert("Previous data is unset. Please, pass first stage of creation.");

    var inputs = document.querySelectorAll('div.formStageTwo input');
    
    var insertData = {};
    for (var i = 0; i < inputs.length; i++)
      if (trimWhitespaceCharacters(inputs[i].value) == '') {
        insertData[inputs[i].id] = "???????";
      } else {
        insertData[inputs[i].id] = trimWhitespaceCharacters(inputs[i].value);
      }

    var xhr = new XMLHttpRequest();

    xhr.open("POST", '../../stageTwo.php', true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

    xhr.onreadystatechange = function() { // (3)
      if (xhr.readyState != 4) return;

      if (xhr.status != 200) {
        alert(xhr.status + ': ' + xhr.statusText);
      } else {
        ajaxResponse.innerHTML = xhr.responseText;
      }

    }
    var json='requestData=' + JSON.stringify(insertData) + '&generationDateStamp=' + getDateStamp() + "&stageTwoScenario=0";
    xhr.send(json);

  }

  function stage1Navigation(elem) {

    document.getElementById('step-2').style.height = '0px';
    elem.classList.remove('disabled');
    elem.classList.add('selected');
    elem.parentElement.nextElementSibling.firstElementChild.classList.add('disabled');
    elem.parentElement.nextElementSibling.firstElementChild.classList.remove('selected');
  }

  function stage2Navigation(elem) {
    document.getElementById('step-2').style.height = document.getElementById('step-2').scrollHeight + 'px';
    elem.classList.remove('disabled');
    elem.classList.add('selected');
    elem.parentElement.previousElementSibling.firstElementChild.classList.add('disabled');
    elem.parentElement.previousElementSibling.firstElementChild.classList.remove('selected');
  }
  function fillFormWithFirstStageData(obj) {
    for (var item in obj) {
     // alert(item);
      if (item != "stageOneScenario" 
        && item != "stageTwoScenario" 
        && item != "dependString" 
        && item != "surnameAndInitials" 
        && item != "expireDate" 
        && item != "single_cal1_ukrainazed" 
        && item != "single_cal1_ukrainazed"
        && item != "single_cal1_ukrainazed"
        )
        document.getElementById(item).value = obj[item];
    }
  }
  function restoreForm() {

    if (getDateStamp()) {
      var xhr = new XMLHttpRequest();

      xhr.open("POST", '../../restoreForm.php', true)
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')

      xhr.onreadystatechange = function() { // (3)
        if (xhr.readyState != 4) return;

        if (xhr.status != 200) {
          alert(xhr.status + ': ' + xhr.statusText);
        } else {
          if (xhr.responseText != 'error encountered')
            fillFormWithFirstStageData(JSON.parse(xhr.responseText));
        }

      }
      var json='generationDateStamp=' + getDateStamp();
      xhr.send(json);
    }    

  }
  restoreForm();
