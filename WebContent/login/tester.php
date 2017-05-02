<!DOCTYPE html>
<html>
<head>

</head>
<body>

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
	$user = $_POST['user'];
	$password = $_POST ['pswd'];
	
    $sql = "SELECT * FROM nutmegpswddb WHERE user = '$user' and password = '$password' and account_type = 'tester'";   
    $result = $DBH->query($sql);
    if($result->rowCount() > 0){
    	require 'menu.php';
    } else{
    	require 'errors.php';
       // echo "The username and/or password was incorrect";
    }
} catch(PDOException $error){
    die("ERROR: Could not able to execute $sql. " . $error->getMessage());
}
 
// Close connection
unset($pdo);
?>
</body>
</html>