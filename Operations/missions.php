<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
<?php
include('../session.php');
include('../connection.php');
if($_SESSION['role']!=1){
	header("location:/index.php");
	die();
 }

 
$result = mysqli_query($connection,"SELECT * FROM missions order by TimeStamp desc");
echo '
<div>
<div>
    <div>
        <div>
			<table class="styled-table">
				<thead>
                    <tr>
						<th>Time</th>
						<th>Member 1</th>
						<th>Driver</th>
						<th>Member 2</th>
						<th>Member 3</th>
					</tr>
					</thead>
					<tbody>
					';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> ". $row['TimeStamp'] . "</td>";
echo "<td> ". $row['TeamLeader'] . "</td>";
echo "<td> ". $row['Driver'] . "</td>";
echo "<td> " . $row['EMT'] . "</td>";
echo "<td> " . $row['Trainee'] . "</td>";
echo "</tr>";
}
echo "</tbody></table>";



mysqli_close($con);
?>
</body>