<!DOCTYPE html>
<html>
<head>
    <title>View Classmates</title>
</head>
<body>
<form action="" method="post">
    <h1>View Classmates</h1>
    <input type="submit" value="Home" name="btn2">
    </form>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web technology";
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    
    $sql= "SELECT * FROM registration ";
 
   $res=  mysqli_query($conn, $sql);

    if ($res->num_rows > 0) {
        echo "<h2>Your Classmates:</h2>";
       
       
            while ($classmate = mysqli_fetch_assoc($res)) {
            echo "<li>Name: " . $classmate['Name'] . ", Email: " . $classmate['Email'] . "</li>";
        }
      
    } else {
        echo "<p>No classmates found.</p>";
    }
    if(isset($_POST['btn2'])){
        header("location:/Home.php");
    }

    //$conn->close();
    ?>

   
</body>
</html>
