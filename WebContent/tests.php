<!DOCTYPE html>
<html lang="em">
<head>
<tltle></title>
</head>
<body>
<h1>TESTS</h1>

    	<?php
    	echo $result;
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
        ?>
</body>
</head>