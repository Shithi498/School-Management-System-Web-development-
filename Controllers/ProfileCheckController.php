<?php
require_once('../Models/Profiledb.php');

if (isset($_POST['btn2'])) {

    header("location: ../Views/Home.php");
} else {
   
    header('location: ../Views/Post.php');
  
}
?>