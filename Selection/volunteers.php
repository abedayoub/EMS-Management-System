<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
<?php
include('../session.php');
include('../connection.php');

if($role_check!=2){
	header("location:/index.php");
	die();
	
$result = mysqli_query($connection,"SELECT * FROM volunteers");
echo '
<div>
<div>
    <div>
        <div>
			<table class="styled-table">
				<thead>
                    <tr>
						<th>Volunteer ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
					</tr>
					</thead>
					<tbody>
					';

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> ". $row['ID'] . "</td>";
echo "<td> ". $row['FName'] . "</td>";
echo "<td> ". $row['LName'] . "</td>";
echo "</tr>";
}
echo "  </tbody>
    </table>";



mysqli_close($con);
?>
</body>