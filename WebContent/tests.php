<!DOCTYPE html>
<html lang="em">
<head>
<title>Nutmeg - Tests</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="javascript/settings.js"></script>
   <script type="text/javascript" src="main.json"></script>
	<link id="pageStyle" rel="stylesheet" href="css/themes/main/nutmeg.css">
</head>
<body>
<!-- TEST SCREEN -->
    <div class="text-center">
 	<img src="src/nutmeg_logo.png"/><br>
       <h3>Test</h3>
		<br>
		<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-ld-2 col-lg-2" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
				veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
			<div class="col-sm-8 col-md-8 col-lg-8" id="question">Question</div>
			<div class="col-sm-2 col-md-2 col-lg-2" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
				veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
				veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
			<div class="col-sm-6 col-md-6 col-lg-6" id="answer">Answer</div>
			<div class="col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
				veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
		</div>
		<div class="row">
			<div class="btn-group">
				<div class="col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
					minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat.</div>
				<div class="col-sm-6 col-md-6 col-lg-6" id="btn">
					<button id="enter" type="button" class="btn btn-primary">enter</button>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut minim
					veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
					ex ea commodo consequat.</div>
			</div>
		</div>
	</div>

<img src= "http://3.bp.blogspot.com/-m0O_a08zEiQ/T1P5lVodfNI/AAAAAAAAAmM/jCQl_V4Ws6w/s1600/soccer-1.jpg" height="100" width="150" id="pic">
	<script type="text/javascript">
	// Evens are questions odds are answers. First set of questions starts at 0
		var answer;
		var data;	
		var url = "main.json";
		
		$(document).ready(function(){
			$.ajax({
				url: url,
				datatype: "json",
				success: function(data) {
				
				$.each(data.tests[13].items, function(i, ob){
					/*
					if(!jQuery.isArray(data)) data = [data];
					answer +=  ob.answer + "<br/>";
					document.getElementById("answer").innerHTML = answer;
					*/
					answer += ob.answer + "<br/>";
					for(var i = 1; i < 5; i++){
						
						document.getElementById("answer").innerHTML = answer;
					}
				});
				document.getElementById("enter").onclick = forward;
				}
			});
		});
		
		function forward(){
			var c = document.getElementById("pic");
			c.getAttributeNode("src").value = "https://uploads6.wikiart.org/images/jean-michel-basquiat/notary.jpg";
		}
		
		function getNext(){
			
		}
		</script>
    	<?php
    	echo $result;
        echo "<table>";
            echo "<tr>";
                echo "<th><b>TYPE</b></th>";
                echo "<th><b>ID</b></th>";
            echo "</tr>";
        while($row = $result->fetch()){
            echo "<tr>";
                echo "<td>" . $row['user'] . "</td>";
                echo "<td>" . $row['id'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        unset($result);
        ?>
    </div>   
</body>
</head>