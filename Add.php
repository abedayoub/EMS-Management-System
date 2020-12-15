<HTML>
    <head>
    <style>
            #inBtn {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 70%;
    }
    #outBtn{
        color: white;
        padding: 14px 20px;
        margin: 8px 5px;
        border: none;
        cursor: pointer;
        width: 50%;
        background-color: #f44336;
        float: right;
    }

            button:hover {
            opacity: 0.8;
            }

            html,
body {
	height: 100%;
}

#b{
    margin: auto;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
    background-size: auto;
    position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
    size: auto;
}

table {
    align: center;
	width: auto;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
    font-size: 20px;
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
body {font-family: Arial, Helvetica, sans-serif;}
    
    input{
    width: 100%;
    padding: 1px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    }
    
    select{
        width: 100%;
    padding: 1px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    
    }

    button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    }

    button:hover {
    opacity: 0.8;
    }
    #footer { 
            margin: 0px 0px;
            position: fixed; 
            padding: 10px; 
            bottom: 0; 
            width: 100%; 
            /* Height of the footer*/  
            height: 40px; 
            background: grey; 
            text-align: center;
            color: white;
        }
    h1{
        color: white;

        }
         </style>
    </head>
    <BODY>
    <center>
    <div class="b">
    <h1> Welcome Selection Division</h1>
        <form method="POST" action="Add.php">
            <table height="200">
                <tr>
                <td>Volunteer ID</td><td><input type="number" name="VID" size="20" required></td></tr>
                <tr>
                <td>First Name</td><td><input type="text" name="FName" size="20" required></td></tr>
                <tr>
                <td>Last Name</td><td><input type="text" name="LName" size="20" required></td></tr>
                <tr>
                <td>Blood Type</td><td>
                <select id="BloodTypes" name="BTypes">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="U">Unknown</option>
                </select>
                </td></tr>
                <tr>
                <td>Phone Number</td><td><input type="number" name="PNumber" size="20" required></td></tr>
                <tr>
                <td>Emergency Number</td><td><input type="number" name="ENumber" size="20" required></td></tr>
                <tr>
                <td>Join Date</td><td><input type="date" data-date="" data-date-format="DD MMMM YYYY" name="JoinDate"></td></tr>

                <tr>
                <td><input id="inBtn" type="submit" name="Submit"></td><td><input id="OutBtn" type="reset" name="Reset"></td></tr>
            </Table>

        </form>
        </center>

        <?php 

            if (isset($_POST['VID']) && isset($_POST['FName']) && isset($_POST['LName']) && isset($_POST['BTypes']) && isset($_POST['PNumber']) && isset($_POST['ENumber']) && isset($_POST['JoinDate'])) {
                $VolunteerID = strip_tags(addslashes($_POST['VID']));
                $FName = strip_tags(addslashes($_POST['FName']));
                $LName = strip_tags(addslashes($_POST['LName']));
                $BType = strip_tags(addslashes($_POST['BTypes']));
                $PNumber = strip_tags(addslashes($_POST['PNumber']));
                $ENumber = strip_tags(addslashes($_POST['ENumber']));
                $JoinDate = strip_tags(addslashes($_POST['JoinDate']));


                require "connection.php";
                $dbI = mysqli_query($connection, "INSERT INTO `volunteers`(`ID`, `FName`, `LName`, `BType`, `PhoneNumber`, `EmergencyNumber`,`JoinDate`,`Position`) VALUES ($VolunteerID,'$FName','$LName','$BType',$PNumber,$ENumber,'$JoinDate', 4)");
                // $dbI = mysqli_query($connection, "INSERT INTO volunteers(ID,FName,LName,BType,PhoneNumber,EmergencyNumber) VALUES(112233, 'hello','world','A+',123,321)");
                $FullName = $FName. " " .$LName;
                echo "<center>' $FullName ' has been added</center>";
                mysqli_close($connection);
            }
        ?>
        <div id="footer">
    <p> Beirut Regional Department | Lebanese Civil Defense</p>
    </div>
    </body>
</html>