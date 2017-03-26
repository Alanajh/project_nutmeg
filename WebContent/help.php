<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutmeg - help</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="javascript/settings.js"></script>
    <link id="pageStyle" rel="stylesheet" href="css/themes/help.css">
   
</head>
<body>
<div class="container-fluid">

<!-- HELP SCREEN -->
    <div class="text-center">
        <img src="src/nutmeg_logo.png"/><br>
       <h3>Help</h3>
       <br>
       <br>
       <h3 id="title">Themes</h3>
       <hr>
	   <div align="left">
           <form>
              <input type="radio" name="themes" id="default" value="default" checked> Default<br>
              <input type="radio" name="themes" id="plum" value="plum"> Plum<br>
              <input type="radio" name="themes" id="muted" value="muted"> Muted<br>
              <input type="radio" name="themes" id="powder" value="powder"> Powder<br>
              <input type="radio" name="themes" id="chili" value="chili"> Chili<br>
              <input type="radio" name="themes" id="daisyStems" value="daisyStem"> Daisy Stems<br>
              <input type="radio" name="themes" id="olives" value="olives"> Olives<br>
              <input type="radio" name="themes" id="pleasant" value="pleasant"> Pleasant<br>
              <input type="radio" name="themes" id="seaMint" value="seaMint"> Sea Mint<br>
              <input type="radio" name="themes" id="fresh"value="fresh"> Fresh
            </form>
		</div>
		<br>
			
       <h3 id="title">Tests</h3>
       <hr>
	    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="left">
			  <input type="radio" id="tests" value="default_test" checked> Test 1 (Default)<br>
			  <img src="http://placehold.it/150x150">
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"align="left">
			 <input type="radio" id="tests" value="test2"> Test 2<br>
			  <img src="http://placehold.it/150x150">
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" align="left">
			 <input type="radio" id="tests" value="test3"> Test 3<br>
			  <img src="http://placehold.it/150x150">
			</div>
		</div>
		</div>
		<br>
		
       <h3 id="title">Room Reach</h3>
       <hr>
	    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="left">
			  <input type="radio" id="rr" value="room_reach_1" checked> Room Reach 1 (Default)<br>
			  <img src="http://placehold.it/150x150">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="left">
			 <input type="radio" id="rr" value="room_reach_2"> Room Reach<br>
			  <img src="http://placehold.it/150x150">
			</div>
		</div>
		</div>
		<br>
		
       <h3 id="title">Live</h3>
	   <hr>
	   <div class="container-fluid">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="left">
			  <input type="radio" id="live" value="live_1" checked> Live 1 (Default)<br>
			  <img src="http://placehold.it/150x150">
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" align="left">
			 <input type="radio" id="live" value="live_2"> Live 2<br>
			  <img src="http://placehold.it/150x150">
			</div>
		</div>
		</div>
	   <br>
       
       <h3 id="title">Profile</h3>
	   <hr>
	   <div class="container-fluid" align="left">
	   <form>
		<p> Profile name: </p>
		<p> Location: </p>
		<p> Change password: ********* </p> 
		<input type="text"/> <button type="submit"> change password </button>
		</form>
		<br>
		<button>Delete account</button>
		</div>
	   <br>
	   
	   <hr>
	   <br>
	   <button type="submit" id="mainHelpSubmit"> Submit </button>
	   <br>
	   <br>
       <h3 id="title">Credits</h3>
	   <hr>
	   <div class="container-fluid">
			<p>The credits and accolades will go here when they are collected </p>
		</div>
		</div>
    </div>
</div>  

</body>
</html>

</body>
</head>
