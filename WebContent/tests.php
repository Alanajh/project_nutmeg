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
       <h3 id="word">Test</h3>
		<br>
		<div class="container-fluid">
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-ld-2 col-lg-2" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id="question">Question</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut exercitation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
		</div>
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore ation ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="answer">Answer</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
				ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore etion ullamco laboris nisi ut aliquip ex
				ea commodo consequat.</div>
		</div>
		<div class="row">
			<div class="btn-group">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididt.</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="btn">
					<button id="enter" type="button" class="btn btn-primary" onclick="loadDoc()">enter</button>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" id="advertising">Lorem
					ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut laboreon ullamco laboris nisi ut aliquip
					ex ea commodo consequat.</div>
			</div>
		</div>
	</div>

<img src= "http://3.bp.blogspot.com/-m0O_a08zEiQ/T1P5lVodfNI/AAAAAAAAAmM/jCQl_V4Ws6w/s1600/soccer-1.jpg" height="100" width="150" id="pic">
	<script>
	
		var answer, q;
		var data;	
		var url = "main.json";
		var i = 1;
		
		$(document).ready(function(){
			$("#enter").click(function(){
				 $.getJSON("main.json", function(result){
			        $.each(result, function(i, field){
			            $("div").append(field + " ");
			        });
			    });
			$.ajax({
				url: url,
				datatype: "json",
				success: function(data) {
				
				$.each(data.tests[0].items, function(i, ob){
					
					/*
					if(!jQuery.isArray(data)) data = [data];
					answer +=  ob.answer + "<br/>";
					document.getElementById("answer").innerHTML = answer;
					
					q += ob.question + "<br/>";
					answer += ob.answer + "<br/>";
					//for(var i; i < 1; i++){
						document.getElementById("question").innerHTML = q;
						document.getElementById("answer").innerHTML = answer;
					//}*/
				});
				document.getElementById("enter").onclick = forward;
				}
			});
		});
		});
		function forward(){
			i++;
			var c = document.getElementById("pic");
			c.getAttributeNode("src").value = "https://uploads6.wikiart.org/images/jean-michel-basquiat/notary.jpg";
		}
		
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
        </script>
        <script>
    
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		var x = this.responseText;
        document.getElementById("word").innerHTML = x;
    }
  };
  xhttp.open("GET", "http://www.dictionaryapi.com/api/v1/references/collegiate/xml/vulture?key=c49f5474-fb60-46fb-8354-f39553264c15",true);
  xhttp.send();
}


        </script>
    </div>   
</body>
</head>