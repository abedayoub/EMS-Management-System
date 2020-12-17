<html>
    <head>
        <meta http-equiv="refresh" content="5">
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script>var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
            modal.style.display = "none";
             }
        </script>
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

.alert{
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

}


/* Modal Header */
.modal-header {
  padding: 2px 16px;
  background-color: #FF0000;
  color: white;
}
.modal-header h2{
    color: #ff0000;
}

/* Modal Body */
.modal-body {padding: 2px 16px;}
.modal-body p{
    align: center;
    
}

/* Modal Footer */
.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  border: 2px solid;
    border-radius: 20px 20px;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  border: 2px solid blue;
    border-radius: 50px 20px;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  animation-name: animatetop;
  animation-duration: 0.4s;
    text-align: center;
    align-items: center;
    vertical-align: middle;
    margin: 0 auto;
}

/* Add Animation */
@keyframes animatetop {
  from {top: -300px; opacity: 0}
  to {top: 0; opacity: 1}
}
table button{
        color: white;
        cursor: pointer;
        width: 100%;
        padding: 10px;
        text-align: center;
        align-items: center;
        vertical-align: middle;
        margin: 0 auto;
        background-color: #f44336;
        border: 2px solid blue;
        border-radius: 20px 20px;
        height: 100%;
    }
    footer{
        width:100%;
    }
