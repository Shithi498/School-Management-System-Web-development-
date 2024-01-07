<?php

include('../Models/Gradedb.php');


if (isset($_POST['btn1'])) {
        
    $subject = $_POST['subject'];
    $email = $_GET['email'];

    
    $grades = getGrades($subject,$email) ;
       if(!empty($grades)){
        echo "<h2>$subject</h2>";
        foreach ($grades as $grade) {
            echo "Quiz1: " . $grade['Quiz1'] . "<br>";
            echo "Quiz2: " . $grade['Quiz2'] . "<br>";
            echo "Assignment: " . $grade['Assignment'] . "<br>";
            echo "Mid Exam Grade: " . $grade['Mid Exam Grade'] . "<br>";
            echo "Final Exam Grade: " . $grade['Final Exam Grade'] . "<br>";
            echo "Average Grade: " . $grade['Average Grade'] . "<br>";
            
        }
       }else
       {
        echo "No grades found for the specified subject.";
       }
    }

else if(isset($_REQUEST['btn2']))
{
    header("Location: ../Views/Home.php");
   
}

?>
