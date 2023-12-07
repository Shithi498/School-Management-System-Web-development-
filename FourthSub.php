<!DOCTYPE html>
<html>
<head>
    <title>Select Fourth Subject</title>
</head>
<body>
    <form action="" method="post">
      
        Subject:
        <select name="group" required>
            <option value="arts">Arts</option>
           <option value="science">Science</option>
          <option value="cmrs">Commerce</option>
           </select><br><br>
        <?php
        if (isset($_POST['submit'])) {
            $selectedGroup = $_POST['group'];
         if ($selectedGroup == "science") {
            echo "<input type='radio' id='bio' name='sub' value='Biology'> Biology" ;
            echo "<input type='radio' id='Hmath' name='sub' value='HigherMath'>  HigherMath";
            } elseif ($selectedGroup == "arts") {
              
                echo "<input type='radio' id='history' name='sub' value='History'>  History";
                echo "<input type='radio' id='literature' name='sub' value='Literature'>  Literature";
            } elseif ($selectedGroup == "cmrs") {
            
                echo "<input type='radio' id='accounts' name='sub' value='Accounts'>  Accounts";
                echo "<input type='radio' id='business' name='sub' value='BusinessStudies'>Business Studies";
            }
        }
        ?>
      
      
<br>
        <input type="submit" name="submit" value="submit">
        <input type="submit" value="Home" name="btn2">
    </form>

    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "web technology";
      $conn = new mysqli($servername, $username, $password, $dbname);
    
    if (isset($_POST['submit'])) {
        if(isset($_POST['sub'])) {
        $selectedGroup = $_POST['group'];
        $selectedSubject = $_POST['sub'];
      
    

        
        $sql = "INSERT INTO selectesubject(`Group`, `Subject`) VALUES ('$selectedGroup', '$selectedSubject')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Record inserted successfully.</p>";
        } 
      
    }
    }
    else if(isset($_POST['btn2'])){
        header("location: ../Home.php");
    }
    
    ?>
</body>
</html>
