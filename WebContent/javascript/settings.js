 

$(document).ready(function(){
    $("div #menuBtns #setting").click(function(){
    	window.open("settings.php", "_self");
    });	
});

$(document).ready(function(){
    $("#default").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/main/nutmeg.css');
    });
});

$(document).ready(function(){
    $("#plum").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
    	function setCookie(cname,cvalue,exdays) {
    	    var d = new Date();
    	    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    	    var expires = "expires=" + d.toGMTString();
    	    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    	}
    	
    	function getCookie(cname) {
    	    var name = cname + "=";
    	    var decodedCookie = decodeURIComponent(document.cookie);
    	    var ca = decodedCookie.split(';');
    	    for(var i = 0; i < ca.length; i++) {
    	        var c = ca[i];
    	        while (c.charAt(0) == ' ') {
    	            c = c.substring(1);
    	        }
    	        if (c.indexOf(name) == 0) {
    	            return c.substring(name.length, c.length);
    	        }
    	    }
    	    return "";
    	}

    	function checkCookie() {
    	    var user=getCookie("username");
    	    if (user == "plum") {
    	    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
    	    	window.location.href = "http://192.168.1.205/Project_Nutmeg/WebContent/index.php";
    	    } else {
    	       user = document.getElementById('pageStyle').setAttribute('href', 'css/themes/main/nutmeg.css');
    	       if (user != "" && user != null) {
    	           setCookie("username", user, 30);
    	       }
    	    }
    	}
    });
});

$(document).ready(function(){
    $("#muted").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/muted.css');
    });
});

$(document).ready(function(){
    $("#powder").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/powder.css');
    });
});

$(document).ready(function(){
    $("#fresh").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/fresh.css');
    });
});


function redirect(){
	window.location.href = "http://192.168.1.205/Project_Nutmeg/WebContent/index.php";
	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
}
 
function cookies(){
	var x = document.cookie;
}
