 

$(document).ready(function(){
    $("div #menuBtns #setting").click(function(){
    	window.open("settings.php", "_self");
    });	
});



function redirect(){
	window.location.href = "http://192.168.1.205/Project_Nutmeg/WebContent/index.php";
	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
}
 
function cookies(){
	var x = document.cookie;
}
