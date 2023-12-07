<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        Email: <input type="email" name="email" ><br><br>
        Password: <input type="password" name="pass" ><br><br>
        <input type="submit" name="btn1" value="Login">
        <input type="submit" name="btn2" value="Register">
        <input type="reset" value="Reset">
    </form>

    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web technology";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['btn1']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM registration WHERE Email='$email' AND Password='$pass'";
        $res = mysqli_query($conn, $sql);

        if($res->num_rows > 0)
        {
            while($r = mysqli_fetch_assoc($res))
            {
                $_SESSION['email'] = $r["Email"];
                header("Location: /Home.php");
                
            }
        }
        else
        {
            echo "Invalid";
        }
    }
    else if(isset($_REQUEST['btn2']))
    {
        header("Location: /Registration.php");
       
    }
    ?>
</body>
</html>
