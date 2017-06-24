<?php
	session_start();
?>
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
		$dbh = new PDO("mysql:host=$server; dbname=$db",$user, $password);
		
		$title = $_GET['title'];
		$type = $_GET['value'];
		$subject = $_GET['subject'];
		$genre = $_GET['genre'];
		$dewey = $_GET['dewey'];
		
		/*
		echo '<p/>TITLE: ', $title, "<br/>";
		echo '<p/>TYPE: ', $type, "<br/>";
		echo '<p/>SUBJECT: ', $subject, "<br/>";
		echo '<p/>GENRE: ', $genre, "<br/>";
		echo '<p/>DEWEY: ', $dewey, "<br/>";
	    */
	    
	    $truncate = "TRUNCATE TABLE temp";
	    $dbh->exec($truncate);
	    $mainSQL = "INSERT INTO temp (type, title, subject, genre, dewey) SELECT type, title, subject, genre, dewey FROM main_test_listing WHERE title = '$title'";
	    $dbh->exec($mainSQL);
	    
	    switch($type){
	    	case 1:
	    		echo "Type 1";
	    	break;
	    	case 2:
	    		require 'test_templates/test_template_1.php';

					$db = "test_db";
					try{
						$dbh = new PDO("mysql:host=$server; dbname=$db",$user, $password);
						$test = "SELECT key_connect FROM 973.001 WHERE title = '$title'";
						$key_connect = $_GET['key_connect'];
						
						
						echo '<p/>KEY: ', $key_connect, "<br/>";
					    
					    
					    $dbh->exec($mainSQL);
					    
					    
					}catch(PDOException $e){
						echo "bad days, hard times";
						die();
					}
				
				$dbh = null;		
				
	    	break;
	    	case 3:
	    		echo "Type 3";
	    	break;
	    	case 4:
	    		echo "Type 4";
	    	break;
	    	default:
	    		echo "<br> Dewey found!";
	    	}
	}catch(PDOException $e){
		echo "bad days, hard times";
		die();
	}

$dbh = null;		
?>
</body>
</html>