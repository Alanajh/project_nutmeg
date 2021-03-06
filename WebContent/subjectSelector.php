<!DOCTYPE html>
<html>
<head>
	<title>Tests</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="javascript/testingBodyBuild.js"></script>
<style>
	html, body{
		background-color: lightgray;
	}
	#test-selections{
		text-align: center;
	}
	#title{
		text-align: center;
	}
	
</style>
</head>

<body>
<div class="container-fluid">
	<!------------------ TITLE ROW ------------------------>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12" id="title">
			<h3>Tests</h3>
		</div>
	</div>
	<!------------------ MID-SECTION ROW ------------------>
	<div class="row">
	
	<!------------------ FAR LEFT COLUMN ------------------>
	<div class="col-sm-4 col-md-4 col-lg-4">SHADOW</div>
	
	<!------------------ MIDDLE COLUMN ------------------>
	<div class="col-sm-4 col-md-4 col-lg-4" id="test-selections">
	
	<div class="btn-group-vertical" role="group" aria-label="...">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#ageModal">Age
			<span class="glyphicon glyphicon-road" aria-hidden="true"></span>
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="ageModal" tabindex="-1" role="dialog" aria-labelledby="ageModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="ageModalLabel">Test Age Level</h4>
		      </div>
		      <div class="modal-body">
		      	<B>Select an age level:</B> <BR><BR>
					<SELECT id="age" SIZE="6" MULTIPLE >
					<OPTION value='' SELECTED> 
					<OPTION value=''> 1 </option>
					<OPTION value=''> 2 </option>
					<OPTION value=''> 3 </option>
					<OPTION value=''> 4 </option>
					<OPTION value=''> 5</option>
					<OPTION value=''> 6</option>
					<OPTION value=''> 7</option>
					<OPTION value=''> 8</option>
					<OPTION value=''> 9</option>
					<OPTION value=''> 10</option>
					<OPTION value=''> 11</option>
					<OPTION value=''> 12</option>
					<OPTION value=''> 13</option>
					<OPTION value=''> 14</option>
					<OPTION value=''> 15</option>
					<OPTION value=''> 16</option>
					<OPTION value=''> 17</option>
					<OPTION value=''> 18 - 20</option>
					<OPTION value=''> 21 - 24</option>
					<OPTION value=''> 25 - 29</option>
					<OPTION value=''> 30 - 37</option>
					<OPTION value=''> 38 - 47</option>
					<OPTION value=''> 48 - 57</option>
					<OPTION value=''> 58+</option>
					</SELECT>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#gradeModal">Grade
			<span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="gradeModal" tabindex="-1" role="dialog" aria-labelledby="gradeModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="gradeModalLabel">Test Grade Level</h4>
		      </div>
		      <div class="modal-body">
		        <B>Select an grade level:</B> <BR><BR>
					<SELECT id="grade" SIZE="6" MULTIPLE >
					<OPTION value='' SELECTED> 
					<OPTION value=''> pre-k</option>
					<OPTION value=''> k</option>
					<OPTION value=''> 1st </option>
					<OPTION value=''> 2nd</option>
					<OPTION value=''> 3rd</option>
					<OPTION value=''> 4th</option>
					<OPTION value=''> 5th</option>
					<OPTION value=''> 6th</option>
					<OPTION value=''> 7th</option>
					<OPTION value=''> 8th</option>
					<OPTION value=''> 9th</option>
					<OPTION value=''> 10th</option>
					<OPTION value=''> 11th</option>
					<OPTION value=''> 12th</option>
					<OPTION value=''> College Freshman</option>
					<OPTION value=''> College Sophmore</option>
					<OPTION value=''> College Junior</option>
					<OPTION value=''> College Senior</option>
					<OPTION value=''> Graduate 1st year</option>
					<OPTION value=''> Graduate 2nd year</option>
					<OPTION value=''> Graduate 3rd year</option>
					<OPTION value=''> Graduate 4th year</option>
					<OPTION value=''> Ph.D</option>
					<OPTION value=''> Expert</option>
					</SELECT>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#subjectModal">Subject
			<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="subjectModal" tabindex="-1" role="dialog" aria-labelledby="subjectModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="subjectModalLabel">Test Subjects</h4>
		      </div>
		      <div class="modal-body">
		        <B>Select a subject:</B> <BR><BR>
					<SELECT id="subject" SIZE="6" MULTIPLE >
					<OPTION value='' SELECTED> 
					<OPTION value='anatomy'> Anatomy</option>
					<OPTION value='astronomy'> Astronomy</option>
					<OPTION value='biology'> Biology</option>
					<OPTION value='communications'> Communications</option>
					<OPTION value='computers'> Computers</option>
					<OPTION value='computer science'> Computer Science</option>
					<OPTION value='engineering'> Engineering</option>
					<OPTION value='geography'> Geography</option>
					<OPTION value='geology'> Geology</option>
					<OPTION value='history'> History</option>
					<OPTION value='law & legal'> Law & Legal </option>
					<OPTION value='mathematics'> Mathematics</option>
					<OPTION value='meteorology'> Meteorology</option>
					<OPTION value='nursing'> Nursing</option>
					<OPTION value='orinthology'> Orinthology</option>
					<OPTION value='paleontology'> Paleontology</option>
					<OPTION value='physical education'> Physical Education</option>
					<OPTION value='physics'> Physics</option>
					<OPTION value='radiology'> Radiology</option>
					<OPTION value='science'> Science</option>
					<OPTION value='technology'> Technology</option>
					<OPTION value=''> Graduate 3rd</option>
					</SELECT>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" id="subBtn" onclick="grab()" 
				data-dismiss="modal">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#randomModal">Random
			<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="randomModal" tabindex="-1" role="dialog" aria-labelledby="randomModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="randomModalLabel">Random Tests</h4>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div> 
		</div>
	</div> <!----------------- END OF BTN GRP VERTICAL -------------------->
	
	<div><button id="enter" onclick="enter()">Enter</button></div>
	
	</div> <!----------------- END OF ROW --------------------------------->
	
	<!------------------ FAR RIGHT COLUMN ------------------>	
	<div class="col-sm-4 col-md-4 col-lg-4" id="rightPanel">SHADOW</div>	
	
	</div> <!----------------- END VERTICAL BUTTON DIV -------------------->
	
</div> <!--------------------- FULL WIDTH OF VIEWPORT --------------------->
	
</body>
</html>