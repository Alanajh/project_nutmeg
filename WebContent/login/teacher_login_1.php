<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Educator/Teacher Login</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
	<!-- Externl login -->
	<script src="../javascript/teacher_login.js"></script>	
	
	<!--  External CSS -->
	<link rel="stylesheet" href="../css/teacher_login_1.css">

</script>
</head>	
<body class="container-fluid">

<!-- SQL -->
<?php
	
	$server = "localhost";
	$db = "nutmeg";
	$user = "root";
	$password = "root";

	try{
		$dbh = new PDO("mysql:host=$server; dbname=$db",
				$user, $password);
	}catch(PDOException $e){
		die();
	}
		$sql = "SELECT type, title, subject, genre, dewey FROM main_test_listing WHERE NULLIF(title, ' ')IS NOT NULL ORDER BY title"; 
	    $result = $dbh->query($sql);
				
?>

	<div class="row">
		<nav class="navbar navbar-inverse" style="height: 65px;">
		    <div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="../src/nutmeg-800x800.png" style="height: 40px; width: 40px;"/></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-filter"></span> Filter</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-sort-by-attributes"></span> Sort</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Hello, Alana Harmon</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logoff</a></li>
				</ul>
			</div>
		</nav> 
	</div>
	<!-- MIDDLE -->
	<div class="row" style="border: 2px lightgray solid;">
		<div class="col-sm-2 col-md-2 col-lg-2">ad</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<p>Test listing</p>
			<hr style="height:5px; border:none; color: lightgray; background-color: lightgray;" />
			<div class="row">
			<?php
				$i = 0;
				echo "<table id='bulls'><tr><th>Test</th><th>Delete</th></tr>";

				foreach($dbh->query($sql) as $row){
					echo "<tr><td><a href='../example.php?title=$row[title]&value=$row[type]&subject=$row[subject]&genre=$row[genre]&dewey=$row[dewey]'>". $row['title']. "</a></td>";
					echo "<td><a href='../example.php?title=$row[title]&value=$row[type]&subject=$row[subject]&genre=$row[genre]&dewey=$row[dewey]'><span class='glyphicon glyphicon-trash'></span></a></td>";

					echo "</tr>";
				}
					echo "</table>";

				$dbh = null;	
			?>
		</div> <!-- END OF TABLE ROW -->
	</div> <!-- END OF COLL-8 -->
		<div class="col-sm-2 col-md-2 col-lg-2">ad</div>
	</div> <!-- END OF MIDDLE ROW -->
		
	<div class="row">		
	<footer class="navbar-fixed-bottom">
		<nav class="navbar navbar-inverse">
		   <div class="container-fluid">
			 <ul class="nav navbar-nav navbar-right">
			   <li><a href="#"><span class="glyphicon glyphicon-plus"></span> New</a></li>
			 </ul>
		  </div>
		</nav> 
	</footer>
	</div>
</body>
</html>