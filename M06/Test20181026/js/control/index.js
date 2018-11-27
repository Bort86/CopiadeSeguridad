var arrayButtons;

window.onload = function(){
  var button1, button2, button3, button4;
  button1 = "<button class='btn btn-primary' onclick='currentDate()'>\
  Current date/time</button>";
  button2 = "<button class='btn btn-secondary' onclick='fullYear()'>\
  Full year</button>";
  button3 = "<button class='btn btn-success' onclick='month2Digits()'>\
  Month 2 digits</button>";
  button4 = "<button class='btn btn-warning' onclick='setYear(2020)'>\
  Set year 2020</button>";

  arrayButtons = [button1, button2, button3, button4];

};

function showButtons(){
  document.getElementById("divIntro").style.display = "none";
  document.getElementById("divButtons").style.display = "block";
  document.getElementById("divResult").style.display = "block";

  var numBut = document.getElementById("numButtons").value;

  for (var i = 0; i < numBut; i++) {
    document.getElementById("divButtons").innerHTML+=arrayButtons[i];
  }

}

function goBack(){
  document.getElementById("divIntro").style.display = "block";
  document.getElementById("divButtons").style.display = "none";
  document.getElementById("divResult").style.display = "none";
  document.getElementById("numButtons").value = "";
  document.getElementById("divButtons").innerHTML = "";
  document.getElementById("pResult").innerHTML = "";
}

function currentDate(){
  var d = new Date();
  document.getElementById("pResult").innerHTML=d;

}

function fullYear(){
  var d = new Date();
  var year = d.getFullYear();
  document.getElementById("pResult").innerHTML= year;

}

function month2Digits(){
  var d = new Date();
  var month = d.getMonth();
  document.getElementById("pResult").innerHTML= month;
}

function setYear(pYear){
  var d = new Date();
  d.setFullYear(pYear);
  document.getElementById("pResult").innerHTML= d;
}
