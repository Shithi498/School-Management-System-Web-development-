<?php


include('../Views/Home.php');


    if (isset($_POST['logout']) ) {
        session_destroy();
        header("location: ../Views/Login.php");
    } elseif (isset($_POST['profile']) ) {
        header("location: ../Views/Post.php");
    } elseif (isset($_POST['grade'])) {
        header("location: ../Views/Grade.php");
    } elseif (isset($_POST['notice'])) {
        header("location: ../Views/Notice.php");
    } elseif (isset($_POST['4thSub'])) {
        header("location: ../Views/FourthSub.php");
    } elseif ( isset($_POST['EditProfile'])) {
        header("location: ../Views/EditProfile.php");
    }elseif ( isset($_POST['classmate'])) {
        header("location: ../Views/classmate.php");
    }

 else {
  
    header('location: Home.php');
}
?>
