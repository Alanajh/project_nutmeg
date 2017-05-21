<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nutmeg - Live</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/live2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
		.mini-box{
			border: solid gray 1px;
			padding: 5px;
			text-align: center;
		}
  </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-2">
            <div class="big-box">
            
            </div>
        </div>
        <div class="col-xs-10">
            <div class="row">
                <div class="col-xs-2"><div class="mini-box">1</div></div>
                <div class="col-xs-8"><div class="mini-box">2</div></div>
                <div class="col-xs-2"><div class="mini-box">3</div></div>
            </div>
        </div>
    </div>
</div>

<!-------------------------------------------------------------------------------->

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

</body>
</html>