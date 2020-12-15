<html>
    <head>
        <meta http-equiv="refresh" content="5">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
         <style>
            #next{
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            background-color: #f44336;
            align: center;
            font-size: 35px;
            padding: 12px;
            }

            button:hover {
            opacity: 0.8;
            }

            html,
body {
	height: 100%;
}

.log{
      margin: auto;
  display: block;
}
body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
    background-size: 100%;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
/*    background-image: url("EMT.png");
    background-position: center; 
    background-repeat: no-repeat;
    background-size: 30%;
    */
}

table {
	width: 80%;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 40px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
    font-size: 30px;
}

th {
	text-align: left;
    font-color
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}

}
.Titleh1{
    color:white;
    align: center;
    text-align: center;
    padding-top:40px;
    font-size: 50px;
    font-family: 'Signika', sans-serif;
}
.amb{
    width: 20%;
    height: 20%
}
footer{
    position: fixed;
  left: 0;
  bottom: 0;
}
.header img {
  float: left;
  width: 100px;
  height: 100px;
  align: center;
    text-align: center;
    margin-left: 10px;
}

.header h1 {
  position: relative;
  top: 18px;
    padding: 18px 25px;
    margin: 0px 50px;
  color: white;
}
.header{
    align-items: center;
    margin: 10px 30%;
}
         </style>
         <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
    <div  class="header">
        <img src="EMT.png" alt="logo" />
        <h1>EMS Management System</h1>
    </div>

  
        <!-- <form id="login-form" method="post" action="index.php" >
            <table border="0.5" >
                <tr>
                    <td>
                        <button id="next" type="submit" form="attend-form" value="Attend" name="Attend">Next Team</button>
                    </td>
                </tr>
            </table>
        </form> -->

        <!-- <svg style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
        <symbol id="icon-music" viewBox="0 0 32 32">
        <title>music</title>
        <path class="path1" d="M30 0h2v23c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-11.501l-16 3.556v15.444c0 2.761-3.134 5-7 5s-7-2.239-7-5c0-2.761 3.134-5 7-5 1.959 0 3.729 0.575 5 1.501v-19.501l18-4z"></path>
        </symbol>
        <symbol id="icon-ticket" viewBox="0 0 32 32">
        <title>ticket</title>
        <path class="path1" d="M18 10l4 4-8 8-4-4zM31.298 9.297l-2.297-2.297-1 1c-0.512 0.512-1.219 0.828-2 0.828-1.562 0-2.829-1.266-2.829-2.828 0-0.781 0.317-1.489 0.829-2.001l1-1-2.297-2.297c-0.936-0.936-2.469-0.936-3.405 0l-18.595 18.595c-0.936 0.936-0.936 2.469 0 3.405l2.297 2.297 0.999-0.999c0.512-0.513 1.22-0.83 2.001-0.83 1.562 0 2.828 1.266 2.828 2.828 0 0.781-0.317 1.489-0.829 2.001l-1 1 2.297 2.297c0.936 0.936 2.469 0.936 3.405 0l18.595-18.595c0.936-0.937 0.936-2.469 0-3.406zM14 26l-8-8 12-12 8 8-12 12z"></path>
        </symbol>
        <symbol id="icon-cart" viewBox="0 0 32 32">
        <title>Cart</title>
        <path class="path1" d="M12 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
        <path class="path2" d="M32 29c0 1.657-1.343 3-3 3s-3-1.343-3-3c0-1.657 1.343-3 3-3s3 1.343 3 3z"></path>
        <path class="path3" d="M32 16v-12h-24c0-1.105-0.895-2-2-2h-6v2h4l1.502 12.877c-0.915 0.733-1.502 1.859-1.502 3.123 0 2.209 1.791 4 4 4h24v-2h-24c-1.105 0-2-0.895-2-2 0-0.007 0-0.014 0-0.020l26-3.98z"></path>
        </symbol>
        <symbol id="icon-location" viewBox="0 0 32 32">
        <title>Location</title>
        <path class="path1" d="M16 0c-5.523 0-10 4.477-10 10 0 10 10 22 10 22s10-12 10-22c0-5.523-4.477-10-10-10zM16 16.125c-3.383 0-6.125-2.742-6.125-6.125s2.742-6.125 6.125-6.125 6.125 2.742 6.125 6.125-2.742 6.125-6.125 6.125zM12.125 10c0-2.14 1.735-3.875 3.875-3.875s3.875 1.735 3.875 3.875c0 2.14-1.735 3.875-3.875 3.875s-3.875-1.735-3.875-3.875z"></path>
        </symbol>
        <symbol id="icon-user" viewBox="0 0 32 32">
        <title>User</title>
        <path class="path1" d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z"></path>
        </symbol>
        <symbol id="icon-sphere" viewBox="0 0 32 32">
        <title>Sphere</title>
        <path class="path1" d="M15 2c-8.284 0-15 6.716-15 15s6.716 15 15 15c8.284 0 15-6.716 15-15s-6.716-15-15-15zM23.487 22c0.268-1.264 0.437-2.606 0.492-4h3.983c-0.104 1.381-0.426 2.722-0.959 4h-3.516zM6.513 12c-0.268 1.264-0.437 2.606-0.492 4h-3.983c0.104-1.381 0.426-2.722 0.959-4h3.516zM21.439 12c0.3 1.28 0.481 2.62 0.54 4h-5.979v-4h5.439zM16 10v-5.854c0.456 0.133 0.908 0.355 1.351 0.668 0.831 0.586 1.625 1.488 2.298 2.609 0.465 0.775 0.867 1.638 1.203 2.578h-4.852zM10.351 7.422c0.673-1.121 1.467-2.023 2.298-2.609 0.443-0.313 0.895-0.535 1.351-0.668v5.854h-4.852c0.336-0.94 0.738-1.803 1.203-2.578zM14 12v4h-5.979c0.059-1.38 0.24-2.72 0.54-4h5.439zM2.997 22c-0.533-1.278-0.854-2.619-0.959-4h3.983c0.055 1.394 0.224 2.736 0.492 4h-3.516zM8.021 18h5.979v4h-5.439c-0.3-1.28-0.481-2.62-0.54-4zM14 24v5.854c-0.456-0.133-0.908-0.355-1.351-0.668-0.831-0.586-1.625-1.488-2.298-2.609-0.465-0.775-0.867-1.638-1.203-2.578h4.852zM19.649 26.578c-0.673 1.121-1.467 2.023-2.298 2.609-0.443 0.312-0.895 0.535-1.351 0.668v-5.854h4.852c-0.336 0.94-0.738 1.802-1.203 2.578zM16 22v-4h5.979c-0.059 1.38-0.24 2.72-0.54 4h-5.439zM23.98 16c-0.055-1.394-0.224-2.736-0.492-4h3.516c0.533 1.278 0.855 2.619 0.959 4h-3.983zM25.958 10h-2.997c-0.582-1.836-1.387-3.447-2.354-4.732 1.329 0.636 2.533 1.488 3.585 2.54 0.671 0.671 1.261 1.404 1.766 2.192zM5.808 7.808c1.052-1.052 2.256-1.904 3.585-2.54-0.967 1.285-1.771 2.896-2.354 4.732h-2.997c0.504-0.788 1.094-1.521 1.766-2.192zM4.042 24h2.997c0.583 1.836 1.387 3.447 2.354 4.732-1.329-0.636-2.533-1.488-3.585-2.54-0.671-0.671-1.261-1.404-1.766-2.192zM24.192 26.192c-1.052 1.052-2.256 1.904-3.585 2.54 0.967-1.285 1.771-2.896 2.354-4.732h2.997c-0.504 0.788-1.094 1.521-1.766 2.192z"></path>
        </symbol>
        </defs>
        </svg> -->

    </body>
    <footer>
        <img src=".\images\amb.png" class="amb" alt="Civil Defense">
        <form id="next-form" method="post" action="Process.php">;
        <button id="next" type="submit" form="next-form" value="next" name="next">Next Team</button>;
    </footer>
