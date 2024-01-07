<?php
session_start();
include('../Models/Registrationdb.php');
if(isset($_POST['btn1']))
{   
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $PhoneNum=$_POST['phn'];
    $Password=$_POST['pass'];
    $_SESSION['currentPass'] =$Password ;
    $CPassword=$_POST['cpass'];
    $Gender=$_POST['gender'];
  
    $status = auth($Name, $Email,  $Password,$Gender,$PhoneNum);
    if ($status) {
        header('location: ../Views/Login.php');
    } else {
        if (empty($Name)) {
            echo "Name not found";
        } else if (empty($Email)) {
            echo "Email not found";
        } else if (empty($PhoneNum)) {
            echo "Phone number not found";
        } else if (empty($Password)) {
            echo "Password not found";
        } else if (empty($CPassword)) {
            echo "Confirm Password not found";
        } else if ($Password != $CPassword) {
            echo "Confirm password and password are not matched";
        } else if (!isset($_POST['gender'])) {
            echo "Gender not found";
        }
    }
} else if (isset($_POST['btn2'])) {
    header("location: ../Views/Home.php");
}
   



  
  ?>