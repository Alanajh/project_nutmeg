<!DOCTYPE html>
<html lang="em">
<head>
<title>Nutmeg - Live</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/live2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body>

<!--<div container="fluid">-->
<div id="demo">DEMO</div>
<section>
 <div class="container-fluid userList ">
   <!-- USER ONE -->
  	<div class="row">
		<div class="col-xs-12">
            <div class="row">
            	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<button type="button" class="btn btn-primary"><input type="image" src="src/users/student_girl_1.PNG" style="width:50px; height:50px; align:left;" >AvaRA</button>
	  				<h4>Avapants</h4>
				</div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h5>00/00</h5></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>
        </div>
	</div>
		  	
  	<!-- USER TWO -->
	<div class="row">
		<div class="col-xs-12">
            <div class="row">
            	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<button type="button" class="btn btn-primary"><input type="image" src="src/users/student_girl_1.PNG" style="width:50px; height:50px; align:left;" >AliciaRA</button>
	  				<h4>Pumpkin</h4>
				</div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h5>00/00</h5></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>
        </div>
	</div>
		  	
  	<!-- USER THREE -->
	<div class="row">
		<div class="col-xs-12">
            <div class="row">
            	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<button type="button" class="btn btn-primary"><input type="image" src="src/hipster.png" style="width:50px; height:50px; align:left;" >RosemaryH</button>
	  				<h4>Little Moccasin</h4>
				</div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h5>00/00</h5></div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            </div>
        </div>
	</div>
		  	
	<!-- USER FOUR -->
	<div class="row">
			<div class="col-xs-12">
	            <div class="row">
	            	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
						<button type="button" class="btn btn-primary"><input type="image" src="src/glasses.png" style="width:50px; height:50px; align:left;" >AlanaJH</button>
		  				<h4>Laney Jo</h4>
					</div>
	                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><h5>00/00</h5></div>
	                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
	            </div>
	        </div>
		</div>		  	
		

  </div>
  <div class="fixedCont container">
    <div class="row">
        <div id="top" class="col-xs-12">
        	<div class="row" id="fixedTop">
        		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img id="blink" src="src/Blink-Green.gif">live</div>	
        		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>	
        		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: right;">Username<br>Logoff</div>	
        		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><img id="userLog" src="src/users/student_girl_1.PNG"></div>	
        	</div>
        	<div class="row">
        		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img id="logo" src="src/nutmeg-800x800.png"><img src="src/nutmeg_logo.png"><br>Tests</div>	
        	</div>
            <div id="mid" class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><div class="">advertise</div></div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                	<div  id="details" class="row">Subject: history<br>Title: World Empires</div>
                	<div class="row">Ask me something<br></div>	
                	<div class="row"><hr><button id="enter">submit</button></div>
                	<div class="row">Test Result</div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"><div class="">advertise</div></div>
            </div>
            <div id="bottom" class="row">
            	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Score: 74%</div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Rank: 13/26</div>
            </div>
        </div>
    </div>
  </div>
</section>

<!-------------------------------------------------------------------------------->
	
<script>
// Scrolling side bar 
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

</script>	
<script>
/*
(function() {
  var flickerAPI = "http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
  $.getJSON( flickerAPI, {
    tags: "mount rainier",
    tagmode: "any",
    format: "json"
  })
    .done(function( data ) {
      $.each( data.items, function( i, item ) {
        $( "<img>" ).attr( "src", item.media.m ).appendTo( "#details" );
        if ( i === 3 ) {
          return false;
        }
      });
    });
})();

	var mainAPI = "main.json";
	  $.getJSON( mainAPI, {
	    tags: "mount rainier",
	    tagmode: "any",
	    format: "json"
	  })
	    .done(function( data ) {
	      $.each( data.items, function( i, item ) {
	        $( "<img>" ).attr( "src", item.media.m ).appendTo( "#details" );
	        if ( i === 3 ) {
	          return false;
	        }
	      });
	    });
	   
	    
	    <script type="text/javascript">*/
	// Evens are questions odds are answers. First set of questions starts at 0
		var answer;
		var data;	
		var url = "main.json";
		
		$(document).ready(function(){
			$.ajax({
				url: url,
				datatype: "json",
				success: function(data) {
				
				$.each(data.tests[3].items, function(i, ob){
					answer += ob.answer + "<br/>";
					for(var i = 1; i < 1; i++){
						
						document.getElementById("demo").innerHTML = answer;
					}
				});
				}
			});
		});
		
		
	</script>
</div> 
</html>