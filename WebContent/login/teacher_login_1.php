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
</head>
<body class="container-fluid">

<!-- SQL -->
<?php
session_start();

$host = 'localhost';
$database = 'nutmeg';
$username = 'root';
$password = 'root';
 
try {
  $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
 
}
catch(PDOException $e) {
    echo $e->getMessage();
}

try{
	
    $sql = "SELECT name FROM test";   
    $result = $DBH->query($sql);

    if($result->rowCount() > 0){
    	 echo "Name: " . $row["name"]";  
    } else{
    	require 'errors.php';
       echo "The username and/or password was incorrect";
    }
} catch(PDOException $error){
    die("ERROR: Could not able to execute $sql. " . $error->getMessage());
}
 
unset($pdo);
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
				
				<table style="width:100%; border-left: 2px solid lightgray;">
					<tr>
					    <th></th>
					    <th>Test</th> 
					    <th>edit/delete</th>
					  </tr>
					  <tr>
					    <td style="padding-left: 15px;">1</td>
					    <td>World War II</td> 
					    <td><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
					  </tr>
					  <tr>
					    <td style="padding-left: 15px;">2</td>
					    <td>International Government Architecture</td> 
					    <td><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
					  </tr>
				</table>
				
				<ul style="border-left: 3px solid lightgray;">
					<div class="row">
					
						<div class="col-sm-1 col-md-1 col-lg-1"><div class="results"></div></div>
						<div class="col-sm-10 col-md-10 col-lg-10">
							<li><a href="">Chemistry - The Periodic Table<a></li>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1"><span class="glyphicon glyphicon-trash"></span></div>
					</div>
					
					<div class="row">
						<div class="col-sm-1 col-md-1 col-lg-1">2</div>
						<div class="col-sm-10 col-md-10 col-lg-10">
							<li><a href="">Geography - The States and Capitals of the United States<a></li>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1"><span class="glyphicon glyphicon-trash"></span></div>
					</div>
					
					<div class="row">
						<div class="col-sm-1 col-md-1 col-lg-1">3</div>
						<div class="col-sm-10 col-md-10 col-lg-10">
							<li><a href="">Finances - Major Stock Exchanges and Their Abbreviations<a></li>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1"><span class="glyphicon glyphicon-trash"></span></div>
					</div>
					
					<div class="row">
						<div class="col-sm-1 col-md-1 col-lg-1">4</div>
						<div class="col-sm-10 col-md-10 col-lg-10">
							<li><a href="">Finances - Popular Companies that Changed Their Original Name<a></li>
						</div>
						<div class="col-sm-1 col-md-1 col-lg-1"><span class="glyphicon glyphicon-trash"></span></div>
					</div>
				</ul>
				</div>
			</div>
		<div class="col-sm-2 col-md-2 col-lg-2">ad</div>
		</div>
	</div>
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
	
	<script language="javascript" type="text/javascript">
		//$('.results').html('power rangers');
	
		$('.results').html($tack);
					</script>
</body>
</html>