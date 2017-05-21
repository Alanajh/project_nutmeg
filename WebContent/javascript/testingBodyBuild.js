
function grab(){
	alert('your selection(s) has been saved.');
	var sel = document.getElementById("subject");
	var value = sel.options[sel.selectedIndex].value; // or sel.value;
	var text = sel.options[sel.selectedIndex].text;
	
	document.getElementById("rightPanel").innerHTML = value;
}

function enter(){
	if(document.getElementById("rightPanel").innerHTML == "geography"){
		window.open("http://localhost:8886/testing/ajaxTesting.php");
	}
}