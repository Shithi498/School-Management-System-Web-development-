<!DOCTYPE html>
<html>
<head>
    <title>Student Notices</title>
</head>
<body>
<form action="" method="post">
    <h1>Student Notices</h1>
    <input type="submit" value="Home" name="btn2">
    </form>
    <?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "web technology";
        $conn = new mysqli($servername, $username, $password, $dbname);

        //$sql = "SELECT * FROM notices";
     
       
        $result = $conn->query("SELECT * FROM notices");
       // $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
        
            echo "<h2>Notices:</h2>";
            while ($row = $result->fetch_assoc()) {
            //while ($row = mysqli_fetch_assoc($res)) {
                $noticeTitle = $row['title'];
                $noticeContent = $row['content'];
                $noticeDate = $row['date'];

               
                echo "<html><h3>$noticeTitle</h3></html>";
                echo "<html><p>Date: $noticeDate</p></html>";
                echo "<html><p>$noticeContent</p></html>";
             
                echo "<hr>";
            }
        } else {
            echo "<p>No notices available.</p>";
        }
        if(isset($_POST['btn2'])){
            header("location: /Home.php");
        }

    ?>
       
</body>
</html>
