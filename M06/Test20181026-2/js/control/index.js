function loadData(){
  var frame = window.opener.document;
  var parent = window.opener.parent.document;

  var propertyType = frame.getElementById("propertyType").value;
  var numberProperties = frame.getElementById("numberProperties").value;

  document.getElementById("name").innerHTML=parent.getElementById("myName").value;

  var strClient = "";
  for (var i = 0; i < numberProperties; i++) {
    strClient += "<tr><td>" + propertyType + "</td></tr>";
  }

  document.getElementById("tableClients").innerHTML += strClient;
}
