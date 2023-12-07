<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <form action="" method="post">
   
        Subject:
        <select name="subject" required>
            <option value="math">Math</option>
            <option value="science">Science</option>
           
        </select><br><br>

        <input type="submit" name="submit" value="Check Grades">
        <input type="submit" value="Home" name="btn2">
    </form>

    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web technology";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['submit'])) {
        
        $subject = $_POST['subject'];

        $sql = "SELECT * FROM studentGrade WHERE Subject='$subject'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo "<h2>$subject</h2>";

            while ($row = $result->fetch_assoc()) {
                echo "Quiz1: " . $row['Quiz1'] . "<br>";
                echo "Quiz2: " . $row['Quiz2'] . "<br>";
                echo "Assignment: " . $row['Assignment'] . "<br>";
                echo "Mid Exam Grade: " . $row['MidGrade'] . "<br>";
                echo "Final Exam Grade: " . $row['FinalGrade'] . "<br>";
                echo "Average Grade: " . $row['Grade'] . "<br>";
            }
        } else {
            echo "No grades found for the specified and Subject.";
        }
    }else if(isset($_POST['btn2'])){
        header("location: ../Home.php");
    }
    ?>
</body>
</html>
