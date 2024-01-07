<?php
session_start();
include('../Models/Logindb.php');

if(isset($_POST['btn1']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //$_SESSION['currentUser']=$email;
   

    if(empty($email))
    {
       echo "Empty";
    }
    else
    {
       $status= auth($email,$pass);
       if($status){
        $_SESSION['currentUser'] = $email;
      


        header("location: ../Views/Home.php");
       }else
       {
   
           header('location:../Views/Login.php');
       }
    }
}
else if(isset($_REQUEST['btn2']))
{
    header("Location: ../Views/Registration.php");
   
}

?>