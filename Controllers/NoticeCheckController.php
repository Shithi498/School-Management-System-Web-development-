
<?php
require_once('../Models/Noticedb.php');

if (isset($_POST['btn2'])) {

    header("location: ../Views/Home.php");
} else {
   
    header('location: ../Views/notice.php');
  
}
?>