<!DOCTYPE html>
<html>
<head>
	<title>Educator/Teacher Login</title>
	
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
		echo "bad days, hard times";
		die();
	}
		$sql = "SELECT * FROM test_national_parks_and_states"; 
	    $result = $dbh->query($sql);

		foreach($dbh->query($sql) as $row){
			echo $row['park']." - ".$row['abb_state']."<br>";
	}
$dbh = null;		
?>
</body>
</html>