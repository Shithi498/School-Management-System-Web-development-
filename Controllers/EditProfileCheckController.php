<?php
 session_start();
include('../Models/EditProfiledb.php');
if(isset($_POST['btn1']))
{   
    $Name=$_POST['name'];
    $currentEmail = $_SESSION['currentUser'];
    //$Email=$_SESSION['email'];
    $PhoneNum=$_POST['phn'];
    $Password=$_POST['pass'];
    $CPassword=$_POST['cpass'];
  
  
  
    $status = auth($Name, $PhoneNum, $Password, $currentEmail);
    if ($status) {
        header('location: ../Views/Login.php');
    } else {
        if (empty($Name)) {
            echo "Name not found";
        }  else if (empty($PhoneNum)) {
            echo "Phone number not found";
        } else if (empty($Password)) {
            echo "Password not found";
        } else if (empty($CPassword)) {
            echo "Confirm Password not found";
        } else if ($Password != $CPassword) {
            echo "Confirm password and password are not matched";
        }
    }
} else if (isset($_POST['btn2'])) {
    header("location: ../Views/Home.php");
}
   



  
  ?>