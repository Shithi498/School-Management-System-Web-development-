<?php
require_once('../Models/classmatedb.php');
if (isset($_POST['submit'])) {
    $selectedClassmate = $_POST['classmate'];

    // Store selected classmate in session
    $_SESSION['selectedClassmate'] = $selectedClassmate;

    header("location: ../Views/post.php"); // Redirect to chat interface
} 

else if (isset($_POST['btn2'])) {
    // Handle the Home button click
    header("location: ../Views/Home.php");
} else {
    // Handle invalid or unexpected requests
   
    header('location: ../Views/classmate.php');
}
?>
