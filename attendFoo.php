<?php 
    require "connection.php";       
    $name="";

        $userID = 12345678;
        $dbR = mysqli_query($connection, "SELECT * from volunteers where ID='$userID'");
        $Row = mysqli_fetch_array($dbR);
        echo "<table width='90%' border='1'>";
        echo "<tr><th>ID No</th><th>FName</th><th>LName</th><th>BType</th><th>Phone Number</th><th>Emergency Number</th><th>Join Date</th><th>Position</th></tr>";
        
        echo "<tr><td>{$Row["ID"]}</td>";
        echo "<td>{$Row["FName"]}</td>";
        echo "<td>{$Row["LName"]}</td>";
        echo "<td>{$Row["BType"]}</td>";
        echo "<td>{$Row["PhoneNumber"]}</td>";
        echo "<td>{$Row["EmergencyNumber"]}</td>";
        echo "<td>{$Row["JoinDate"]}</td>";
        echo "<td>{$Row["Position"]}</td></tr>";
        echo "</table>";
        echo "<br>";
        $FullName = $Row[1]. " " .$Row[2];
        echo "id: " . $FullName."</br>";        

        $AttendQuery = "INSERT INTO attendance (ID, Name) VALUES (?,?)";
        $stmt= $connection->prepare($AttendQuery);
        $stmt->bind_param('is', $userID, $FullName);
        $stmt->execute();

        echo '<center><a href="add.php">Add Flight</a></center>';
        mysqli_close($connection);
    
    
?>