*{
    cursor: url(https://cur.cursors-4u.net/mechanics/mec-5/mec472.cur), auto !important;
}


         </style>
         <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
    <div  class="header">
        <img src="EMT.png" alt="logo" />
        <h1>EMS Management System</h1>
    </div>


    </body>

<?php
    require('connection.php');
    $getVolunteers = mysqli_query($connection, "SELECT * from attendance order by TimeStamp asc");
    $Row = mysqli_fetch_array($getVolunteers);
    $TeamLeader;
    $Driver;
    $EMT;
    $Trainee;
    $flag=true;
    $getEMTAlt;
    $EMTAlt;

    //get Driver
    $getDriver = mysqli_query($connection, "SELECT * from attendance where position=2 order by TimeStamp asc");
    $Driver = mysqli_fetch_array($getDriver);
    $Drivercount = mysqli_num_rows($getDriver);

    //get EMT
    $getEMT = mysqli_query($connection, "SELECT * from attendance where position=3 order by TimeStamp asc");
    $EMT = mysqli_fetch_array($getEMT);
    $countE = mysqli_num_rows($getEMT);

    
    //get Team Leader
    $getTeamLeader = mysqli_query($connection, "SELECT * from attendance where position=1 order by TimeStamp asc");
    $countTL = mysqli_num_rows($getTeamLeader);
    if($countTL >0){
        $TeamLeader = mysqli_fetch_array($getTeamLeader);
    } elseif($countE>2 && $countTL<1){
        $getEMTAlt = mysqli_query($connection, "SELECT * from attendance where position=3 and ID!='$EMT[0]' order by TimeStamp asc");
        $TeamLeader = mysqli_fetch_array($getEMTAlt);
        $EMTAlt = mysqli_fetch_array($getEMTAlt);
    }else{
        $TeamLeader=NULL;
    }


    //get Trainee
    $getTrainee = mysqli_query($connection, "SELECT * from attendance where position=4 order by TimeStamp asc");
    $countT = mysqli_num_rows($getTrainee);
    $countEMT = mysqli_num_rows($getEMT);
    if($countT >0){
        $Trainee = mysqli_fetch_array($getTrainee);
    }elseif($countEMT>1 && $countTL>1){ 
        $getTempEMT = mysqli_query($connection, "SELECT * from attendance where position=3 and ID!='$EMTAlt[0]' order by TimeStamp asc");
        $Trainee = mysqli_fetch_array($getTempEMT);
    }elseif($countEMT>2 && $countTL<1){
        $getTempEMT = mysqli_query($connection, "SELECT * from attendance where position=3 and ID!='$EMTAlt[0]' order by TimeStamp asc");
        $TempEMT = mysqli_fetch_array($getTempEMT);
        $getAltTrainee = mysqli_query($connection, "SELECT * from attendance where position=3 and ID!='$TempEMT[0]' and ID!='$TeamLeader[0]'");
        $Trainee = mysqli_fetch_array($getAltTrainee);
    }else{
        $Trainee=NULL;
    }

    echo "<table class='container' width='90%' border='1'>";
    echo "<thread>";
    echo '<form action="Process.php" method="post">';
    if ($Driver != null){
        echo "<tr><th><i class='fas fa-ambulance'></i> Driver</th><td>{$Driver['Name']}</td><td><button id='inButton' type='submit' value='remove' name='removeD'>Remove</button></td></tr>";
    }else{
        echo "<tr><th><i class='fas fa-ambulance'></i> Driver</th><td>No Driver</td></tr>";
    }

    if ($TeamLeader!=null){
        if($TeamLeader[3]!=1){
            echo "<tr><th><i class='fas fa-user-nurse'></i>	EMT</th><td>{$TeamLeader['Name']}</td><td><button id='inButton' type='submit' value='remove' name='removeTL'>Remove</button></td></tr>";
        }
        elseif($TeamLeader[3]=1){
            echo "<tr><th><i class='fas fa-user-md'></i> Team Leader</th><td>{$TeamLeader['Name']}</td><td><button id='inButton' type='submit' value='remove' name='removeTL'>Remove</button></td></tr>";
        }
    }else{
        echo "<tr><th><i class='fas fa-user-md'></i> EMT or Team Leader</th><td>No Team Leader</td></tr>";
        $flag=false;
        }
    

    if ($EMT != null){
        echo "<tr><th><i class='fas fa-user-nurse'> EMT</th><td>{$EMT['Name']}</td><td><button id='inButton' type='submit' value='remove' name='removeE'>Remove</button></td></tr>";
    }else{
        echo "<tr><th><i class='fas fa-user-nurse'> EMT</th><td>No EMT</td></tr>";
        $flag=false;
    }
    
    if ($Trainee != null){

        if($Trainee[3]==4){
            echo "<tr><th><i class='fas fa-user-alt'> Trainee</th><td>{$Trainee["Name"]}</td><td><button  id='inButton' type='submit' value='remove' name='removeT'>Remove</button></td></tr>";
        }elseif($Trainee[3]==3){
            echo "<tr><th><i class='fas fa-user-nurse'> EMT</th><td>{$Trainee["Name"]}</td><td><button  id='inButton' type='submit' value='remove' name='removeT'>Remove</button></td></tr>";
        }
    }else{
        echo "<tr><th><i class='fas fa-user-alt'> Trainee</th><td>No Trainee</td></tr>";
        $flag =false;
    }
    echo "</table>";
    echo "<br>";
    // echo '<form id="next-form" method="post" action="Process.php">';
    // echo '<button id="next" type="submit" form="next-form" value="next" name="next">Next Team</button>';
    
    if($flag==false){
        // echo '<script class="alert" language="javascript">';
        // echo 'alert("No qualified Team")';
        // echo '</script>';
        echo '<div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-exclamation-triangle" style="font-size:48px;color:red"></i><h2>Attention!</h2>
            </div>
            <div class="modal-body">
                <p>No Qualified Team</p>
                <p> Nor Second EMT or Team Leader are available</p>
            </div>
            <div class="modal-footer">
            <h3>Beirut Regional Department | Lebanese Civil Defense</h3>
            </div>
            </div>';
    }

    
    if (isset($_POST['next'])) {
        if($TeamLeader!=NULL){
            deleteAtt($TeamLeader[0]);
            updateAtt($TeamLeader[0]);
        }

        if($Driver!=NULL){
            deleteAtt($Driver[0]);
            updateAtt($Driver[0]);
        }
        
        if($EMT!=NULL){
            deleteAtt($EMT[0]);
            updateAtt($EMT[0]);
        }
        
        IF($Trainee!=NULL){
            deleteAtt($Trainee[0]);
            updateAtt($Trainee[0]);    
        }
        echo '<meta http-equiv="refresh" content="0">';      
    }

    if(isset($_POST['removeD'])){
        deleteAtt($Driver[0]);
        echo '<meta http-equiv="refresh" content="0">';      
    }elseif(isset($_POST['removeTL'])){
        deleteAtt($TeamLeader[0]);
        echo '<meta http-equiv="refresh" content="0">';
    }elseif(isset($_POST['removeE'])){
        deleteAtt($EMT[0]);
        echo '<meta http-equiv="refresh" content="0">';
    }elseif(isset($_POST['removeT'])){
        deleteAtt($Trainee[0]);
        echo '<meta http-equiv="refresh" content="0">';
    }

    function deleteAtt(int $attendie) {
        require('connection.php');
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
            $FullName = $Row["FName"]. " " .$Row["LName"];
            $Position = $Row["Position"];
        
            $AttendQuery = "INSERT INTO attendance (ID, Name,position) VALUES (?,?,?)";
            $stmt= $connection->prepare($AttendQuery);
            $stmt->bind_param('isi', $attendie, $FullName,$Position);
            $stmt->execute();
            
    }  
    ?>
    <footer>
        <form id="next-form" method="post" action="Process.php">
        <button id="next" type="submit" value="next" name="next">Next Team</button>
    </footer>