<HTML>
<?php 
    include('../session.php');
?>
    <head>
    <style>
    
    ul {

list-style-type: none;
padding: 0;
overflow: hidden;
background-color: #333;
text-align: center;
align-items: center;
vertical-align: middle;
margin: 0 auto;
text-align:center;
}

li {
display:inline-block;
}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
background-color: #111;
}
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
    width: 60%;
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

    table #ri{
        float: left;
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

        input #med{
            width:100%
            align: center;
	width: auto;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
    h1{
        color: white;

        }

         </style>
         <title>Selection Division</title>
    </head>
    <BODY>
    <center>
    <ul>
        <li><a href="http://civildefense.gov.lb">Official Web</a></li>
        <li><a href="http://linkedin.com/in/abedayoub">Meet Me</a></li>
        <li><a href="/logout.php">Log Out</a></li>
    </ul>
    <div class="b">
    <h1> Welcome Selection Division</h1>
        <form method="POST" action="">
            <table height="200">
                <tr>
                <td>Volunteer ID</td><td><input type="number" name="VID" size="20" required></td>
                <td>Join Year</td><td><input type="number"  name="JoinDate" size="20" required></td></tr>
                <tr>
                <td>First Name</td><td><input type="text" name="FName" size="20" required></td>
                <td>Last Name</td><td><input type="text" name="LName" size="20" required></td></tr>
                <tr >
                <td>Date of Birth</td><td><input type="date" data-date="" data-date-format="DD MMMM YYYY" name="dob"></td>
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
                
                <tr >
                <td>Educational Level</td><td>
                <select id="BloodTypes" name="Education">
                <option value="University">University</option>
                <option value="HighSchool">HighSchool</option>
                <option value="Technical">Technical</option>
                <option value="Elementary">Elementary</option>
                <option value="NonEducated">Non Educated</option>    
            </select>

                <td>Biological Gender</td><td>
                <select id="BloodTypes" name="BioGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </td></tr>
                
                <tr>
                <td>Phone Number</td><td><input type="number" name="PNumber" size="20" required></td>
                <td>Emergency Number</td><td><input type="number" name="ENumber" size="20" required></td></tr>
                </Table>
                <table id="m">
                <tr>
                <td>Driving License</td>
                <div class="checkbox-group" required>
                <td></td>
                    <td>    <input type="checkbox" name="driving[]" value="Motorcycle">Motorcycle</td>
                    <td>    <input type="checkbox" name="driving[]" value="PrivateCar">Private Car</td>
                    <td>    <input type="checkbox" name="driving[]" value="PublicCar">Public Car</td>
                    <td>    <input type="checkbox" name="driving[]" value="10Tontruck">10 Ton truck</td>
                </tr>
                <tr>
                    <td><td>
                    <td>    <input type="checkbox" name="driving[]" value="BigTrucks">Big Trucks</td>
                    <td>    <input type="checkbox" name="driving[]" value="AgricultureTrucks">Agriculture Trucks</td>
                    <td>    <input type="checkbox" name="driving[]" value="IndustrialTrucks">Industrial Trucks</td>
                    <td>    <input type="checkbox" name="driving[]" value="NotHolding">Not Holding</td>
                <tr>
                </tr>
    </div>

                </table>
                
                <Table id="med">
                <tr >
                <td>Medical Problems</td><td><input  type="text" value="-" name="MedicalProblems" size="20"></td>
                </tr>               
                
                <tr>
                <td><input id="inBtn" type="submit" name="Submit"></td><td><input id="OutBtn" type="reset" name="Reset"></td></tr>
                </table>

        </form>
        </center>

        <?php 
        
          include('../connection.php');
            $drivings = " ";
            if (isset($_POST['VID']) && isset($_POST['FName']) && isset($_POST['LName']) && isset($_POST['BTypes']) && isset($_POST['PNumber']) && isset($_POST['ENumber']) && isset($_POST['JoinDate']) && isset($_POST['dob'])){
                $VolunteerID = strip_tags(addslashes($_POST['VID']));
                $FName = strip_tags(addslashes($_POST['FName']));
                $LName = strip_tags(addslashes($_POST['LName']));
                $DOB = strip_tags(addslashes($_POST['dob']));
                $Med = strip_tags(addslashes($_POST['MedicalProblems']));
                $BType = strip_tags(addslashes($_POST['BTypes']));
                $PNumber = strip_tags(addslashes($_POST['PNumber']));
                $ENumber = strip_tags(addslashes($_POST['ENumber']));
                $JoinDate = strip_tags(addslashes($_POST['JoinDate']));
                $Education = strip_tags(addslashes($_POST['Education']));
                $gender = strip_tags(addslashes($_POST['BioGender']));
                
                if(!empty($_POST['driving'])) {    
                    foreach($_POST['driving'] as $value){
                        $drivings = $drivings."  ".$value."  ";
                    }
                }
                
                $dbI = mysqli_query($connection, "INSERT INTO `volunteers`(`ID`, `FName`, `LName`, `DOB`, `BType`, `PhoneNumber`, `EmergencyNumber`,`JoinDate`,`Position`, `MedProblem`,`DrivingLicense`, `Education`, `gender`) VALUES ($VolunteerID,'$FName','$LName','$DOB','$BType',$PNumber,$ENumber, $JoinDate, 4,'$Med','$drivings','$Education','$gender')");
                // $dbI = mysqli_query($connection, "INSERT INTO volunteers(ID,FName,LName,BType,PhoneNumber,EmergencyNumber) VALUES(112233, 'hello','world','A+',123,321)");
                $FullName = $FName. " " .$LName;
                echo "<center> $FullName has been added</center>";
                mysqli_close($connection);
            }
        ?>
   
    </body>
</html>