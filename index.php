<!DOCTYPE html >
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
    <ul>
        <li><a href="./Training/">Training</a></li>
        <li><a href="./Selection/">Selection</a></li>
        <li><a href="./Operations">Operations</a></li>
        <li><a href="http://linkedin.com/in/abedayoub">Meet Me</a></li>
    </ul>
    

  <div class="vertical-center">
        <img src=".\images\logo.jfif" alt="Civil Defense">
        <h3>Welcome to Beirut Regional Department</h3>
            <form id="login-form" method="post" action="index.php"  >
                <table border="0.5" >
                    <tr>
                        <td><label for="user_id">User Name</label></td>
                        <td><input type="text" name="user_id" required></input></td>
                    </tr>
                    <tr>
                        <td><label for="user_pass">Password</label></td>
                        <td><input type="password" name="user_pass" required></input></td>
                    </tr>
                    
                    <tr>
                        <td>
                        <button type="submit" form="login-form" value="Login" name="Login">Login</button>
                    </tr>
                </table>
            </form>
        </div>
</div>
    </body>
    <div id="footer">
    <p> Beirut Regional Department | Lebanese Civil Defense</p>
    </div>
</html>

<?php  
     require('connection.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1){
        header("Location: ./attend.php");

    }else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        header('Location: index.php');
    }
}
?>