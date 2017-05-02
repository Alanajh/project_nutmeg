<!DOCTYPE html>
<html>
<body>

<div id='show'></div>

<script>
display(0);

function display(i) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this, i);
        }
    };
    xmlhttp.open("GET", "http://www.stands4.com/services/v2/abbr.php?uid=5704&tokenid=iaXB5Yu5tb0IRiBA&term=, true);
    xmlhttp.send();
}

function myFunction(xml, i) {
    var xmlDoc = xml.responseXML; 
    x = xmlDoc.getElementsByTagName("result");
    document.getElementById("show").innerHTML = "Abbreviaton: " +
    x[i].getElementsByTagName("term")[0].childNodes[0].nodeValue + "<br>Meaning: " +
    x[i].getElementsByTagName("definition")[0].childNodes[0].nodeValue;
}
</script>

</body>
</html>
