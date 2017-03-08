<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "nutmeg";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT account_type from nutmeg_pswd_db";
$result = $conn->query($sql);

if ($result > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["user"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

  		
      // username and password sent from form 
      /*
      $myusername = mysqli_real_escape_string($db,$_POST['user']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pswd']); 
      
      $sql = "SELECT account_type FROM nutmeg_pswd_db WHERE user = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo "golden";
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "error";
      }
   */
   
?>
</body>
</html>