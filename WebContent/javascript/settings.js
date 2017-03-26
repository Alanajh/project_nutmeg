 

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

$(document).ready(function(){
    $("#chili").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/chili.css');
    });
});

$(document).ready(function(){
    $("#daisyStems").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/daisy_stems.css');
    });
});

$(document).ready(function(){
    $("#olives").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/olives.css');
    });
});

$(document).ready(function(){
    $("#pleasant").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/pleasant.css');
    });
});

$(document).ready(function(){
    $("#seaMint").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/sea_mint.css');
    });
});

$(document).ready(function(){
    $("#plum").click(function(){
    	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
    });
});
function redirect(){
	window.location.href = "http://192.168.1.205/Project_Nutmeg/WebContent/index.php";
	document.getElementById('pageStyle').setAttribute('href', 'css/themes/plum.css');
}
 
