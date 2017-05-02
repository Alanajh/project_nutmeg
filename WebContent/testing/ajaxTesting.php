<!DOCTYPE html>
<head>
	<title></title>

</head>
<body>

<table id="demo">Core</table>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "http://www.stands4.com/services/v2/abbr.php?uid=5704&tokenid=iaXB5Yu5tb0IRiBA&term=asap", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Abbreviation</th><th>Meaning</th></tr>";
  var x = xmlDoc.getElementsByTagName("result");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("categoryname")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("definition")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>
</body>
</html>