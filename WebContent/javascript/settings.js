$(document).ready(function(){
    $("div #menuBtns #setting").click(function(){
    	window.open("settings.php", "_self");
    });	
});

function swap(sheet){
	document.getElementById('pageStyle').setAttribute('href', sheet);
}