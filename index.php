
<?php
    session_start();
     require('connection.php');
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];
    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);
    $role = mysqli_fetch_array($result);
    if ($count == 1){
        // header("Location: ./attend.php");
        // $_SESSION['user'] = $_POST['user_id'];
                
        $_SESSION["username"] = $username;
        $_SESSION['role'] = $role['role'];
        if($role['role']==1){
            header("Location: ./Operations/");

        }elseif($role['role']==2){
            header("Location: ./Selection/");
        }elseif($role['role']==3){
            header("Location: ./Training/");
        }
    }else{
        echo "invalid credentials";
        $message = "Invalid Username or Password!";
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html >
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
    <ul>
        <li><a href="http://civildefense.gov.lb">Official Web</a></li>
        <li><a href="http://linkedin.com/in/abedayoub">Meet Me</a></li>
        <?php 
            if(isset($_SESSION['username'])!=0){
                 echo '<li><a href="logout.php">LogOut</a></li>';
                }
                  ?>
    </ul>
    

  <div class="vertical-center">
        <img src=".\images\logo.jfif" alt="Civil Defense">
        <h3>Welcome to Beirut Regional Department</h3>
            <form id="login-form" method="post" action="index.php">
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
                    <div class="message"><?php if($message!="") { echo $message; } ?></div>
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
    <p> Developed and Designed by <a href="http://github.com/abedayoub">Abed Ayoub</a></p>
    </div>
</html>