</html>
<?php
    require('connection.php');
    $getVolunteers = mysqli_query($connection, "SELECT * from attendance order by TimeStamp asc");
    $Row = mysqli_fetch_array($getVolunteers);
    $TeamLeader;
    $Driver;
    $EMT;
    $Trainee;


    // echo "<table width='90%' border='1'>";
    // echo "<tr><th>ID No</th><th>Name</th><th>TS</th><th>Position</th></tr>";
    // echo "<tr><td>{$Row["ID"]}</td>";
    // echo "<td>{$Row["Name"]}</td>";
    // echo "<td>{$Row["TimeStamp"]}</td>";
    // echo "<td>{$Row["position"]}</td></tr>";
    // echo "</table>";
    // echo "<br>";


    //get Driver
    $getDriver = mysqli_query($connection, "SELECT * from attendance where position=2 order by TimeStamp asc");
    $Driver = mysqli_fetch_array($getDriver);
    $Drivercount = mysqli_num_rows($getDriver);

    //get EMT
    $getEMT = mysqli_query($connection, "SELECT * from attendance where position=3 order by TimeStamp asc");
    $EMT = mysqli_fetch_array($getEMT);

    //get Trainee
    $getTrainee = mysqli_query($connection, "SELECT * from attendance where position=4 order by TimeStamp asc");
    $Trainee = mysqli_fetch_array($getTrainee);

    //get Team Leader
    $getTeamLeader = mysqli_query($connection, "SELECT * from attendance where position=1 order by TimeStamp asc");
    $countTL = mysqli_num_rows($getTeamLeader);
    if($countTL >0){
        $TeamLeader = mysqli_fetch_array($getTeamLeader);
    } else{
        $getEMTAlt = mysqli_query($connection, "SELECT * from attendance where position=3 and ID!='$EMT[0]' order by TimeStamp asc");
        $TeamLeader = mysqli_fetch_array($getEMTAlt);
    }

    // if($count = mysqli_num_rows($getTeamLeader)>0){
    //     $TeamLeader = mysqli_fetch_array($getTeamLeader);
    // }else{
    //     $TeamLeader = mysqli_fetch_array($getEMT);
    //     $getEMT = mysqli_query($connection, "SELECT * from attendance where position=3 && ID!=". $TeamLeader[0] ." order by TimeStamp asc");
    //     $EMT = mysqli_fetch_array($getEMT);
    //     $Driver = mysqli_fetch_array($getDriver);
    //     $Trainee = mysqli_fetch_array($getTrainee);
    // }


    echo "<table class='container' width='90%' border='1'>";
    // echo "<tr><th>Driver</th><td>{$Driver["Name"]}</td></tr>";
    // echo "<tr><th>Team Leader</th><td>{$TeamLeader["Name"]}</td></tr>";
    // echo "<tr><th>EMT</th><td>{$EMT["Name"]}</td></tr>";
    // echo "<tr><th>EMT</th><td>{$Trainee["Name"]}</td></tr>";
    // echo "</table>";
    // echo "<br>";
    echo "<thread>";
    if ($Driver != null){
        echo "<tr><th><i class='fas fa-ambulance'></i> Driver</th><td>{$Driver["Name"]}</td></tr>";
    }else{
        echo "<tr><th><i class='fas fa-ambulance'></i> Driver</th><td>No Driver</td></tr>";
    }

    if ($TeamLeader!=null){
        if($TeamLeader[3]!=1){
            echo "<tr><th><i class='fas fa-user-nurse'></i>	EMT</th><td>{$TeamLeader["Name"]}</td></tr>";
        }
        elseif($TeamLeader[3]=1){
            echo "<tr><th><i class='fas fa-user-md'></i> Team Leader</th><td>{$TeamLeader["Name"]}</td></tr>";
        }
    }else{
            echo "<tr><th><i class='fas fa-user-md'></i> Team Leader</th><td>No Team Leader</td></tr>";
        }
    

    if ($EMT != null){
        echo "<tr><th><i class='fas fa-user-nurse'> EMT</th><td>{$EMT["Name"]}</td></tr>";
    }else{
        echo "<tr><th><i class='fas fa-user-nurse'> EMT</th><td>No EMT</td></tr>";
    }
    
    if ($Trainee != null){
        echo "<tr><th><i class='fas fa-user-alt'> Trainee</th><td>{$Trainee["Name"]}</td></tr>";
    }else{
        echo "<tr><th><i class='fas fa-user-alt'> Trainee</th><td>No Trainee</td></tr>";
    }
    echo "</table>";
    echo "<br>";
    echo '</form>';
    // echo '<form id="next-form" method="post" action="Process.php">';
    // echo '<button id="next" type="submit" form="next-form" value="next" name="next">Next Team</button>';
    

    
    if (isset($_POST['next'])) {
        deleteAtt($TeamLeader[0]);
        deleteAtt($Driver[0]);
        deleteAtt($EMT[0]);
        deleteAtt($Trainee[0]);

        updateAtt($TeamLeader[0]);
        updateAtt($Driver[0]);
        updateAtt($EMT[0]);
        updateAtt($Trainee[0]);

        echo '<meta http-equiv="refresh" content="0">';      
    }
    function deleteAtt(int $attendie) {
        require('connection.php');
        // sql to delete a record
        $deleterecord = "DELETE FROM attendance WHERE ID=$attendie";
        if ($connection->query($deleterecord) === TRUE) {
        echo "";
        } else {
        echo "Error deleting record: " . $connection->error;
        }
      }
    
    function updateAtt(int $attendie){
            require('connection.php');
            $dbR = mysqli_query($connection, "SELECT * from volunteers where ID=$attendie");
            $Row = mysqli_fetch_array($dbR);
            $countIn = mysqli_num_rows($dbR);
            $userID = $attendie;
            $FullName = $Row[1]. " " .$Row[2];
            $Position = $Row[7];
                //echo "id: " . $FullName."</br>";
        
            $AttendQuery = "INSERT INTO attendance (ID, Name,position) VALUES (?,?,?)";
            $stmt= $connection->prepare($AttendQuery);
            $stmt->bind_param('isi', $attendie, $FullName,$Position);
            $stmt->execute();
            
    }  

    ?>