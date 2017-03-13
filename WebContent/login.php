<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
//Database Credentials
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
	$
	
    $sql = "SELECT * FROM nutmegpswddb WHERE user = '$user' and password = '$password'";   
    $result = $DBH->query($sql);
    if($result->rowCount() > 0){
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
    } else{
    	require 'errors.php';
       // echo "The user name and/or password was incorrect";
    }
} catch(PDOException $error){
    die("ERROR: Could not able to execute $sql. " . $error->getMessage());
}
 
// Close connection
unset($pdo);
?>
</body>
</html>