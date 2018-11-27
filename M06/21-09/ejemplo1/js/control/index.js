window.onload = function(){
  showIntro();
}

function calculateDouble(){
  var num = document.getElementById('txtNumber').value;

  //check if num is a number
  if (isNaN(num)) {
    //if it isn't, show the error message in pResult, commented is in console
    //console.log("The introduced data is not a number");
    document.getElementById("pResult").innerHTML = 'The data introduced is not a number';
    document.getElementById("pResult").classList.remove("text-dark");
    document.getElementById("pResult").classList.add("text-danger");

  } else{
    //otherwise, show the result
    document.getElementById("pResult").innerHTML = 'The result is ' + (num*2);
    document.getElementById("pResult").classList.add("text-dark");
    document.getElementById("pResult").classList.remove("text-danger");
    }

    //show divResult
    document.getElementById('divResult').style.display = "block";

    //hide divIntro
    document.getElementById('divIntro').style.display = "none";
}


function goBack() {
  document.getElementById("txtNumber").value ="";
  showIntro();
}

function showIntro(){
  //Hide divResult
  document.getElementById('divResult').style.display = "none";

  //show divIntro
  document.getElementById('divIntro').style.display = "block";
}
