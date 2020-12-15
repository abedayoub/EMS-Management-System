<!DOCTYPE html >
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 0 0;
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

    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }

    .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    }

    img.avatar {
    width: 40%;
    border-radius: 50%;
    }

    .container {
    padding: 16px;
    }

    span.psw {
    float: right;
    padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
    }
    #footer { 
            margin: 0px;
            position: fixed; 
            padding: 10px 10px 10px 10px; 
            bottom: 0; 
            width: 100%; 
            /* Height of the footer*/  
            height: 40px; 
            background: grey; 
            text-align: center;
        }
    </style>
    </head>
    <body>

        <div align="center">
        <img src=".\images\logo.jfif" alt="Civil Defense">
        <h3>Login System</h3>
            <form id="login-form" method="post" action="index.php" >
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
    </body>
    <div id="footer">
    <p> IS Division</p>
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
        header('Location: attend.php');
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

    }else{
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        header('Location: index.php');
    }
}
?>