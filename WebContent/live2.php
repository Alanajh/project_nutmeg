<!DOCTYPE html>
<html lang="em">
<head>
<title>Nutmeg - Live</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/live2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	<div container="fluid">

<section>
  <div class="userList">
   <!-- USER ONE -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<div class="row">
				  		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				  		<button type="button" class="btn btn-primary"><input type="image" src="src/users/student_girl_1.PNG" style="width:50px; height:50px; align:left;" >AvaRA</button>
	  					<h4>Avapants</h4>
	  					</div>
	  					
	  					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	  					<h5>00/00</h5>
	  					</div>
  					</div>
			  	</div>
		  	</div>
		  	
		  	<!-- USER TWO -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<button type="button" class="btn btn-primary"><input type="image" src="src/Person.png" style="width:50px; height:50px; align:left;" >AliciaRA</button>
  					<h4>Pumpkin</h4>
			  	</div>
		  	</div>
		  	
		  	<!-- USER THREE -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<button type="button" class="btn btn-primary btn-block"><input type="image" src="src/glasses.png" style="width:50px; height:50px; align:left;" id="userFace">RoseH</button>
  					<h4>Little Moccassin</h4>
			  	</div>
		  	</div>
		  	
		  	<!-- USER FOUR -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<button type="button" class="btn btn-primary btn-block"><input type="image" src="src/hipster.png" style="width:50px; height:50px; align:left;" id="userFace">AlanaJH</button>
  					<h4>Laney Jo</h4>
			  	</div>
		  	</div>
		  	
		  	<!-- USER FIVE -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<button type="button" class="btn btn-primary btn-block"><input type="image" src="src/hipster.png" style="width:50px; height:50px; align:left;" id="userFace">AvaRA</button>
  					<h4>Username</h4>
			  	</div>
		  	</div>
		  	
		  	<!-- USER SIX -->
		  	<div class="row">
			  	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="border: solid white 2px;">	
			  		<button type="button" class="btn btn-primary btn-block"><input type="image" src="src/hipster.png" style="width:50px; height:50px; align:left;" id="userFace">AvaRA</button>
  					<h4>Username</h4>
			  	</div>
		  	</div>
  </div>
  <div class="fixedCont">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis mollitia amet ipsam vel saepe, rerum deserunt accusantium ratione reprehenderit eaque unde cumque! Expedita amet molestiae, dolorem porro nam nisi dolorum.
  </div>
</section>

<!-------------------------------------------------------------------------------->
	
</body>
<script>
	$(document).ready(function(){
	$(function(){
		$(document).scroll(function(){
			if($(this).scrollTop() >= $('.userList').offset().top) {
				$(".fixedCont").addClass('active');
			} else {
				$(".fixedCont").removeClass("active");
			}
		});
	});
});
</script>
</html>