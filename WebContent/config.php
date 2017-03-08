
<?php
/*
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'nutmeg');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   */
		$servername = "master";
		$username = "root";
		$password = "Drummer1!";
		
		// Create connection
		$conn = new mysqli('localhost:3306', 'root', 'Drummer1!');
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";

?>

