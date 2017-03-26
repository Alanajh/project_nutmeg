<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nutmeg - Help</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../javascript/help_2.js"></script>
	<link id="pageStyle" rel="stylesheet" href="css/themes/main/nutmeg.css">
	<script>
	$(document).ready(function(){
		$("button").click(function(){
			$("#1").animate({
				 width: '0px',
		         opacity: '0.5',
		         height: '0px'
			});
			$("#2").animate({
				 width: 100%,
		         opacity: '0.5',
		         height: '0px'		
			});
			$("#3").animate({
				 width: '0px',
		         opacity: '0.5',
			});
			$("#4").animate({
				 width: '0px',
		         opacity: '0.5',
		         height: '0px'
			});
			$("#5").animate({
				 width: '0px',
		         opacity: '0.5',
		         x: '34%'
			});
			$("#6").animate({
				
			});
		});
	});
	</script>
</head>
<body>
<button id="move">go time</button>
	<div class="row" style="height:100%">
		<div id="1" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:33%;">Themes</div>
		<div id="2" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:33%;">Tests</div>
	
		<div id="3" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:33%;">Room Reach</div>
		<div id="4" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:33%;">Live</div>
	
		<div id="5" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:34%;">Profile</div>
		<div id="6" class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="position:relative;border: solid black 2px;height:34%;">Credits</div>
	</div>
</body>
</html>